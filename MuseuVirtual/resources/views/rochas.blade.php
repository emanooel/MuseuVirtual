<x-layouts.BaseLayout>
    <x-slot name="title">Rochas</x-slot>

    <style>
        body {
            font-family: 'Lato', sans-serif;
            background: rgb(0, 0, 0);
            color: #F1EEDD;
        }
        h1, h2, .section-title {
            font-family: 'Cinzel', serif;
        }

        .hero-section {
            background: linear-gradient(135deg, rgba(172, 177, 142, 0.2), rgba(115, 120, 92, 0.2));
            border-radius: 25px;
            padding: 50px 30px;
            margin-bottom: 50px;
            text-align: center;
            border: 2px solid rgba(241, 238, 221, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .highlight-image {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 0.75rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            margin-bottom: 40px;
            transition: transform 0.6s ease-in-out;
        }

        .highlight-image:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        .rock-type-section {
            background: rgba(54, 60, 39, 0.3);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 60px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(241, 238, 221, 0.1);
        }

        .rock-description {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            border-left: 5px solid #ACB18E;
        }

        .rock-description h2 {
            font-size: 40px;
            margin-bottom: 20px;
            color: #F1EEDD;
        }

        .rock-description p {
            font-size: 16px;
            line-height: 1.6;
            opacity: 0.9;
            color: #F1EEDD;
        }

        .swiper-container-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 2100px;
            margin: 50px auto 0;
            position: relative;
        }

        .swiper {
            width: 100%;
            height: 600px;
            overflow: hidden;
        }

        .swiper-wrapper {
            display: flex;
            align-items: center;
        }

        .swiper-slide {
            width: 400px;
            height: 700px;
            display: flex;
            justify-content: center;
        }

        .swiper-slide figure {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            width: 100%;
            max-width: 400px;
        }

        .swiper-slide figure:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        .swiper-slide img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 0.75rem 0.75rem 0 0;
        }

        figcaption {
            padding: 20px;
            text-align: center;
        }

        figcaption h4 {
            font-size: 28px;
            font-weight: bold;
            color: #F1EEDD;
            margin: 0;
        }

        /* Botões do Swiper */
        .swiper-button-prev,
        .swiper-button-next {
            position: static !important;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ACB18E, #73785C);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            margin: 0 10px;
        }

        .swiper-button-prev:hover,
        .swiper-button-next:hover {
            background: linear-gradient(135deg, #73785C, #363C27);
            transform: scale(1.1);
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 22px;
            color: #F1EEDD;
            font-weight: bold;
        }

        .ver-mais-btn {
            background: linear-gradient(135deg, #F1EEDD, #ACB18E);
            color: #363C27;
            font-weight: bold;
            padding: 12px 35px;
            border-radius: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
        }

        .ver-mais-btn:hover {
            background: linear-gradient(135deg, #ACB18E, #73785C);
            color: #F1EEDD;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .text-center {
            text-align: center;
        }
        
        /* Novas regras para a imagem do ciclo */
        .rock-cycle-image {
            width: 100%;
            max-width: 800px;
            margin: 30px auto;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            display: block; /* Para centralizar com margin: auto */
        }


        @media (max-width: 768px) {
            .hero-section {
                padding: 30px 20px;
                margin-bottom: 30px;
            }

            .hero-section h1 {
                font-size: 2.5rem;
            }

            .hero-section p {
                font-size: 1rem;
            }

            .rock-type-section {
                padding: 25px;
                margin-bottom: 40px;
            }

            .rock-description {
                padding: 20px;
            }

            .rock-description h2 {
                font-size: 32px;
            }

            .rock-description p {
                font-size: 15px;
            }

            .swiper-slide {
                width: 80%; /* Ajuste para preencher a tela em mobile */
                height: auto;
            }

            .swiper-slide img {
                height: 350px;
            }

            .swiper-button-prev,
            .swiper-button-next {
                display: none; /* Oculta os botões em mobile, dependendo da necessidade do Swiper */
            }
        }
    </style>

    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 px-4">
        <br><br>
        <div class="hero-section">
            <h1><strong>Museu Mineral - Rochas</strong></h1>
            <p>
            <h1><strong>Museu Mineral - Rochas</strong></h1>
            <p>
                Conheça os três principais tipos de rochas em nossa coleção. Descubra como cada uma se forma e suas características únicas.
            </p>
        </div>

        {{-- Rochas Ígneas --}}
        <div class="rock-type-section">
            <div class="rock-description">
                <h2><strong>Rochas Ígneas</strong></h2>
                <p>
                    <strong>Formadas pelo fogo.</strong> As rochas ígneas se formam quando o magma ou lava esfria e endurece. 
                    Podem ser formadas no interior da Terra (como o granito) ou na superfície (como o basalto).
                </p>
            </div>

            <div class="flex items-center justify-center pb-8 gap-4">
                <div class="swiper-button-prev swiper-prev-ignea"></div>
                <div class="swiper-button-next swiper-next-ignea"></div>
            </div>

            <div class="swiper-container-wrapper">
                <div class="swiper SwiperIgneas">
                    <div class="swiper-wrapper">
                        @foreach ($rochastipo1 as $item)
                            <div class="swiper-slide">
                                <a href="{{ route('Rocha.show', $item->id) }}">
                                    <figure>
                                        @php
                                            $fotoExibir = $item->fotos->firstWhere('capa', true) ?? $item->fotos->first();
                                        @endphp
                                        @if ($fotoExibir)
                                            <img src="{{ asset('storage/' . $fotoExibir->caminho) }}" alt="Imagem da rocha {{ $item->nome }}">
                                        @else
                                            <img src="{{ asset('assets/img/placeholder.png') }}" alt="Nenhuma imagem disponível">
                                        @endif
                                        <figcaption>
                                            <h4><strong>{{ $item->nome }}</strong></h4>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="{{ route('site.rochas.tipo', 1) }}" class="ver-mais-btn">
                    Conheça todas →
                </a>
            </div>
        </div>

        {{-- Rochas Metamórficas --}}
        <div class="rock-type-section">
            <div class="rock-description">
                <h2><strong>Rochas Metamórficas</strong></h2>
                <p>
                    <strong>Transformadas pelo calor e pressão.</strong> Estas rochas se formam quando rochas existentes 
                    são modificadas por alta temperatura e pressão no interior da Terra. O mármore e o gnaisse são exemplos comuns.
                </p>
            </div>

            <div class="flex items-center justify-center pb-8 gap-4">
                <div class="swiper-button-prev swiper-prev-metamorf"></div>
                <div class="swiper-button-next swiper-next-metamorf"></div>
            </div>

            <div class="swiper-container-wrapper">
                <div class="swiper SwiperMetamorficas">
                    <div class="swiper-wrapper">
                        @foreach ($rochastipo2 as $item)
                            <div class="swiper-slide">
                                <a href="{{ route('rochas.show', $item->id) }}">
                                    <figure class="w-full">
                                        @php
                                            $fotoExibir = $item->fotos->firstWhere('capa', true) ?? $item->fotos->first();
                                        @endphp
                                        @if ($fotoExibir)
                                            <img src="{{ asset('storage/' . $fotoExibir->caminho) }}" alt="Imagem da rocha {{ $item->nome }}">
                                        @else
                                            <img src="{{ asset('assets/img/placeholder.png') }}" alt="Nenhuma imagem disponível">
                                        @endif
                                        <figcaption>
                                            <h4><strong>{{ $item->nome }}</strong></h4>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="{{ route('site.rochas.tipo', 2) }}" class="ver-mais-btn">
                    Conheça todas →
                </a>
            </div>
        </div>

        {{-- Rochas Sedimentares --}}
        <div class="rock-type-section">
            <div class="rock-description">
                <h2><strong>Rochas Sedimentares</strong></h2>
                <p>
                    <strong>Formadas por sedimentos acumulados.</strong> Estas rochas se formam quando pedaços de outras rochas, 
                    areia e outros materiais se acumulam e se compactam ao longo do tempo. Arenito e calcário são exemplos conhecidos.
                </p>
            </div>

            <div class="flex items-center justify-center pb-8 gap-4">
                <div class="swiper-button-prev swiper-prev-sedim"></div>
                <div class="swiper-button-next swiper-next-sedim"></div>
            </div>

            <div class="swiper-container-wrapper">
                <div class="swiper SwiperSedimentares">
                    <div class="swiper-wrapper">
                        @foreach ($rochastipo3 as $item)
                            <div class="swiper-slide">
                                <a href="{{ route('rochas.show', $item->id) }}">
                                    <figure>
                                        @php
                                            $fotoExibir = $item->fotos->firstWhere('capa', true) ?? $item->fotos->first();
                                        @endphp
                                        @if ($fotoExibir)
                                            <img src="{{ asset('storage/' . $fotoExibir->caminho) }}" alt="Imagem da rocha {{ $item->nome }}">
                                        @else
                                            <img src="{{ asset('assets/img/placeholder.png') }}" alt="Nenhuma imagem disponível">
                                        @endif
                                        <figcaption>
                                            <h4><strong>{{ $item->nome }}</strong></h4>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="{{ route('site.rochas.tipo', 3) }}" class="ver-mais-btn">
                    Conheça todas →
                </a>
            </div>
        </div>

        <div class="hero-section mt-16">
            <h3 style="font-size: 32px; color: #F1EEDD; margin-bottom: 16px;"><strong>O Ciclo das Rochas</strong></h3>
            <p style="font-size: 16px; color: #F1EEDD; opacity: 0.9; max-width: 800px; margin: 0 auto; line-height: 1.6;">
                As rochas podem se transformar umas nas outras ao longo do tempo. Uma rocha ígnea pode se tornar metamórfica 
                com calor e pressão, e qualquer rocha pode ser quebrada em pedaços que formam novas rochas sedimentares.
            </p>
            <img src="{{ asset('assets/img/ciclo-das-rochas.png') }}" alt="Diagrama do ciclo das rochas" class="rock-cycle-image">
        </div>
    </div>

    {{-- Scripts do Swiper --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiperOptions = {
                loop: true,
                slidesPerView: 1, // Ajuste para 1 slide em mobile
                spaceBetween: 20,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: { slidesPerView: 1 },
                    768: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                    1280: { slidesPerView: 4 },
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            };

            new Swiper(".SwiperIgneas", swiperOptions);
            new Swiper(".SwiperMetamorficas", swiperOptions);
            new Swiper(".SwiperSedimentares", swiperOptions);
        });
    </script>
</x-layouts.BaseLayout>
