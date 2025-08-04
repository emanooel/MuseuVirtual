<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mineral: {{ $mineral->nome }}</title>

    {{-- Inclui os estilos e scripts do Vite (Tailwind CSS, etc.) --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        /* Estilos personalizados para o carrossel Swiper */
        .swiper-container-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 800px;
            margin: 50px auto;
            position: relative;
        }

        .mySwiper {
            width: 100%;
            height: 240px;
        }

        .swiper-slide {
            width: 240px;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0.75rem;
        }

        .swiper-button-prev,
        .swiper-button-next {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            flex-shrink: 0;
            margin: 0 10px;
            color: #d8d4c0;
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 20px;
            color: inherit;
        }

        /* Estilos para a imagem principal (fora do carrossel) */
        .main-image {
            max-width: 100%;
            height: auto;
            display: block;
            border-radius: 0.75rem;
        }

        .main-image-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-[#ACB18E] from-0.5% via-[#73785C] via-5% to-[#363C27] to-20%">
    {{-- Contêiner para o menu --}}
    <div class="2xl:px-80">
        <x-menu_site />
    </div>

    {{-- Contêiner principal para o conteúdo da página --}}
    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10">

        {{-- Título da página --}}
        <h1 class="font-[Arial] text-[50px] text-[#F1EEDD] pt-16">
            <strong>{{ $mineral->nome }}</strong>
        </h1>

        {{-- Lógica PHP para encontrar a foto principal --}}
        @php
            $fotoPrincipal = $mineral->fotos->firstWhere('capa') ?? $mineral->fotos->first();
        @endphp

        {{-- Exibe a imagem principal --}}
        @if ($fotoPrincipal)
            <div class="main-image-container">
                <img class="main-image" src="{{ asset('storage/' . $fotoPrincipal->caminho) }}"
                    alt="Imagem principal de {{ $mineral->nome }}">
            </div>
        @endif
        
        {{-- Modal QR Code do Mineral --}}
        {{-- Este bloco foi movido para depois da imagem principal --}}
        <div x-data="{ modalAberto: false }" class="py-4 flex justify-left">
            <button @click="modalAberto = true" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Ver QR Code do Mineral 📥
            </button>
            <div x-show="modalAberto" x-transition class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" style="display: none;">
                <div class="bg-white p-6 rounded-lg max-w-sm w-full text-center relative">
                    <h2 class="text-xl font-bold mb-4 text-gray-800">QR Code do Mineral</h2>
                    <img src="{{ route('minerais.qrcode', $mineral->id) }}" alt="QR Code do Mineral" class="mx-auto mb-4">
                    <button @click="modalAberto = false" class="absolute top-2 right-2 text-gray-600 hover:text-red-600 text-2xl font-bold">&times;</button>
                </div>
            </div>
        </div>

        {{-- Wrapper para o Carrossel (Swiper) e seus botões --}}
        <div class="swiper-container-wrapper">
            <div class="swiper-button-prev"></div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    {{-- Loop pelas fotos do mineral para criar os slides --}}
                    @foreach ($mineral->fotos as $item)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $item->caminho) }}" alt="Miniatura de {{ $mineral->nome }}">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next"></div>
        </div>

        {{-- Seção de descrição e composição --}}
        <div class="pt-6">
            <h2 class="text-[20px] font-[arial] text-[#F1EEDD]">
                <strong>Descrição:</strong> {{ $mineral->descricao }}
            </h2>
            <br>
            <h2 class="text-[20px] font-[arial] text-[#F1EEDD]">
                <strong>Composição do mineral:</strong> {{ $mineral->composicao }}
            </h2>
        </div>

        <x-rodape_site></x-rodape_site>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <script>
        // Inicialização do Swiper após o carregamento do DOM
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper(".mySwiper", {
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 16,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        });
    </script>
</body>

</html>