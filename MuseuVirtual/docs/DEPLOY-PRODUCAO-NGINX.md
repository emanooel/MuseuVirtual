# Deploy em produção — Museu Virtual (Nginx + PHP-FPM)

Este guia descreve como publicar o **Museu Virtual** em um servidor Linux com **Nginx** como proxy reverso e **PHP-FPM** executando o Laravel. O fluxo foi pensado para Ubuntu/Debian, mas os conceitos valem para outras distribuições.

---

## Visão geral do projeto

| Componente | Tecnologia |
|------------|------------|
| Backend | Laravel 12 (PHP ^8.2) |
| Frontend (painel) | Vue 3 + Inertia.js |
| Páginas públicas | Blade + Vite (vários entry points CSS/JS) |
| Banco de dados | MySQL (recomendado em produção) |
| Autenticação / papéis | Laravel Breeze + Spatie Permission |
| Assets | Vite 6 (`npm run build` → `public/build/`) |
| Uploads | Disco `public` → `storage/app/public` (link simbólico) |
| Health check | `GET /up` |

Em desenvolvimento o projeto usa **Laravel Sail** (`./dev.sh`, porta 8080). Em produção **não** se usa Sail nem o servidor embutido do PHP: Nginx entrega arquivos estáticos e repassa o restante ao PHP-FPM.

---

## Arquitetura em produção

```
Internet
    │
    ▼
┌─────────────┐
│   Nginx     │  :443 (SSL) / :80 (redirect)
│  (estático) │  → public/build, public/tinymce, imagens em public/storage
└──────┬──────┘
       │ fastcgi
       ▼
┌─────────────┐
│  PHP-FPM    │  → index.php (Laravel)
└──────┬──────┘
       │
       ▼
┌─────────────┐     ┌──────────────┐
│   MySQL     │     │ storage/     │  (logs, cache, uploads)
└─────────────┘     └──────────────┘
```

O Laravel já confia em proxies (`bootstrap/app.php`), o que é adequado quando o Nginx termina TLS e encaminha cabeçalhos `X-Forwarded-*`.

---

## Requisitos do servidor

### Software

- **PHP 8.2+** com extensões: `cli`, `fpm`, `mysql`, `mbstring`, `xml`, `curl`, `zip`, `bcmath`, `intl`, `gd` (imagens/QR codes), `opcache`
- **Composer** 2.x
- **Node.js 20+** e **npm** (apenas para compilar assets no deploy; não precisa rodar Vite em produção)
- **MySQL 8.0+** (ou MariaDB 10.6+)
- **Nginx** 1.18+
- **Git**
- **Certbot** (opcional, para HTTPS com Let's Encrypt)

### Recursos sugeridos

- Mínimo: 2 vCPU, 2 GB RAM, 20 GB disco
- Upload de fotos: reserve espaço extra em `storage/app/public`

### Usuário do sistema

Recomenda-se um usuário dedicado, por exemplo `www-data` (padrão Debian/Ubuntu) ou um usuário `deploy` que seja dono do código e compartilhe o grupo com o PHP-FPM.

---

## 1. Preparar o servidor

Exemplo em Ubuntu 22.04/24.04:

```bash
sudo apt update && sudo apt upgrade -y

sudo apt install -y \
  nginx \
  mysql-server \
  git \
  unzip \
  curl \
  software-properties-common

# Repositório PHP (se a versão do sistema for < 8.2)
sudo add-apt-repository ppa:ondrej/php -y
sudo apt update

sudo apt install -y \
  php8.2-fpm php8.2-cli php8.2-mysql php8.2-mbstring \
  php8.2-xml php8.2-curl php8.2-zip php8.2-bcmath \
  php8.2-intl php8.2-gd php8.2-opcache

# Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Node.js 20 (via NodeSource — ajuste conforme sua política)
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
sudo apt install -y nodejs
```

### MySQL

```bash
sudo mysql_secure_installation

sudo mysql -e "
CREATE DATABASE museu_virtual CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'museu'@'localhost' IDENTIFIED BY 'SENHA_FORTE_AQUI';
GRANT ALL PRIVILEGES ON museu_virtual.* TO 'museu'@'localhost';
FLUSH PRIVILEGES;
"
```

---

## 2. Obter o código da aplicação

```bash
sudo mkdir -p /var/www
sudo chown $USER:www-data /var/www

cd /var/www
git clone https://github.com/SEU_ORG/MuseuVirtual.git museuvirtual
cd museuvirtual
```

> Substitua a URL do repositório pela do seu projeto. Em CI/CD, o deploy costuma ser feito por `git pull` ou artefato rsync no mesmo diretório.

---

## 3. Variáveis de ambiente (`.env`)

Copie o exemplo e edite para produção:

```bash
cp .env.example .env
nano .env
```

Exemplo de configuração **produção**:

```env
APP_NAME="Museu Virtual"
APP_ENV=production
APP_KEY=                           # gerado com artisan key:generate
APP_DEBUG=false
APP_URL=https://museu.seudominio.com.br

APP_LOCALE=pt_BR
APP_FALLBACK_LOCALE=pt_BR

LOG_CHANNEL=stack
LOG_LEVEL=warning

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=museu_virtual
DB_USERNAME=museu
DB_PASSWORD=SENHA_FORTE_AQUI

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_SECURE_COOKIE=true
SESSION_DOMAIN=seudominio.com.br

CACHE_STORE=database
QUEUE_CONNECTION=database

FILESYSTEM_DISK=local

MAIL_MAILER=smtp
MAIL_HOST=smtp.seudominio.com.br
MAIL_PORT=587
MAIL_USERNAME=noreply@seudominio.com.br
MAIL_PASSWORD=...
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@seudominio.com.br
MAIL_FROM_NAME="${APP_NAME}"

VITE_APP_NAME="${APP_NAME}"
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

**Importante:** nunca commite o `.env`. O arquivo está no `.gitignore`.

---

## 4. Instalar dependências e compilar assets

### PHP (sem pacotes de desenvolvimento)

```bash
composer install --no-dev --optimize-autoloader
```

### Frontend (build de produção)

Os arquivos em `public/build/` **não** vão para o Git. É obrigatório compilar no servidor (ou na pipeline de CI antes do rsync):

```bash
npm ci
npm run build
```

Confirme que existem `public/build/manifest.json` e os bundles gerados.

**Não** deixe o arquivo `public/hot` no servidor — ele indica modo desenvolvimento do Vite e quebra o carregamento dos assets em produção:

```bash
rm -f public/hot
```

---

## 5. Permissões e link de storage

O Laravel precisa escrever em `storage/` e `bootstrap/cache/`. Uploads públicos ficam em `storage/app/public` e são expostos via link:

```bash
php artisan storage:link

sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
```

Se o deploy for feito por outro usuário, uma abordagem comum é:

```bash
sudo chown -R deploy:www-data /var/www/museuvirtual
sudo find storage bootstrap/cache -type d -exec chmod 775 {} \;
sudo find storage bootstrap/cache -type f -exec chmod 664 {} \;
```

---

## 6. Banco de dados e dados iniciais

```bash
php artisan migrate --force
```

Para criar usuários administradores (opcional, apenas na primeira instalação):

```bash
php artisan db:seed --class=AdminSeeder --force
```

> **Segurança:** o `AdminSeeder` cria contas com senhas padrão definidas no código. Após o primeiro login, altere todas as senhas ou remova usuários desnecessários. Em produção, prefira criar admins manualmente ou via seeder customizado sem senhas fixas.

---

## 7. Otimizações do Laravel

Execute após cada deploy que altere config, rotas ou views:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache   # Laravel 11+
```

Para limpar caches durante troubleshooting:

```bash
php artisan optimize:clear
```

---

## 8. Configurar PHP-FPM

Arquivo típico: `/etc/php/8.2/fpm/pool.d/www.conf` (ou pool dedicado).

Ajustes recomendados para produção:

```ini
; pool www.conf (trechos)
user = www-data
group = www-data
listen = /run/php/php8.2-fpm.sock
listen.owner = www-data
listen.group = www-data

pm = dynamic
pm.max_children = 20
pm.start_servers = 4
pm.min_spare_servers = 2
pm.max_spare_servers = 6

php_admin_value[upload_max_filesize] = 32M
php_admin_value[post_max_size] = 32M
php_admin_value[memory_limit] = 256M
```

Em `/etc/php/8.2/fpm/php.ini`:

```ini
opcache.enable=1
opcache.memory_consumption=128
opcache.max_accelerated_files=10000
opcache.validate_timestamps=0   ; em produção, após deploy estável
```

Reinicie o FPM após mudanças:

```bash
sudo systemctl restart php8.2-fpm
sudo systemctl enable php8.2-fpm
```

---

## 9. Configurar Nginx

Crie o site em `/etc/nginx/sites-available/museuvirtual`:

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name museu.seudominio.com.br;
    return 301 https://$host$request_uri;
}

server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name museu.seudominio.com.br;

    root /var/www/museuvirtual/public;
    index index.php;

    # Certificados (Certbot preenche estes caminhos)
    ssl_certificate     /etc/letsencrypt/live/museu.seudominio.com.br/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/museu.seudominio.com.br/privkey.pem;
    include /etc/letsencrypt/options-ssl-nginx.conf;
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem;

    charset utf-8;
    client_max_body_size 32M;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    # Logs
    access_log /var/log/nginx/museuvirtual-access.log;
    error_log  /var/log/nginx/museuvirtual-error.log;

    # Arquivos estáticos com cache
    location ~* \.(js|css|png|jpg|jpeg|gif|ico|svg|woff|woff2|ttf|eot)$ {
        expires 30d;
        access_log off;
        try_files $uri =404;
    }

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    location ~ \.php$ {
        fastcgi_pass unix:/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
        fastcgi_hide_header X-Powered-By;
    }

    # Bloquear acesso a arquivos sensíveis
    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

Ative o site e teste:

```bash
sudo ln -s /etc/nginx/sites-available/museuvirtual /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl reload nginx
```

### HTTPS com Let's Encrypt

```bash
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d museu.seudominio.com.br
```

O Certbot ajusta o bloco SSL automaticamente na primeira execução.

---

## 10. Fila de jobs (opcional)

O `.env.example` define `QUEUE_CONNECTION=database`. Se no futuro houver jobs em fila, configure um worker com **systemd**.

`/etc/systemd/system/museuvirtual-queue.service`:

```ini
[Unit]
Description=Museu Virtual Queue Worker
After=network.target mysql.service

[Service]
User=www-data
Group=www-data
Restart=always
WorkingDirectory=/var/www/museuvirtual
ExecStart=/usr/bin/php artisan queue:work --sleep=3 --tries=3 --max-time=3600

[Install]
WantedBy=multi-user.target
```

```bash
sudo systemctl daemon-reload
sudo systemctl enable --now museuvirtual-queue
```

Hoje o projeto não depende fortemente de filas assíncronas; este passo é preventivo.

---

## 11. Agendador (cron)

Se forem adicionadas tarefas agendadas em `routes/console.php`, registre o scheduler do Laravel:

```bash
sudo crontab -u www-data -e
```

```cron
* * * * * cd /var/www/museuvirtual && php artisan schedule:run >> /dev/null 2>&1
```

---

## 12. Script de deploy (atualizações)

Salve como `/var/www/museuvirtual/deploy.sh` (executável apenas pelo usuário de deploy):

```bash
#!/usr/bin/env bash
set -euo pipefail

APP_DIR="/var/www/museuvirtual"
cd "$APP_DIR"

git pull origin main

composer install --no-dev --optimize-autoloader

npm ci
npm run build
rm -f public/hot

php artisan migrate --force
php artisan storage:link 2>/dev/null || true

php artisan config:cache
php artisan route:cache
php artisan view:cache

sudo systemctl reload php8.2-fpm
echo "Deploy concluído."
```

Coloque o repositório em modo de manutenção durante deploys longos:

```bash
php artisan down --refresh=15
# ... deploy ...
php artisan up
```

---

## 13. Checklist pós-deploy

| Item | Comando / verificação |
|------|------------------------|
| Página inicial carrega | Abrir `https://museu.seudominio.com.br` |
| Health check | `curl -f https://museu.seudominio.com.br/up` |
| Assets Vite | DevTools → Network: JS/CSS de `/build/assets/` sem 404 |
| Login no painel | `/login` → `/dashboard` |
| Upload de imagens | Criar/editar conteúdo com foto |
| Imagens antigas | URLs `/storage/...` respondem 200 |
| `APP_DEBUG=false` | Erros não expõem stack trace |
| `public/hot` ausente | `test ! -f public/hot` |
| Logs | `tail -f storage/logs/laravel.log` |
| Permissões | Upload não falha com erro de permissão |

---

## 14. Solução de problemas

### Página em branco ou erro 500

```bash
tail -50 storage/logs/laravel.log
tail -50 /var/log/nginx/museuvirtual-error.log
```

Causas frequentes: `APP_KEY` vazio, permissões em `storage/`, `.env` incorreto, migrações não executadas.

### CSS/JS não carregam (layout quebrado)

1. Confirme `npm run build` e existência de `public/build/manifest.json`
2. Remova `public/hot` se existir
3. Limpe cache do navegador
4. Verifique `APP_URL` com o mesmo esquema/domínio do site (https)

### Imagens de upload retornam 404

```bash
php artisan storage:link
ls -la public/storage
```

O link deve apontar para `storage/app/public`.

### Erro 413 (arquivo grande)

Aumente `client_max_body_size` no Nginx e `upload_max_filesize` / `post_max_size` no PHP-FPM.

### Sessão não persiste / logout constante

- `SESSION_DOMAIN` compatível com o domínio
- Com HTTPS: `SESSION_SECURE_COOKIE=true`
- Tabela `sessions` criada (`php artisan session:table` + migrate, se usar driver database)

### Mixed content (HTTP em página HTTPS)

Defina `APP_URL=https://...` e force HTTPS no Nginx.

---

## 15. Diferenças em relação ao ambiente local

| Local (`./dev.sh` / Sail) | Produção |
|---------------------------|----------|
| Docker + porta 8080 | Nginx + PHP-FPM |
| `npm run dev` (Vite HMR) | `npm run build` (assets estáticos) |
| `APP_DEBUG=true` | `APP_DEBUG=false` |
| MySQL no container `mysql` | MySQL em `127.0.0.1` |
| Mailpit | SMTP real |

---

## Referências rápidas

- [Documentação Laravel — Deployment](https://laravel.com/docs/deployment)
- [Documentação Nginx](https://nginx.org/en/docs/)
- Endpoint de saúde da aplicação: `/up`
- Diretório público do servidor web: `public/` (nunca a raiz do repositório)

---

*Documento gerado para o repositório Museu Virtual. Ajuste domínios, caminhos e credenciais conforme o seu ambiente.*
