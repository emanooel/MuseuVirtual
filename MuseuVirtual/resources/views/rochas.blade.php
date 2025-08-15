<x-layouts.BaseLayout>

    <x-slot name="title">Rochas</x-slot>
    <style>
        /* Estilos para o contêiner principal do carrossel e seus botões */
        /* Estilos gerais para o carrossel e seus componentes */
        .swiper-container-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1200px;
            /* Aumentado de 800px para 1200px */
            /* Aumentando a largura máxima para acomodar 4 slides de 500px (2000px) + espaçamento */
            max-width: 2100px;
            margin: 50px auto;
            position: relative;
        }

        /* Estilos para o próprio carrossel (a área visível dos slides) */
        .mySwiper,
        .SwiperRochas {
            width: 100%;
            height: 600px;
            /* Aumentado de 240px para 600px */
            overflow: hidden;
        }

        /* Estilos para cada slide individual do carrossel */
        /* Removendo a largura fixa do slide para que o Swiper a calcule automaticamente */
        .swiper-slide {
            width: 400px;
            /* Aumentado de 240px para 400px */
            /* O espaço entre os slides será controlado pelo 'spaceBetween' no JS do Swiper */
            height: 700px;
        }

        /* Estilos para as imagens dentro dos slides do carrossel */
        .swiper-slide img {
            width: 100%;
            height: 100%;
            width: 500px;
            height: 500px;
            object-fit: cover;
            border-radius: 0.75rem;
            transition: transform 0.3s ease-in-out;
        }

        /* Estilos para os botões de navegação (setas) do carrossel */
        .swiper-slide img:hover {
            transform: scale(1.05);
        }

        /* Botões de navegação do carrossel */
        .swiper-button-prev,
        .swiper-button-next {
            width: 50px;
            /* Aumentado de 40px para 50px */
            height: 50px;
            /* Aumentado de 40px para 50px */
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0);
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            flex-shrink: 0;
            position: static;
            margin: 0 15px;
            /* Aumentado de 10px para 15px */
            transition: background-color 0.3s ease;
        }

        /* Efeito de HOVER para o fundo dos botões de navegação */
        .swiper-button-prev:hover,
        .swiper-button-next:hover {
            background-color: rgba(0, 0, 0, 0.3);
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Estilos para as setas (o conteúdo gerado por ::after) dentro dos botões */
        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 24px;
            /* Aumentado de 20px para 24px */
            color: #F1EEDD;
            transition: color 0.3s ease;
        }

        /* Efeito de HOVER para a cor das SETAS */
        .swiper-button-prev:hover::after,
        .swiper-button-next:hover::after {
            color: #FFFFFF;
        }
    </style>

    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 ">

        <h1 class="font-[Arial] text-[50px]  text-[#F1EEDD] pb-6 pt-16"><strong>Rochas</strong></h1>
        <div class="">
            <img class= "2xl:pb-40 pb-10 w-full " src="/assets/img/image (3).png" alt="Foto da rocha tal">
        </div>

        {{-- tipo 1 --}}
        <div class="w-full xl:mx-auto">
            <div class="swiper-container-wrapper">
                <div class="swiper SwiperIgneas">
                    <div class="flex justify-between items-center">
                        <h2 class="font-[Arial] text-[40px] text-[#F1EEDD] pb-8"><strong>Igneas</strong></h2>
                        <div class="flex">
                            <div class="swiper-button-prev swiper-button-prev-1"></div>
                            <div class="swiper-button-next swiper-button-next-1"></div>
                        </div>
                    </div>
                    <div class="swiper-wrapper">
                        @foreach ($rochastipo1 as $item)
                            <div class="swiper-slide"> {{-- IMPORTANTE: Cada item deve ser um swiper-slide --}}
                                <a href="{{ route('Rocha.show', $item->id) }}">
                                    <figure class="w-full ">
                                        @php
                                            $fotoExibir = null; // Inicializa como nulo
                                            // Tenta encontrar uma foto com capa
                                            foreach ($item->fotos as $foto) {
                                                if ($foto->capa) {
                                                    $fotoExibir = $foto;
                                                    break; // Encontrou a capa, pode parar
                                                }
                                            }

                                            // Se nenhuma capa foi encontrada, usa a primeira foto (se existir)
                                            if (is_null($fotoExibir) && count($item->fotos) > 0) {
                                                $fotoExibir = $item->fotos[0];
                                            }
                                        @endphp

                                        @if ($fotoExibir)
                                            {{-- Verifica se uma foto foi encontrada para exibir --}}
                                            <img class="object-cover w-full h-[500px] rounded-xl hover:scale-105 duration-300"
                                                src="{{ asset('storage/' . $fotoExibir->caminho) }}"
                                                alt="Imagem da rocha tal">
                                            <div class="flex">
                                                {{-- <div class="flex">
                                <img class="" src="/assets/img/Vector.png" alt="curtir">
                                <img class="" src="/assets/img/Vector (1).png" alt="salvar">
                            </div> --}}
                                                <figcaption>
                                                    <h2 class="font-[Arial] text-[30px] text-[#F1EEDD] pt-4">
                                                        <strong>{{ $item->nome }}</strong>
                                                    </h2>
                                                </figcaption>
                                            </div>
                                        @else
                                            {{-- Opcional: Adicionar um placeholder se não houver fotos --}}
                                            <img class="object-cover w-full h-[500px] rounded-xl hover:scale-95 duration-300"
                                                src="{{ asset('assets/img/placeholder.png') }}"
                                                alt="Nenhuma imagem disponível">
                                            <div class="flex">
                                                {{-- <div class="flex">
                                <img class="" src="/assets/img/Vector.png" alt="curtir">
                                <img class="" src="/assets/img/Vector (1).png" alt="salvar">
                            </div> --}}
                                                <figcaption>
                                                    <h2 class="font-[Arial] text-[30px] text-[#F1EEDD] pt-4">
                                                        <strong>{{ $item->nome }}</strong>
                                                    </h2>
                                                </figcaption>
                                            </div>
                                        @endif
                                    </figure>
                                </a>
                            </div> {{-- Fim do swiper-slide --}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- tipo 2 - Metamórficas --}}
        <div class="flex grid grid-cols-2 gap-6 mt-20">
            <h2 class="font-[Arial] text-[40px] text-[#F1EEDD] pb-8"><strong>Metamórficas</strong></h2>
        </div>
        <div class="w-full xl:mx-auto">
            <div class="swiper-container-wrapper">
                <div class="swiper-button-prev swiper-button-prev-2"></div>
                <div class="swiper-button-next swiper-button-next-2"></div>
                <div class="swiper SwiperRochas">
                    <div class="swiper-wrapper">
                        @foreach ($rochastipo2 as $item)
                            <div class="swiper-slide"> {{-- IMPORTANTE: Cada item deve ser um swiper-slide --}}
                                <a href="{{ route('Rocha.show', $item->id) }}">
                                    <figure class="w-full">
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
                                            <img class="object-cover w-full  rounded-xl hover:scale-95 duration-300"
                                                src="{{ asset('storage/' . $fotoExibir->caminho) }}"
                                                alt="Imagem da rocha {{ $item->nome }}">
                                        @else
                                            <img class="object-cover w-full h-[500px] rounded-xl hover:scale-95 duration-300"
                                                src="{{ asset('assets/img/placeholder.png') }}"
                                                alt="Nenhuma imagem disponível">
                                        @endif

                                        <div class="flex">
                                            <figcaption>
                                                <h2 class="font-[Arial] text-[30px] text-[#F1EEDD] pt-4">
                                                    <strong>{{ $item->nome }}</strong>
                                                </h2>
                                            </figcaption>
                                        </div>
                                    </figure>
                                </a>
                            </div> {{-- Fim do swiper-slide --}}
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="text-center m-10">
                <a href="{{ route('site.rochas.tipo', 2) }}"
                    class="p-1 pl-9 pr-9 rounded-full bg-[#F1EEDD] hover:bg-[#ACB18E] text-[#565851] cursor-pointer">
                    Ver mais
                </a>
            </div>
        </div>
    </div>
    {{-- tipo 3 --}}
    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10">
        <h2 class="font-[Arial] text-[40px] text-[#F1EEDD] pb-8"><strong>Sedimentares</strong></h2>
    </div>
    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10">
        <div class="swipper-container-wrapper">
            <div class="swiper-button-prev swiper-button-prev-3"></div>
            <div class="swiper-button-next swiper-button-next-3"></div>
            <div class="swiper SwiperMetamorficas">
                <div class="swiper-wrapper">
                    @foreach ($rochastipo3 as $item)
                        <div class="swiper-slide"> {{-- IMPORTANTE: Cada item deve ser um swiper-slide --}}
                            <a href="{{ route('Rocha.show', $item->id) }}">
                                <figure class="w-full ">
                                    @php
                                        $fotoExibir = null; // Inicializa como nulo
                                        // Tenta encontrar uma foto com capa
                                        foreach ($item->fotos as $foto) {
                                            if ($foto->capa) {
                                                $fotoExibir = $foto;
                                                break; // Encontrou a capa, pode parar
                                            }
                                        }

                                        // Se nenhuma capa foi encontrada, usa a primeira foto (se existir)
                                        if (is_null($fotoExibir) && count($item->fotos) > 0) {
                                            $fotoExibir = $item->fotos[0];
                                        }
                                    @endphp

                                    @if ($fotoExibir)
                                        {{-- Verifica se uma foto foi encontrada para exibir --}}
                                        <img class="object-cover w-full h-[500px] rounded-xl hover:scale-95 duration-300"
                                            src="{{ asset('storage/' . $fotoExibir->caminho) }}"
                                            alt="Imagem da rocha tal">
                                        <div class="flex">
                                            {{-- <div class="flex">
                                <img class="" src="/assets/img/Vector.png" alt="curtir">
                                <img class="" src="/assets/img/Vector (1).png" alt="salvar">
                            </div> --}}
                                            <figcaption>
                                                <h2 class="font-[Arial] text-[30px] text-[#F1EEDD] pt-4">
                                                    <strong>{{ $item->nome }}</strong>
                                                </h2>
                                            </figcaption>
                                        </div>
                                    @else
                                        {{-- Opcional: Adicionar um placeholder se não houver fotos --}}
                                        <img class="object-cover w-full h-[500px] rounded-xl hover:scale-95 duration-300"
                                            src="{{ asset('assets/img/placeholder.png') }}"
                                            alt="Nenhuma imagem disponível">

                                        <div class="flex">
                                            {{-- <div class="flex">
                                <img class="" src="/assets/img/Vector.png" alt="curtir">
                                <img class="" src="/assets/img/Vector (1).png" alt="salvar">
                            </div> --}}
                                            <figcaption>
                                                <h2 class="font-[Arial] text-[30px] text-[#F1EEDD] pt-4">
                                                    <strong>{{ $item->nome }}</strong>
                                                </h2>
                                            </figcaption>
                                        </div>
                                    @endif
                                    {{-- <div class="flex">
                        <div class="flex">
                            <img class="" src="/assets/img/Vector.png" alt="curtir">
                            <img class="" src="/assets/img/Vector (1).png" alt="salvar">
                        </div>
                        <figcaption>
                            <h2 class="font-[Arial] text-[30px] text-[#F1EEDD] pt-4"><strong>Rocha tal</strong></h2>
                        </figcaption>
                    </div> --}}
                                </figure>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper(".SwiperRochas", {
                loop: true, // Ativa o loop infinito do carrossel
                slidesPerView: 3, // Mostra 3 slides por vez
                spaceBetween: 16, // Espaçamento entre os slides
                navigation: { // Configura os botões de navegação
                    nextEl: ".swiper-button-next-2", // Botão "próximo"
                    prevEl: ".swiper-button-prev-2", // Botão "anterior"
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1
                    }, // 1 slide em telas menores
                    768: {
                        slidesPerView: 2
                    }, // 2 slides em telas médias
                    1024: {
                        slidesPerView: 3
                    }, // 3 slides em telas maiores
                },
            });

            const swiper2 = new Swiper(".SwiperIgneas", {
                loop: true, // Ativa o loop infinito do carrossel
                slidesPerView: 3, // Mostra 3 slides por vez
                spaceBetween: 16, // Espaçamento entre os slides
                navigation: { // Configura os botões de navegação
                    nextEl: ".swiper-button-next-1", // Botão "próximo"
                    prevEl: ".swiper-button-prev-1", // Botão "anterior"
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1
                    }, // 1 slide em telas menores
                    768: {
                        slidesPerView: 2
                    }, // 2 slides em telas médias
                    1024: {
                        slidesPerView: 4
                    }, // 3 slides em telas maiores
                },
            });

            const swiper3 = new Swiper(".SwiperMetamorficas", {
                loop: true, // Ativa o loop infinito do carrossel
                slidesPerView: 3, // Mostra 3 slides por vez
                spaceBetween: 16, // Espaçamento entre os slides
                navigation: { // Configura os botões de navegação
                    nextEl: ".swiper-button-next-3", // Botão "próximo"
                    prevEl: ".swiper-button-prev-3", // Botão "anterior"
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1
                    }, // 1 slide em telas menores
                    768: {
                        slidesPerView: 2
                    }, // 2 slides em telas médias
                    1024: {
                        slidesPerView: 3
                    }, // 3 slides em telas maiores
                },
            });
        });
    </script>
</x-layouts.BaseLayout>