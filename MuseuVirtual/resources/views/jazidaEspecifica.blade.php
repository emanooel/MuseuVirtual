<x-layouts.BaseLayout>
    <x-slot name="title">Jazida Específica</x-slot>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {});
    </script>

    <!-- Estilos personalizados -->
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
    </style>

    <!-- Conteúdo -->
    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 px-4">
        <div class="hero-section">
            <h1><strong>{{ $jazida->localizacao }}</strong></h1>
        </div>

        @php
            $fotoExibir = null;
            foreach ($jazida->fotos as $item) {
                if ($item->capa) {
                    $fotoExibir = $item;
                    break;
                }
            }
            if (is_null($fotoExibir) && count($jazida->fotos) > 0) {
                $fotoExibir = $jazida->fotos[0];
            }
        @endphp

        @if ($fotoExibir)
            <div class="main-image-container">
                <img src="{{ asset('storage/' . $fotoExibir->caminho) }}" alt="Imagem principal de {{ $jazida->localizacao }}">
            </div>
            <div class="text-center mb-6">
                <a href="{{ route('minerais.qrcode', $jazida->id) }}"
                   class="inline-block bg-gray-700 px-4 py-2 rounded-lg hover:bg-green-700 transition-colors duration-300 shadow-md">
                    <span class="text-white font-semibold">Ver QR Code</span>
                </a>
            </div>
        @endif

        <div class="rock-type-section">
            <!-- Galeria Swiper -->
            <div class="swiper-container-wrapper">
                <div class="swiper-button-prev swiper-prev-rocha"></div>
                <div class="swiper SwiperRochas">
                    <div class="swiper-wrapper">
                        @foreach ($jazida->fotos as $item)
                            <div class="swiper-slide">
                                <a href="{{ asset('storage/' . $item->caminho) }}" data-fancybox='Galeria'>
                                    <img src="{{ asset('storage/' . $item->caminho) }}" alt="Miniatura de {{ $jazida->localizacao }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button-next swiper-next-rocha"></div>
            </div>

            <!-- Descrição -->
            <div class="rock-description">
                <p><strong>Descrição:</strong> {!! $jazida->descricao !!}</p>
                <br>
                <p><strong>Composição do mineral:</strong> <br>{{ $jazida->composicao }}</p>
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
