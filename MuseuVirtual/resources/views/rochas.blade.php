<x-layouts.BaseLayout>

    <x-slot name="title">Rochas</x-slot>

    <style>
        /* Estilos gerais para o carrossel e seus componentes */
        .swiper-container-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            /* Aumentando a largura máxima para acomodar 4 slides de 500px (2000px) + espaçamento */
            max-width: 2100px;
            margin: 50px auto;
            position: relative;
        }

        /* Removendo a largura fixa do slide para que o Swiper a calcule automaticamente */
        .swiper-slide {
            height: 700px;
        }

        .swiper-slide img {
            width: 500px;
            height: 500px;
            object-fit: cover;
            border-radius: 0.75rem;
            transition: transform 0.3s ease-in-out;
        }

        .swiper-slide img:hover {
            transform: scale(0.95);
        }

        /* Botões de navegação do carrossel */
        .swiper-button-prev,
        .swiper-button-next {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            flex-shrink: 0;
            position: static;
            margin: 0 15px;
            transition: background-color 0.3s ease;
        }

        .swiper-button-prev:hover,
        .swiper-button-next:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 24px;
            color: #F1EEDD;
            transition: color 0.3s ease;
        }

        .swiper-button-prev:hover::after,
        .swiper-button-next:hover::after {
            color: #FFFFFF;
        }

        /* Estilos para a legenda da imagem */
        .figcaption {
            color: #F1EEDD;
            font-size: 1.5rem;
            margin-top: 1rem;
            text-align: center;
        }

        .link-ver-mais {
            display: inline-block;
            padding: 0.5rem 2.25rem;
            border-radius: 9999px;
            background-color: #F1EEDD;
            color: #565851;
            transition: background-color 0.3s ease;
            margin-top: 2.5rem;
        }

        .link-ver-mais:hover {
            background-color: #ACB18E;
        }
    </style>

    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10">

        <h1 class="font-sans text-5xl text-[#F1EEDD] pb-6 pt-16 font-bold">Rochas</h1>
        <div class="mb-40">
            <img class="pb-10 w-full" src="/assets/img/image (3).png" alt="Imagem principal de rochas">
        </div>

        {{-- Carrossel de Rochas Ígneas --}}
        <h2 class="font-sans text-4xl text-[#F1EEDD] pb-8 font-bold">Ígneas</h2>
        <div class="swiper-container-wrapper flex items-center">
            <div class="swiper-button-prev swiper-button-prev-1"></div>
            <div class="swiper SwiperIgneas">
                <div class="swiper-wrapper">
                    @foreach ($rochastipo1 as $item)
                        <div class="swiper-slide">
                            <a href="{{ route('Rocha.show', $item->id) }}" class="block">
                                @php
                                    $fotoExibir = $item->fotos->where('capa', true)->first() ?? $item->fotos->first();
                                @endphp

                                @if ($fotoExibir)
                                    <img src="{{ asset('storage/' . $fotoExibir->caminho) }}" alt="Imagem da rocha {{ $item->nome }}">
                                @else
                                    <img src="{{ asset('assets/img/placeholder.png') }}" alt="Nenhuma imagem disponível">
                                @endif
                                <h3 class="figcaption font-sans font-bold">{{ $item->nome }}</h3>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next swiper-button-next-1"></div>
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('site.rochas.tipo', 1) }}" class="link-ver-mais">Ver mais</a>
        </div>
        
        ---

        {{-- Carrossel de Rochas Metamórficas --}}
        <h2 class="font-sans text-4xl text-[#F1EEDD] pb-8 font-bold mt-20">Metamórficas</h2>
        <div class="swiper-container-wrapper">
            <div class="swiper-button-prev swiper-button-prev-2"></div>
            <div class="swiper SwiperMetamorficas">
                <div class="swiper-wrapper">
                    @foreach ($rochastipo2 as $item)
                        <div class="swiper-slide">
                            <a href="{{ route('Rocha.show', $item->id) }}" class="block">
                                @php
                                    $fotoExibir = $item->fotos->where('capa', true)->first() ?? $item->fotos->first();
                                @endphp
                                @if ($fotoExibir)
                                    <img src="{{ asset('storage/' . $fotoExibir->caminho) }}" alt="Imagem da rocha {{ $item->nome }}">
                                @else
                                    <img src="{{ asset('assets/img/placeholder.png') }}" alt="Nenhuma imagem disponível">
                                @endif
                                <h3 class="figcaption font-sans font-bold">{{ $item->nome }}</h3>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next swiper-button-next-2"></div>
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('site.rochas.tipo', 2) }}" class="link-ver-mais">Ver mais</a>
        </div>
        
        ---

        {{-- Carrossel de Rochas Sedimentares --}}
        <h2 class="font-sans text-4xl text-[#F1EEDD] pb-8 font-bold mt-20">Sedimentares</h2>
        <div class="swiper-container-wrapper">
            <div class="swiper-button-prev swiper-button-prev-3"></div>
            <div class="swiper SwiperSedimentares">
                <div class="swiper-wrapper">
                    @foreach ($rochastipo3 as $item)
                        <div class="swiper-slide">
                            <a href="{{ route('Rocha.show', $item->id) }}" class="block">
                                @php
                                    $fotoExibir = $item->fotos->where('capa', true)->first() ?? $item->fotos->first();
                                @endphp
                                @if ($fotoExibir)
                                    <img src="{{ asset('storage/' . $fotoExibir->caminho) }}" alt="Imagem da rocha {{ $item->nome }}">
                                @else
                                    <img src="{{ asset('assets/img/placeholder.png') }}" alt="Nenhuma imagem disponível">
                                @endif
                                <h3 class="figcaption font-sans font-bold">{{ $item->nome }}</h3>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next swiper-button-next-3"></div>
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('site.rochas.tipo', 3) }}" class="link-ver-mais">Ver mais</a>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function initializeSwiper(selector, nextEl, prevEl) {
                return new Swiper(selector, {
                    loop: true,
                    slidesPerView: 4, // Alterado de 3 para 4
                    spaceBetween: 16,
                    navigation: {
                        nextEl: nextEl,
                        prevEl: prevEl,
                    },
                    breakpoints: {
                        640: { slidesPerView: 1 },
                        768: { slidesPerView: 2 },
                        1024: { slidesPerView: 3 },
                        1280: { slidesPerView: 4 }, // Adicionada nova breakpoint para telas grandes
                    },
                });
            }

            initializeSwiper(".SwiperIgneas", ".swiper-button-next-1", ".swiper-button-prev-1");
            initializeSwiper(".SwiperMetamorficas", ".swiper-button-next-2", ".swiper-button-prev-2");
            initializeSwiper(".SwiperSedimentares", ".swiper-button-next-3", ".swiper-button-prev-3");
        });
    </script>
</x-layouts.BaseLayout>