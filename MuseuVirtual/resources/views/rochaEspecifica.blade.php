<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RochaEspecifica</title>
    {{-- Inclui os estilos e scripts do Vite (Tailwind CSS, etc.) --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    {{-- Inclui o CSS do Swiper do CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- CSS Personalizado para a página e o Carrossel --}}
    <style>
        /* Estilos para o contêiner principal do carrossel e seus botões */
        .swiper-container-wrapper {
            display: flex; /* Permite que os itens (botões e carrossel) fiquem lado a lado */
            align-items: center; /* Alinha os itens verticalmente ao centro */
            justify-content: center; /* Centraliza os itens horizontalmente dentro do wrapper */
            max-width: 800px; /* Largura máxima do wrapper do carrossel para desktops */
            margin: 50px auto; /* Centraliza o wrapper do carrossel na página e adiciona margem superior/inferior */
            position: relative; /* Necessário para posicionamento absoluto de outros elementos se houver */
        }

        /* Estilos para o próprio carrossel (a área visível dos slides) */
        .mySwiper {
            width: 100%; /* Ocupa toda a largura disponível do seu contêiner (swiper-container-wrapper) */
            height: 240px; /* Altura fixa para o carrossel (baseado no tamanho das miniaturas) */
            overflow: hidden; /* Garante que os slides que excedem a área sejam cortados */
        }

        /* Estilos para cada slide individual do carrossel */
        .swiper-slide {
            width: 240px; /* Largura explícita para cada slide (corresponde ao size-60 da imagem) */
            /* O espaço entre os slides será controlado pelo 'spaceBetween' no JS do Swiper */
        }

        /* Estilos para as imagens dentro dos slides do carrossel */
        .swiper-slide img {
            width: 100%; /* A imagem preenche 100% da largura do seu slide */
            height: 100%; /* A imagem preenche 100% da altura do seu slide */
            object-fit: cover; /* Recorta a imagem para cobrir toda a área do slide sem distorcer */
            border-radius: 0.75rem; /* Aplica bordas arredondadas (equivalente ao Tailwind rounded-xl) */
        }

        /* Estilos para os botões de navegação (setas) do carrossel */
        .swiper-button-prev,
        .swiper-button-next {
            width: 40px; /* Largura do botão */
            height: 40px; /* Altura do botão */
            border-radius: 50%; /* Transforma o botão em um círculo */
            background-color: rgba(0, 0, 0, 0); /* Fundo transparente por padrão */
            display: flex;
            align-items: center; /* Centraliza a seta verticalmente */
            justify-content: center; /* Centraliza a seta horizontalmente */
            cursor: pointer; /* Muda o cursor para indicar que é clicável */
            flex-shrink: 0; /* Impede que o botão encolha em telas menores */
            position: static; /* Necessário para o flexbox do pai (swiper-container-wrapper) posicioná-los */
            margin: 0 10px; /* Adiciona espaçamento horizontal entre os botões e o carrossel */
            transition: background-color 0.3s ease; /* Transição suave para a cor de fundo no hover */
        }

        /* Efeito de HOVER para o fundo dos botões de navegação */
        .swiper-button-prev:hover,
        .swiper-button-next:hover {
            background-color: rgba(0, 0, 0, 0.3); /* Fundo semi-transparente quando o mouse está sobre o botão */
        }

        /* Estilos para as setas (o conteúdo gerado por ::after) dentro dos botões */
        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 20px; /* Tamanho da fonte da seta */
            color: #F1EEDD; /* Cor padrão da seta */
            transition: color 0.3s ease; /* Transição suave para a cor da seta no hover */
        }

        /* Efeito de HOVER para a cor das SETAS */
        .swiper-button-prev:hover::after,
        .swiper-button-next:hover::after {
            color: #FFFFFF; /* Cor da seta muda para branco no hover */
        }

        /* ----- Estilos para a IMAGEM PRINCIPAL (Da Rocha Específica) ----- */
        .main-image-container {
            display: flex; /* Usa flexbox para centralizar a imagem */
            justify-content: center; /* Centraliza a imagem horizontalmente */
            align-items: center; /* Centraliza a imagem verticalmente (se houver altura disponível) */
            width: 100%; /* Garante que este contêiner ocupe a largura total do seu pai (o div com paddings responsivos) */
            margin-top: 20px; /* Adiciona um espaço da imagem para o título acima dela */
        }

        .main-image {
            max-width: 100%; /* A imagem nunca será maior que seu contêiner, garantindo responsividade */
            height: auto; /* Mantém a proporção da imagem ao redimensionar */
            display: block; /* Remove o espaço extra abaixo da imagem que navegadores podem adicionar */
            object-fit: cover; /* Recorta a imagem para cobrir a área sem distorcer (útil se você definir uma proporção fixa) */
            border-radius: 0.75rem; /* Aplica bordas arredondadas (equivalente ao Tailwind rounded-xl) */
            /* Se desejar limitar a largura máxima da imagem em telas muito grandes, adicione: */
            /* max-width: 1200px; */
        }
        /* ------------------------------------------------------------- */
    </style>

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
        {{-- @dd($rocha) --}}

        {{-- Título da página, exibindo o nome da rocha --}}
        <h1 class="font-[Arial] text-[50px] text-[#F1EEDD] pt-16"><strong>{{ $rocha->nome }}</strong></h1>

        {{-- Lógica PHP para encontrar a foto de capa (se existir) ou a primeira foto --}}
        @php
            $fotoExibir = null;
            foreach ($rocha->fotos as $item) {
                if ($item->capa) {
                    $fotoExibir = $item;
                    break;
                }
            }
            // Se nenhuma capa foi definida, usa a primeira foto disponível
            if (is_null($fotoExibir) && count($rocha->fotos) > 0) {
                $fotoExibir = $rocha->fotos[0];
            }
        @endphp

        {{-- Exibe a imagem principal se houver alguma foto para exibir --}}
        @if ($fotoExibir)
            {{-- Contêiner para centralizar a imagem principal e aplicar estilos --}}
            <div class="main-image-container">
                <img class="2xl:w-full rounded-xl main-image" {{-- Aplica bordas arredondadas e a classe CSS 'main-image' --}}
                    src="{{ asset('storage/' . $fotoExibir->caminho) }}" {{-- Caminho para a imagem --}}
                    alt="Imagem principal de {{ $rocha->nome }}"> {{-- Texto alternativo para acessibilidade --}}
            </div>
        @endif

        {{-- Wrapper para o Carrossel (Swiper) e seus botões de navegação --}}
        <div class="swiper-container-wrapper">
            <div class="swiper-button-prev"></div> {{-- Botão "anterior" do Swiper --}}
            <div class="swiper mySwiper"> {{-- Contêiner do carrossel Swiper --}}
                <div class="swiper-wrapper"> {{-- Wrapper interno para os slides do Swiper --}}
                    {{-- Loop pelas fotos da rocha para criar os slides do carrossel --}}
                    @foreach ($rocha->fotos as $item)
                        {{-- Cada slide do carrossel. pr-4 foi removido aqui pois 'spaceBetween' é configurado no JS --}}
                        <div class="swiper-slide">
                            <img class="size-60 rounded-xl" {{-- Imagem do slide (240x240px com arredondamento) --}}
                                src="{{ asset('storage/' . $item->caminho) }}"
                                alt="Miniatura de {{ $rocha->nome }}">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next"></div> {{-- Botão "próximo" do Swiper --}}
        </div>

        {{-- Seção de descrição e composição da rocha --}}
        <div class="pt-6">
            <h2 class="text-[20px] font-[arial] text-[#F1EEDD]"> <strong> Descrição:
                </strong>{{ $rocha->descricao }}</h2>
            <br>
            <h2 class="text-[20px] font-[arial] text-[#F1EEDD]"><strong> Composição da rocha: </strong>
                {{ $rocha->composicao }}</h2>
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
</body>

</html>