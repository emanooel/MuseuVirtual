<?php

namespace App\Console\Commands;

use App\Models\Fotos;
use App\Models\Mineral;
use App\Models\Rocha;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class FotosDiagnosticoCommand extends Command
{
    protected $signature = 'fotos:diagnostico
                            {--tipo=rochas : rochas, minerais ou todos}
                            {--csv= : Caminho opcional para exportar CSV}';

    protected $description = 'Lista registros de foto com arquivo ausente no storage (após perda da pasta)';

    public function handle(): int
    {
        $tipo = $this->option('tipo');
        $rows = [];

        if (in_array($tipo, ['rochas', 'todos'], true)) {
            $rows = array_merge($rows, $this->diagnosticoRochas());
        }

        if (in_array($tipo, ['minerais', 'todos'], true)) {
            $rows = array_merge($rows, $this->diagnosticoMinerais());
        }

        if ($rows === []) {
            $this->info('Nenhum problema encontrado para o filtro informado.');

            return self::SUCCESS;
        }

        $this->table(
            ['Entidade', 'ID', 'Nome', 'Foto ID', 'Caminho BD', 'Problema'],
            array_map(fn (array $r) => [
                $r['entidade'],
                $r['id'],
                $r['nome'],
                $r['foto_id'],
                $r['caminho'],
                $r['problema'],
            ], $rows)
        );

        $this->newLine();
        $this->info('Resumo:');
        $this->line('  Registros com arquivo ausente: '.collect($rows)->where('problema', 'arquivo_ausente')->count());
        $this->line('  Total de linhas no relatório: '.count($rows));
        $this->line('  Rochas sem nenhuma foto no BD: '.Rocha::whereDoesntHave('fotos')->count());

        if ($path = $this->option('csv')) {
            $this->exportCsv($path, $rows);
            $this->info("CSV exportado: {$path}");
        }

        return self::SUCCESS;
    }

    private function diagnosticoRochas(): array
    {
        $rows = [];

        Rocha::with('fotos')->orderBy('nome')->each(function (Rocha $rocha) use (&$rows) {
            if ($rocha->fotos->isEmpty()) {
                $rows[] = [
                    'entidade' => 'rocha',
                    'id' => $rocha->id,
                    'nome' => $rocha->nome,
                    'foto_id' => '-',
                    'caminho' => '-',
                    'problema' => 'sem_registro_foto',
                ];

                return;
            }

            foreach ($rocha->fotos as $foto) {
                if (! Storage::disk('public')->exists($foto->caminho)) {
                    $rows[] = [
                        'entidade' => 'rocha',
                        'id' => $rocha->id,
                        'nome' => $rocha->nome,
                        'foto_id' => $foto->id,
                        'caminho' => $foto->caminho,
                        'problema' => 'arquivo_ausente',
                    ];
                }
            }
        });

        return $rows;
    }

    private function diagnosticoMinerais(): array
    {
        $rows = [];

        Mineral::with('fotos')->orderBy('nome')->each(function (Mineral $mineral) use (&$rows) {
            if ($mineral->fotos->isEmpty()) {
                $rows[] = [
                    'entidade' => 'mineral',
                    'id' => $mineral->id,
                    'nome' => $mineral->nome,
                    'foto_id' => '-',
                    'caminho' => '-',
                    'problema' => 'sem_registro_foto',
                ];

                return;
            }

            foreach ($mineral->fotos as $foto) {
                if (! Storage::disk('public')->exists($foto->caminho)) {
                    $rows[] = [
                        'entidade' => 'mineral',
                        'id' => $mineral->id,
                        'nome' => $mineral->nome,
                        'foto_id' => $foto->id,
                        'caminho' => $foto->caminho,
                        'problema' => 'arquivo_ausente',
                    ];
                }
            }
        });

        return $rows;
    }

    private function exportCsv(string $path, array $rows): void
    {
        $handle = fopen($path, 'w');
        fputcsv($handle, ['entidade', 'id', 'nome', 'foto_id', 'caminho', 'problema']);

        foreach ($rows as $row) {
            fputcsv($handle, [
                $row['entidade'],
                $row['id'],
                $row['nome'],
                $row['foto_id'],
                $row['caminho'],
                $row['problema'],
            ]);
        }

        fclose($handle);
    }
}
