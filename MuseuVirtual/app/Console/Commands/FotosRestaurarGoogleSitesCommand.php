<?php

namespace App\Console\Commands;

use App\Models\Fotos;
use App\Models\Mineral;
use App\Models\Rocha;
use App\Services\GoogleSitesImageService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FotosRestaurarGoogleSitesCommand extends Command
{
    protected $signature = 'fotos:restaurar-google-sites
                            {--tipo=rochas : rochas, minerais ou todos}
                            {--dry-run : Apenas simula, sem baixar nem gravar}
                            {--path= : Restaura só esta página do site (ex.: rochas/metamórficas/quartzito/amostra-01)}
                            {--rocha= : ID da rocha ao usar --path}
                            {--mineral= : ID do mineral ao usar --path}
                            {--min-score=55 : Pontuação mínima para associar nome da rocha ao caminho do site}
                            {--force : Baixa mesmo se o arquivo já existir no disco}';

    protected $description = 'Baixa imagens do Google Sites antigo e reassocia ao registro em fotos';

    public function __construct(private GoogleSitesImageService $googleSites)
    {
        parent::__construct();
    }

    public function handle(): int
    {
        $dryRun = (bool) $this->option('dry-run');
        $tipo = $this->option('tipo');
        $minScore = (int) $this->option('min-score');

        if ($path = $this->option('path')) {
            return $this->restoreSinglePath($path, $dryRun);
        }

        if (in_array($tipo, ['rochas', 'todos'], true)) {
            $this->restoreRochas($dryRun, $minScore);
        }

        if (in_array($tipo, ['minerais', 'todos'], true)) {
            $this->restoreMinerais($dryRun, $minScore);
        }

        return self::SUCCESS;
    }

    private function restoreRochas(bool $dryRun, int $minScore): void
    {
        $this->info('Descobrindo páginas de rochas no Google Sites...');
        $paths = collect($this->googleSites->filterLeafPaths($this->googleSites->discoverRochaPaths()));

        $this->line("  Páginas de amostra encontradas: {$paths->count()}");

        $rochas = Rocha::with('fotos')->get()->filter(fn (Rocha $r) => $this->needsRestore($r->fotos));

        $this->line("  Rochas a restaurar no banco: {$rochas->count()}");
        $this->newLine();

        $restored = 0;
        $unmatched = [];

        foreach ($rochas as $rocha) {
            $match = $this->findBestPathForRocha($rocha->nome, $paths, $minScore);

            if ($match === null) {
                $unmatched[] = $rocha->nome;
                $this->warn("  [?] Sem correspondência: {$rocha->nome}");

                continue;
            }

            $ok = $this->restoreForEntity(
                entityLabel: 'rocha',
                entityName: $rocha->nome,
                path: $match,
                fotos: $rocha->fotos,
                directory: 'fotos/rochas',
                idField: 'idRocha',
                entityId: $rocha->id,
                dryRun: $dryRun
            );

            if ($ok) {
                $restored++;
            }

            usleep(400_000);
        }

        $this->newLine();
        $this->info("Restauradas: {$restored}");

        if ($unmatched !== []) {
            $this->warn('Sem match automático ('.count($unmatched).'):');
            foreach ($unmatched as $nome) {
                $this->line("  - {$nome}");
            }
            $this->line('Use --path=rochas/.../amostra-01 para forçar uma página específica.');
        }
    }

    private function restoreMinerais(bool $dryRun, int $minScore): void
    {
        $this->info('Descobrindo páginas de minerais no Google Sites...');
        $paths = collect($this->googleSites->filterLeafPaths($this->googleSites->discoverMineralPaths()));

        $minerais = Mineral::with('fotos')->get()->filter(fn (Mineral $m) => $this->needsRestore($m->fotos));

        $this->line("  Minerais a restaurar: {$minerais->count()}");

        $restored = 0;
        foreach ($minerais as $mineral) {
            $match = $this->findBestPathForName($mineral->nome, $paths, $minScore, 'minerais/');

            if ($match === null) {
                $this->warn("  [?] Sem correspondência: {$mineral->nome}");
                continue;
            }

            if ($this->restoreForEntity(
                entityLabel: 'mineral',
                entityName: $mineral->nome,
                path: $match,
                fotos: $mineral->fotos,
                directory: 'fotos/minerais',
                idField: 'idMineral',
                entityId: $mineral->id,
                dryRun: $dryRun
            )) {
                $restored++;
            }
        }

        $this->info("Minerais restaurados: {$restored}");
    }

    private function restoreSinglePath(string $path, bool $dryRun): int
    {
        $path = trim($path, '/');

        if ($rochaId = $this->option('rocha')) {
            $rocha = Rocha::with('fotos')->findOrFail($rochaId);

            return $this->restoreForEntity(
                entityLabel: 'rocha',
                entityName: $rocha->nome,
                path: $path,
                fotos: $rocha->fotos,
                directory: 'fotos/rochas',
                idField: 'idRocha',
                entityId: $rocha->id,
                dryRun: $dryRun
            ) ? self::SUCCESS : self::FAILURE;
        }

        if ($mineralId = $this->option('mineral')) {
            $mineral = Mineral::with('fotos')->findOrFail($mineralId);

            return $this->restoreForEntity(
                entityLabel: 'mineral',
                entityName: $mineral->nome,
                path: $path,
                fotos: $mineral->fotos,
                directory: 'fotos/minerais',
                idField: 'idMineral',
                entityId: $mineral->id,
                dryRun: $dryRun
            ) ? self::SUCCESS : self::FAILURE;
        }

        $this->error('Com --path, informe --rocha=ID ou --mineral=ID.');
        $this->line('Ex.: php artisan fotos:restaurar-google-sites --path=rochas/metamórficas/quartzito/amostra-01 --rocha=12');

        return self::FAILURE;
    }

    private function findBestPathForRocha(string $nome, $paths, int $minScore): ?string
    {
        return $this->findBestPathForName($nome, $paths, $minScore, 'rochas/');
    }

    private function findBestPathForName(string $nome, $paths, int $minScore, string $prefix): ?string
    {
        $bestPath = null;
        $bestScore = 0;

        foreach ($paths as $path) {
            if (! str_starts_with($path, $prefix)) {
                continue;
            }

            $score = $this->googleSites->scoreMatch($nome, $this->googleSites->matchKeysFromPath($path));

            if ($score > $bestScore) {
                $bestScore = $score;
                $bestPath = $path;
            }
        }

        return $bestScore >= $minScore ? $bestPath : null;
    }

    private function restoreForEntity(
        string $entityLabel,
        string $entityName,
        string $path,
        $fotos,
        string $directory,
        string $idField,
        int $entityId,
        bool $dryRun
    ): bool {
        $this->line("→ [{$entityLabel}] {$entityName}");
        $this->line("    Site: {$path}");

        try {
            $urls = $this->googleSites->fetchPageImages($path);
        } catch (\Throwable $e) {
            $this->error("    Falha ao buscar página: {$e->getMessage()}");

            return false;
        }

        $imageUrl = $this->googleSites->pickSampleImageUrl($urls);

        if ($imageUrl === null) {
            $this->warn('    Nenhuma imagem utilizável na página.');

            return false;
        }

        $imageId = preg_match('#/sitesv/(AA5Ab[A-Za-z0-9_\-]+)=#', $imageUrl, $m) ? substr($m[1], 0, 24).'…' : '?';
        $this->line("    Imagem (id {$imageId}): ".Str::limit($imageUrl, 70));

        if ($dryRun) {
            $this->comment('    (dry-run: nada gravado)');

            return true;
        }

        try {
            $relativePath = $this->googleSites->downloadImage($imageUrl, $directory, $entityName);
        } catch (\Throwable $e) {
            $this->error("    Falha no download: {$e->getMessage()}");

            return false;
        }

        $foto = $fotos->sortByDesc('capa')->first();

        if ($foto) {
            $foto->update(['caminho' => $relativePath]);
            $this->info("    Atualizado fotos.id={$foto->id} → {$relativePath}");
        } else {
            Fotos::create([
                $idField => $entityId,
                'caminho' => $relativePath,
                'capa' => true,
            ]);
            $this->info("    Criado registro em fotos → {$relativePath}");
        }

        return true;
    }

    private function needsRestore($fotos): bool
    {
        if ($this->option('force')) {
            return true;
        }

        if ($fotos->isEmpty()) {
            return true;
        }

        return $fotos->contains(
            fn (Fotos $foto) => ! Storage::disk('public')->exists($foto->caminho)
        );
    }
}
