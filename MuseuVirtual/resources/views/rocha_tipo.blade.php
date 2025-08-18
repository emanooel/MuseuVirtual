<!DOCTYPE html>
<html lang="pt-BR">

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
            transition: transform 0.3s ease-in-out;
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
            background: rgba(241, 238, 221, 0.1);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            border-left: 5px solid #ACB18E;
        }

        .rock-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #ACB18E, #73785C);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: #F1EEDD;
            margin-right: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
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
            
            .rock-icon {
                width: 50px;
                height: 50px;
                font-size: 25px;
            }
        }
</style>

<head>
    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @endpush
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rochas </title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gradient-to-b from-[#ACB18E] from-0.5% via-[#73785C] via-5% to-[#363C27] to-20% ">
    <div class="2xl:px-80"><x-menu_site /></div>
    <div class="w-full mx-auto 2xl:px-80 xl:px-32 lg:px-20 md:px-10">
        <h1 class="font-[Arial] text-[50px]  text-[#F1EEDD] pb-6 pt-16"><strong>
        @if ($tipo=='1') 
            Ígneas
        @elseif ($tipo=="2")
            Metamórficas
        @else 
            Sedimentares
        @endif   
        </strong></h1>

        {{-- @dd($rochastipo) --}}

        <div class="w-full xl:mx-auto">
            <div class="grid grid-cols-2 gap-8 ">
                @foreach ($rochastipo as $item)
                    <a href="{{ route('rochas.show', $item->id) }}">
                        <figure class="w-full hover:w-">
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
                                src="{{ asset('storage/' . $fotoExibir->caminho) }}" alt="Imagem do mineral tal">
                            <div class="flex">
                                <figcaption>
                                    <h2 class="font-[Arial] text-[30px] text-[#F1EEDD] pt-4">
                                        <strong>{{ $item->nome }}</strong>
                                    </h2>
                                </figcaption>
                            </div>
                        @else
                            {{-- Opcional: Adicionar um placeholder se não houver fotos --}}
                            <img class="object-cover w-full h-[500px] rounded-xl hover:scale-95 duration-300"
                                src="{{ asset('assets/img/placeholder.png') }}" alt="Nenhuma imagem disponível">
                            <div class="flex">
                                <figcaption>
                                    <h2 class="font-[Arial] text-[30px] text-[#F1EEDD] pt-4">
                                        <strong>{{ $item->nome }}</strong>
                                    </h2>
                                </figcaption>
                            </div>
                        @endif

                        </figure>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @endpush
    <x-rodape_site></x-rodape_site>
</body>

</html>
