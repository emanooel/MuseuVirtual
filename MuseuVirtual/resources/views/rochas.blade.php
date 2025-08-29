<x-layouts.BaseLayout>
    <x-slot name="title">Rochas</x-slot>

    <style>
        .swiper-container-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 2100px;
            margin: 50px auto;
            position: relative;
        }

        .swiper {
            width: 100%;
            height: 600px;
            overflow: hidden;
        }

        .swiper-slide {
            width: 400px;
            height: 700px;
        }

        .swiper-slide img {
            width: 500px;
            height: 500px;
            object-fit: cover;
            border-radius: 0.75rem;
            transition: transform 0.6s ease-in-out;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        .swiper-slide img:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
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

        .hero-section {
            background: linear-gradient(135deg, rgba(172, 177, 142, 0.2), rgba(115, 120, 92, 0.2));
            border-radius: 25px;
            padding: 40px;
            margin-bottom: 50px;
            text-align: center;
            border: 2px solid rgba(241, 238, 221, 0.2);
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
        }

        .ver-mais-btn:hover {
            background: linear-gradient(135deg, #ACB18E, #73785C);
            color: #F1EEDD;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .rock-type-section {
                padding: 25px;
            }
            
            .rock-description {
                padding: 20px;
            }
 
        }
    </style>

    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 px-4">
        <!-- Hero Section -->
        <div class="hero-section">
            <h1 class="font-[Arial] text-[50px] md:text-[60px] text-[#F1EEDD] pb-4">
                <strong>Museu Mineral - Rochas</strong>
            </h1>
            <p class="font-[Arial] text-[18px] text-[#F1EEDD] opacity-90 max-w-3xl mx-auto leading-relaxed">
                Conheça os três principais tipos de rochas em nossa coleção. Descubra como cada uma se forma e suas características únicas.
            </p>
        </div>

        <div class="mb-10">
            <img class="w-full max-h-96 object-cover rounded-2xl shadow-2xl" src="/storage/app/public/fotos/rochas/1.jpg" alt="Formações rochosas espetaculares">
        </div>

        {{-- Rochas Ígneas --}}
        <div class="rock-type-section">
            <div class="rock-description">
                <div class="flex items-start mb-4">
                    <div>
                        <h2 class="font-[Arial] text-[40px] text-[#F1EEDD] mb-3">
                            <strong>Rochas Ígneas</strong>
                        </h2>
                        <p class="font-[Arial] text-[16px] text-[#F1EEDD] opacity-90 leading-relaxed">
                            <strong>Formadas pelo fogo.</strong> As rochas ígneas se formam quando o magma ou lava esfria e endurece. 
                            Podem ser formadas no interior da Terra (como o granito) ou na superfície (como o basalto).
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between pb-8">
                <div class="flex gap-4">
                    <div class="swiper-button-prev swiper-prev-ignea"></div>
                    <div class="swiper-button-next swiper-next-ignea"></div>
                </div>
            </div>

            <div class="swiper-container-wrapper">
                <div class="swiper SwiperIgneas">
                    <div class="swiper-wrapper">
                        @foreach ($rochastipo1 as $item)
                            <div class="swiper-slide">
                                <a href="{{ route('Rocha.show', $item->id) }}">
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
                                            <h4 class="font-[Arial] text-[28px] text-[#F1EEDD] pt-4">
                                                <strong>{{ $item->nome }}</strong>
                                            </h4>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="{{ route('site.rochas.tipo', 1) }}" class="ver-mais-btn inline-block">
                    Conheça todas →
                </a>
            </div>
        </div>

        {{-- Rochas Metamórficas --}}
        <div class="rock-type-section">
            <div class="rock-description">
                <div class="flex items-start mb-4">
                    <div>
                        <h2 class="font-[Arial] text-[40px] text-[#F1EEDD] mb-3">
                            <strong>Rochas Metamórficas</strong>
                        </h2>
                        <p class="font-[Arial] text-[16px] text-[#F1EEDD] opacity-90 leading-relaxed">
                            <strong>Transformadas pelo calor e pressão.</strong> Estas rochas se formam quando rochas existentes 
                            são modificadas por alta temperatura e pressão no interior da Terra. O mármore e o gnaisse são exemplos comuns.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between pb-8">
                <div class="flex gap-4">
                    <div class="swiper-button-prev swiper-prev-metamorf"></div>
                    <div class="swiper-button-next swiper-next-metamorf"></div>
                </div>
            </div>

            <div class="swiper-container-wrapper">
                <div class="swiper SwiperMetamorficas">
                    <div class="swiper-wrapper">
                        @foreach ($rochastipo2 as $item)
                            <div class="swiper-slide">
                                <a href="{{ route('Rocha.show', $item->id) }}">
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
                                            <h4 class="font-[Arial] text-[28px] text-[#F1EEDD] pt-4">
                                                <strong>{{ $item->nome }}</strong>
                                            </h4>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="{{ route('site.rochas.tipo', 2) }}" class="ver-mais-btn inline-block">
                    Conheça todas →
                </a>
            </div>
        </div>

        {{-- Rochas Sedimentares --}}
        <div class="rock-type-section">
            <div class="rock-description">
                <div class="flex items-start mb-4">
                    <div>
                        <h2 class="font-[Arial] text-[40px] text-[#F1EEDD] mb-3">
                            <strong>Rochas Sedimentares</strong>
                        </h2>
                        <p class="font-[Arial] text-[16px] text-[#F1EEDD] opacity-90 leading-relaxed">
                            <strong>Formadas por sedimentos acumulados.</strong> Estas rochas se formam quando pedaços de outras rochas, 
                            areia e outros materiais se acumulam e se compactam ao longo do tempo. Arenito e calcário são exemplos conhecidos.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between pb-8">
                <div class="flex gap-4">
                    <div class="swiper-button-prev swiper-prev-sedim"></div>
                    <div class="swiper-button-next swiper-next-sedim"></div>
                </div>
            </div>

            <div class="swiper-container-wrapper">
                <div class="swiper SwiperSedimentares">
                    <div class="swiper-wrapper">
                        @foreach ($rochastipo3 as $item)
                            <div class="swiper-slide">
                                <a href="{{ route('Rocha.show', $item->id) }}">
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
                                            <h4 class="font-[Arial] text-[28px] text-[#F1EEDD] pt-4">
                                                <strong>{{ $item->nome }}</strong>
                                            </h4>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="{{ route('site.rochas.tipo', 3) }}" class="ver-mais-btn inline-block">
                    Conheça todas →
                </a>
            </div>
        </div>

        <!-- Seção educativa -->
        <div class="hero-section mt-16">
            <h3 class="font-[Arial] text-[32px] text-[#F1EEDD] mb-4">
                <strong>Como as rochas se transformam</strong>
            </h3>
            <p class="font-[Arial] text-[16px] text-[#F1EEDD] opacity-90 max-w-4xl mx-auto leading-relaxed">
                As rochas podem se transformar umas nas outras ao longo do tempo. Uma rocha ígnea pode se tornar metamórfica 
                com calor e pressão, e qualquer rocha pode ser quebrada em pedaços que formam novas rochas sedimentares.
            </p>
        </div>
    </div>

    {{-- Scripts do Swiper --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiperOptions = {
                loop: true,
                slidesPerView: 4,
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
            };

            new Swiper(".SwiperIgneas", {
                ...swiperOptions,
                navigation: {
                    nextEl: ".swiper-next-ignea",
                    prevEl: ".swiper-prev-ignea",
                },
            });

            new Swiper(".SwiperMetamorficas", {
                ...swiperOptions,
                navigation: {
                    nextEl: ".swiper-next-metamorf",
                    prevEl: ".swiper-prev-metamorf",
                },
            });

            new Swiper(".SwiperSedimentares", {
                ...swiperOptions,
                navigation: {
                    nextEl: ".swiper-next-sedim",
                    prevEl: ".swiper-prev-sedim",
                },
            });
        });
    </script>

</x-layouts.BaseLayout>