<style>
    .swiper-container-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        max-width: 800px;
        margin: 50px auto;
        position: relative;
    }

    .mySwiper {
        width: 600px;
        height: 400px;
    }

    .swiper-slide img {
        width: 100%;
        height: 20%;
        object-fit: cover;
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
    }

    .swiper-button-prev::after,
    .swiper-button-next::after {
        font-size: 20px;
        color: #d8d4c0
    }
</style>

<script>
    const swiper = new Swiper(".mySwiper", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MineralEspecifico</title>{{-- Título ajustado para MineralEspecifico --}}
    {{-- Inclui os estilos e scripts do Vite (Tailwind CSS, etc.) --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Fancybox JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
</head>

{{-- Classe para o fundo gradiente de toda a página --}}

<body class="bg-gradient-to-b from-[#ACB18E] from-0.5% via-[#73785C] via-5% to-[#363C27] to-20% ">

    {{-- Contêiner para o menu (com paddings responsivos do Tailwind) --}}
    <div class="2xl:px-80">
        <x-menu_site /> {{-- Componente do menu do seu site (Laravel Blade) --}}
    </div>

    {{-- Contêiner principal para o conteúdo da página (com paddings responsivos) --}}
    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 ">

        {{-- Comentário para depuração (Laravel Blade) --}}
        {{-- @dd($mineral) --}}

        {{-- Título da página, exibindo o nome do mineral --}}
        <h1 class="font-[Arial] text-[50px] text-[#F1EEDD] pt-16"><strong>{{ $mineral->nome }}</strong></h1>

        {{-- Lógica PHP para encontrar a foto de capa (se existir) ou a primeira foto --}}
        @php
            $fotoExibir = null;
            foreach ($mineral->fotos as $item) {
                if ($item->capa) {
                    $fotoExibir = $item;
                    break;
                }
            }
            // Se nenhuma capa foi definida, usa a primeira foto disponível
            if (is_null($fotoExibir) && count($mineral->fotos) > 0) {
                $fotoExibir = $mineral->fotos[0];
            }
        @endphp

        {{-- Exibe a imagem principal se houver alguma foto para exibir --}}
        @if ($fotoExibir)
            {{-- Contêiner para centralizar a imagem principal e aplicar estilos --}}
            <div class="main-image-container">
                <img class="2xl:w-full rounded-xl main-image" {{-- Aplica bordas arredondadas e a classe CSS 'main-image' --}}
                    src="{{ asset('storage/' . $fotoExibir->caminho) }}" {{-- Caminho para a imagem --}}
                    alt="Imagem principal de {{ $mineral->nome }}"> {{-- Texto alternativo para acessibilidade --}}
            </div>
        @endif

        {{-- Wrapper para o Carrossel (Swiper) e seus botões de navegação --}}
        <div class="swiper-container-wrapper">
            <div class="swiper-button-prev"></div> {{-- Botão "anterior" do Swiper --}}
            <div class="swiper mySwiper"> {{-- Contêiner do carrossel Swiper --}}
                <div class="swiper-wrapper"> {{-- Wrapper interno para os slides do Swiper --}}
                    {{-- Loop pelas fotos do mineral para criar os slides do carrossel --}}
                    @foreach ($mineral->fotos as $item)
                        {{-- Cada slide do carrossel. pr-4 foi removido aqui pois 'spaceBetween' é configurado no JS --}}
                        <a href="{{ asset('storage/' . $item->caminho) }}" data-fancybox='Galeria'>
                            <div class="swiper-slide">
                                <img class=" size-60 rounded-xl" {{-- Imagem do slide (240x240px com arredondamento) --}}
                                    src="{{ asset('storage/' . $item->caminho) }}"
                                    alt="Miniatura de {{ $mineral->nome }}">
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next"></div> {{-- Botão "próximo" do Swiper --}}
        </div>

        {{-- Seção de descrição e composição do mineral --}}
        <div class="pt-6">
            <h2 class="text-[20px] font-[arial] text-[#F1EEDD]"> <strong> Descrição:
                </strong>{{ $mineral->descricao }}</h2>
            <br>
            <h2 class="text-[20px] font-[arial] text-[#F1EEDD]"><strong> Composição do mineral: </strong>
                {{ $mineral->composicao }}</h2>
        </div>

        {{-- Componente do rodapé do seu site (Laravel Blade) --}}
        <x-rodape_site></x-rodape_site>
    </div>

    {{-- Inclui o JavaScript do Swiper do CDN (idealmente no final do <body> para melhor performance) --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Script para inicializar o Swiper --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper(".mySwiper", {
                loop: true, // Ativa o loop infinito do carrossel
                slidesPerView: 'auto', // Mostra automaticamente quantos slides cabem na tela
                spaceBetween: 16, // Espaçamento entre os slides em pixels
                navigation: { // Configura os botões de navegação
                    nextEl: ".swiper-button-next", // Seletor para o botão "próximo"
                    prevEl: ".swiper-button-prev", // Seletor para o botão "anterior"
                },
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
        });
    </script>
</body>

</html>
