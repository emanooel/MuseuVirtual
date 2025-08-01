<!DOCTYPE html>
<html lang="pt-BR">

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
    <div class="w-[1600px] mx-auto">
        <x-menu_site />
        <h1 class="font-[Arial] text-[50px]  text-[#F1EEDD] pb-6 pt-16"><strong>
                @if ($tipo == '1')
                    Ígneas
                @elseif ($tipo == '2')
                    Metamórficas
                @else
                    Sedimentares
                @endif
            </strong></h1>

        {{-- @dd($rochastipo) --}}

        <div class="w-full xl:mx-auto">
            <div class="grid grid-cols-2 gap-8 ">
                @foreach ($rochastipo as $item)
                    <a href="{{ route('Rocha.show', $item->id) }}">
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
                                    src="{{ asset('assets/img/placeholder.png') }}" alt="Nenhuma imagem disponível">
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
