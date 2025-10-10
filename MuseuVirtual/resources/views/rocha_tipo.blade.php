<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @endpush
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rochas</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>

        body {
            font-weight: bold;
            font-family: 'Cinzel', serif;
            background: rgb(0, 0, 0);
            color: #F1EEDD;
        }

        .rock-card {
            background: rgba(241, 238, 221, 0.05);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease;
            border: 1px solid rgba(241, 238, 221, 0.1);
            backdrop-filter: blur(6px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        }

        .rock-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        .rock-card img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .rock-card:hover img {
            transform: scale(1.08);
        }

        .rock-card h2 {
            font-size: 28px;
            font-weight: bold;
            color: #F1EEDD;
            margin: 15px 0;
            text-align: center;
            letter-spacing: 1px;
        }

        .section-title {
            font-size: 50px;
            color: #F1EEDD;
            margin-bottom: 50px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 3px;
            position: relative;
        }

        .section-title::after {
            content: '';
            width: 100px;
            height: 4px;
            background: #F1EEDD;
            display: block;
            margin: 15px auto 0;
            border-radius: 2px;
        }

        @media (max-width: 768px) {
            .rock-card img {
                height: 280px;
            }

            .rock-card h2 {
                font-size: 22px;
            }

            .section-title {
                font-size: 36px;
            }
        }
    </style>
</head>

<body>
    <div class="2xl:px-100"><x-menu_site /></div>
    {{-- coloquei padding no menor tamanho --}}
    <div class="w-full mx-auto p-5 2xl:px-80 xl:px-32 lg:px-20 md:px-10 py-16">
        <h1 class="section-title">
            @if ($tipo == '1')
                Ígneas
            @elseif ($tipo == '2')
                Metamórficas
            @else
                Sedimentares
            @endif
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($rochastipo as $item)
                <a href="{{ route('site.rochas.show', [$item->tipo_nome, $item->slug]) }}">
                    <div class="rock-card">
                        @php
                            $fotoExibir = null;
                            foreach ($item->fotos as $foto) {
                                if ($foto->capa) {
                                    $fotoExibir = $foto;
                                    break;
                                }
                            }
                            if (is_null($fotoExibir) && count($item->fotos) > 0) {
                                $fotoExibir = $item->fotos[0];
                            }
                        @endphp

                        @if ($fotoExibir)
                            <img src="{{ asset('storage/' . $fotoExibir->caminho) }}"
                                alt="Imagem da rocha {{ $item->nome }}">
                        @else
                            <img src="{{ asset('assets/img/placeholder.png') }}" alt="Nenhuma imagem disponível">
                        @endif

                        <h2>{{ $item->nome }}</h2>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <x-rodape_site />
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @endpush
</body>

</html>
