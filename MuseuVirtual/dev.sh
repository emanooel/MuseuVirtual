#!/usr/bin/env bash
#
# Sobe o ambiente local do Museu Virtual com um único comando.
#
# Uso:
#   ./dev.sh          # inicia containers + Vite (padrão)
#   ./dev.sh start    # igual ao acima
#   ./dev.sh stop     # para containers Docker
#   ./dev.sh restart  # reinicia tudo
#
# Na subida, o script também:
#   - executa migrations pendentes (se houver)
#   - executa AdminSeeder se não existir usuário com role admin
#
# Acesso:
#   App:  http://localhost:8080  (Sail — não precisa de "php artisan serve")
#   Vite: http://localhost:5173
#

set -euo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
cd "$ROOT"

SAIL="${ROOT}/vendor/bin/sail"

red() { printf '\033[0;31m%s\033[0m\n' "$*"; }
green() { printf '\033[0;32m%s\033[0m\n' "$*"; }
yellow() { printf '\033[1;33m%s\033[0m\n' "$*"; }

die() {
    red "Erro: $*"
    exit 1
}

require_docker() {
    if ! command -v docker >/dev/null 2>&1; then
        die "Docker não encontrado. Instale o Docker Desktop (WSL2) e tente novamente."
    fi
    if ! docker info >/dev/null 2>&1; then
        die "Docker não está rodando. Inicie o Docker Desktop e tente novamente."
    fi
}

require_sail() {
    if [[ ! -x "$SAIL" ]]; then
        die "Laravel Sail não encontrado. Rode: composer install"
    fi
}

require_env() {
    if [[ ! -f .env ]]; then
        yellow "Arquivo .env não encontrado. Copiando de .env.example..."
        cp .env.example .env
        yellow "Configure o .env se necessário e rode: ./vendor/bin/sail artisan key:generate"
    fi
}

wait_for_mysql() {
    yellow "Aguardando MySQL ficar pronto..."
    local attempts=0
    local max_attempts=60

    until "$SAIL" exec mysql mysqladmin ping -h localhost --silent 2>/dev/null; do
        attempts=$((attempts + 1))
        if (( attempts >= max_attempts )); then
            die "MySQL não respondeu a tempo. Verifique: ./vendor/bin/sail logs mysql"
        fi
        sleep 1
    done
    green "MySQL pronto."
}

run_migrations_if_needed() {
    yellow "Verificando migrations..."

    local output
    if ! output=$("$SAIL" artisan migrate:status --pending --no-ansi 2>&1); then
        yellow "Executando migrations (banco novo ou indisponível)..."
        "$SAIL" artisan migrate --force --no-ansi
        green "Migrations aplicadas."
        return
    fi

    if echo "$output" | grep -q "No pending migrations"; then
        green "Migrations já estão em dia."
    else
        yellow "Migrations pendentes detectadas. Executando migrate..."
        "$SAIL" artisan migrate --force --no-ansi
        green "Migrations aplicadas."
    fi
}

seed_admins_if_needed() {
    yellow "Verificando usuários administradores..."

    local has_admins
    has_admins=$("$SAIL" artisan tinker --execute="echo \\App\\Models\\User::role('admin')->exists() ? '1' : '0';" --no-ansi 2>/dev/null | tr -d '\r\n' | tail -1)

    if [[ "$has_admins" == "1" ]]; then
        green "Usuários administradores já existem."
        return
    fi

    yellow "Nenhum administrador encontrado. Executando AdminSeeder..."
    "$SAIL" artisan db:seed --class=AdminSeeder --force --no-ansi
    green "Administradores criados."
}

setup_database() {
    run_migrations_if_needed
    seed_admins_if_needed
}

start() {
    require_docker
    require_sail
    require_env

    yellow "Subindo containers (Sail)..."
    "$SAIL" up -d

    wait_for_mysql
    setup_database

    echo ""
    green "Ambiente no ar!"
    echo "  → Aplicação: http://localhost:8080"
    echo "  → Vite (HMR): http://localhost:5173"
    echo "  → Mailpit:    http://localhost:8025"
    echo ""
    yellow "Iniciando Vite (Ctrl+C para parar apenas o Vite; containers continuam rodando)"
    echo "  Para parar tudo: ./dev.sh stop"
    echo ""

    exec "$SAIL" npm run dev
}

stop() {
    require_docker
    require_sail

    yellow "Parando containers..."
    "$SAIL" down
    green "Ambiente parado."
}

restart() {
    stop
    start
}

main() {
    local cmd="${1:-start}"

    case "$cmd" in
        start)
            start
            ;;
        stop)
            stop
            ;;
        restart)
            restart
            ;;
        -h|--help|help)
            sed -n '2,14p' "$0" | sed 's/^# \{0,1\}//'
            ;;
        *)
            die "Comando desconhecido: $cmd (use: start | stop | restart | help)"
            ;;
    esac
}

main "$@"
