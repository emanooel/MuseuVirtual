<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GoogleSitesImageService
{
    public const BASE_URL = 'https://sites.google.com/view/mvifesitapina/';

    /** Imagens repetidas em quase todas as páginas (logo, ícones do tema). */
    private const EXCLUDED_FRAGMENTS = [
        'AA5AbUBkopFErGek',
        'AA5AbUB2joT0Wb86',
    ];

    public function discoverPaths(string $prefix): array
    {
        $html = $this->fetchHtml(self::BASE_URL);

        $pattern = '#'.preg_quote($prefix, '#').'[^"\'<>\s]+#u';
        preg_match_all($pattern, $html, $matches);

        $paths = collect($matches[0] ?? [])
            ->map(fn (string $path) => rawurldecode($path))
            ->unique()
            ->sort()
            ->values()
            ->all();

        return $paths;
    }

    public function discoverRochaPaths(): array
    {
        return $this->discoverPaths('rochas/');
    }

    public function discoverMineralPaths(): array
    {
        return $this->discoverPaths('minerais/');
    }

    public function pageUrl(string $path): string
    {
        $segments = array_map('rawurlencode', explode('/', trim($path, '/')));

        return self::BASE_URL.implode('/', $segments);
    }

    /**
     * @return list<string> URLs absolutas das imagens da página
     */
    public function extractImageUrls(string $html): array
    {
        preg_match_all(
            '#https://lh3\.googleusercontent\.com/sitesv/[A-Za-z0-9_\-]+=w\d+#',
            $html,
            $matches
        );

        return collect($matches[0] ?? [])
            ->map(fn (string $url) => rtrim($url, ');'))
            ->unique()
            ->values()
            ->all();
    }

    public function pickSampleImageUrl(array $urls): ?string
    {
        $filtered = collect($urls)
            ->reject(fn (string $url) => $this->isExcluded($url))
            ->sortByDesc(fn (string $url) => $this->widthFromUrl($url))
            ->values();

        if ($filtered->isEmpty()) {
            return null;
        }

        // Em páginas de amostra costuma haver uma foto grande (w1280); evita miniaturas.
        $preferred = $filtered->first(fn (string $url) => $this->widthFromUrl($url) >= 1280);

        return $preferred ?? $filtered->first();
    }

    public function fetchHtml(string $url): string
    {
        $response = Http::timeout(60)
            ->withHeaders(['User-Agent' => 'MuseuVirtual-FotoRestore/1.0'])
            ->get($url);

        $response->throw();

        return $response->body();
    }

    public function fetchPageImages(string $path): array
    {
        $html = $this->fetchHtml($this->pageUrl($path));

        return $this->extractImageUrls($html);
    }

    public function downloadImage(string $imageUrl, string $directory, string $basename): string
    {
        $response = Http::timeout(120)
            ->withHeaders(['User-Agent' => 'MuseuVirtual-FotoRestore/1.0'])
            ->get($imageUrl);

        $response->throw();

        $extension = $this->guessExtension($response->header('Content-Type'));
        $filename = Str::slug($basename).'_'.time().$extension;
        $relativePath = trim($directory, '/').'/'.$filename;

        Storage::disk('public')->put($relativePath, $response->body());

        return $relativePath;
    }

    /**
     * Gera chaves de busca a partir do caminho no Google Sites (ex.: rochas/metamórficas/quartzito/amostra-01).
     *
     * @return list<string>
     */
    public function matchKeysFromPath(string $path): array
    {
        $segments = array_values(array_filter(explode('/', $path)));
        $keys = [];

        if (count($segments) >= 2) {
            $keys[] = $this->normalizeKey(implode(' ', array_slice($segments, -2)));
        }

        $last = end($segments);
        if ($last) {
            $keys[] = $this->normalizeKey(str_replace('-', ' ', (string) $last));
        }

        $keys[] = $this->normalizeKey(str_replace('-', ' ', implode(' ', $segments)));

        return array_values(array_unique(array_filter($keys)));
    }

    public function normalizeKey(string $value): string
    {
        $ascii = Str::ascii(mb_strtolower($value));

        return preg_replace('/\s+/', ' ', trim($ascii)) ?? '';
    }

    public function scoreMatch(string $rochaNome, array $matchKeys): int
    {
        $nome = $this->normalizeKey($rochaNome);
        $best = 0;

        foreach ($matchKeys as $key) {
            if ($key === '') {
                continue;
            }

            if ($nome === $key) {
                return 100;
            }

            if (str_contains($nome, $key) || str_contains($key, $nome)) {
                $best = max($best, 60 + min(strlen($key), 30));
            }
        }

        return $best;
    }

    public function filterLeafPaths(array $paths): array
    {
        $sorted = collect($paths)->sort()->values();

        return $sorted
            ->filter(function (string $path) use ($sorted) {
                $prefix = $path.'/';

                return ! $sorted->contains(fn (string $other) => str_starts_with($other, $prefix));
            })
            ->values()
            ->all();
    }

    private function isExcluded(string $url): bool
    {
        foreach (self::EXCLUDED_FRAGMENTS as $fragment) {
            if (str_contains($url, $fragment)) {
                return true;
            }
        }

        return false;
    }

    private function widthFromUrl(string $url): int
    {
        if (preg_match('/=w(\d+)/', $url, $m)) {
            return (int) $m[1];
        }

        return 0;
    }

    private function guessExtension(?string $contentType): string
    {
        return match (true) {
            str_contains((string) $contentType, 'png') => '.png',
            str_contains((string) $contentType, 'webp') => '.webp',
            str_contains((string) $contentType, 'gif') => '.gif',
            default => '.jpg',
        };
    }
}
