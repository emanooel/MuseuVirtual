<x-layouts.BaseLayout>
    <x-slot name="title">RochaEspecifica</x-slot>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {});
    </script>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #1c1f1a;
            color: #F1EEDD;
        }

        .hero-section {
            background: linear-gradient(135deg, #ACB18E, #73785C);
            border-radius: 30px;
            padding: 50px 30px;
            margin-bottom: 40px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
            color: #F1EEDD;
            margin-bottom: 10px;
        }

        .main-image-container {
            margin: 30px 0;
            text-align: center;
        }

        .main-image-container img {
            width: 100%;
            max-height: 600px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            transition: transform 0.5s ease;
        }

        .main-image-container img:hover {
            transform: scale(1.03);
        }

        .rock-type-section {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 25px;
            padding: 40px;
            margin-top: 40px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .rock-description {
            background: rgba(255, 255, 255, 0.08);
            border-left: 6px solid #ACB18E;
            border-radius: 15px;
            padding: 30px;
            margin-top: 30px;
        }

        .rock-description p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #F1EEDD;
        }

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
            height: auto;
            overflow: hidden;
        }

        .swiper-slide {
            width: 400px;
            height: auto;
        }

        .swiper-slide img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 0.75rem;
            transition: transform 0.6s ease-in-out;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        .swiper-slide img:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        .swiper-button-prev,
        .swiper-button-next {
            background: #73785C;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            color: #F1EEDD;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .swiper-button-prev:hover,
        .swiper-button-next:hover {
            transform: scale(1.1);
            background: #363C27;
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }

            .rock-description {
                padding: 20px;
            }

            .swiper-slide img {
                height: 200px;
            }
        }

        .anotacao {
            position: absolute;
            width: 10px;       /* tamanho da bolinha */
            height: 10px;      /* tamanho da bolinha */
            background-color: rgb(255, 0, 0);
            border-radius: 50%;  /* deixa redonda */
            cursor: pointer;
            z-index: 10;
            animation: pulse 1.5s infinite; /* Adiciona a animação de pulsar */
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.5); /* Aumenta o tamanho da bolinha */
            }
            100% {
                transform: scale(1); /* Retorna ao tamanho original */
            }
        }

        /* Tooltip exibido ao passar o mouse */
        .anotacao::after {
            content: attr(data-tooltip);
            position: absolute;
            top: -35px;         /* ajusta a posição acima da bolinha */
            left: 50%;
            transform: translateX(-50%);
            background-color: #333;
            color: #fff;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .anotacao:hover::after {
            opacity: 1;
        }
        .rock-type-section {
            background: rgba(54, 60, 39, 0.3);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 60px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(241, 238, 221, 0.1);
        }

        .rock-description h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .rock-description p {
            font-size: 1.1rem;
            line-height: 1.6;
            opacity: 0.9;
        }
    </style>

    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 px-4">
        <div class="hero-section text-white">
            <h1><strong>@php
                echo $rocha->nome;
            @endphp</strong></h1>
        </div>
        @php
            $fotoExibir = null;
            foreach ($rocha->fotos as $item) {
                if ($item->capa) {
                    $fotoExibir = $item;
                    break;
                }
            }
            if (is_null($fotoExibir) && count($rocha->fotos) > 0) {
                $fotoExibir = $rocha->fotos[0];
            }
        @endphp

        <div class="text-white">
            @if ($fotoExibir)
                <div class="main-image-container">
                    <img class="main-image" src="{{ asset('storage/' . $fotoExibir->caminho) }}" alt="Foto da rocha {{ $rocha->nome }}">

                    @if ($fotoExibir->anotacoes && $fotoExibir->anotacoes->count())
                        @foreach ($fotoExibir->anotacoes as $anotacao)
                            <div class="anotacao" style="top: {{ $anotacao->y }}px; left: {{ $anotacao->x }}px; position"
                                data-tooltip="{{ $anotacao->texto }}">
                            </div>
                        @endforeach
                    @endif
                </div>
                <a href="{{ route('rochas.qrcode', $rocha->id) }}"
                    class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    Baixar QR Code da Rocha
                </a>
            @endif

            <div class="rock-type-section">
                        <div class="swiper-container-wrapper">
                            <div class="swiper-button-prev swiper-prev-rocha"></div>
                            <div class="swiper SwiperRochas">
                                <div class="swiper-wrapper">
                                    @foreach ($rocha->fotos as $item)
                                        <div class="swiper-slide">
                                            <a href="{{ asset('storage/' . $item->caminho) }}" data-fancybox='Galeria'>
                                                <img src="{{ asset('storage/' . $item->caminho) }}" alt="Miniatura de {{ $rocha->nome }}">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-button-next swiper-next-rocha"></div>
                        </div>

                        <!-- Descrição -->
                        <div class="rock-description">
                            <p><strong>Descrição:</strong> {!! $rocha->descricao !!}</p>
                            <br>
                            <p><strong>Composição do mineral:</strong> <br>{{ $rocha->composicao }}</p>
                        </div>
                    </div>
                </div>

                <!-- Swiper JS -->
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        new Swiper(".SwiperRochas", {
                            loop: true,
                            slidesPerView: 4,
                            spaceBetween: 20,
                            breakpoints: {
                                640: { slidesPerView: 1 },
                                768: { slidesPerView: 2 },
                                1024: { slidesPerView: 3 },
                                1280: { slidesPerView: 4 },
                            },
                            navigation: {
                                nextEl: ".swiper-next-rocha",
                                prevEl: ".swiper-prev-rocha",
                            },
                        });
                    });
                </script>
            </x-layouts.BaseLayout>

