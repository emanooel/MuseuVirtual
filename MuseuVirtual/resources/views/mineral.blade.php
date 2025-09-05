<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mineral</title>
</head>
<body class="bg-gradient-to-b from-[#ACB18E] from-0.5% via-[#73785C] via-5% to-[#363C27] to-20% ">
    <x-menu_site />
    <div class="w-[1600px] mx-auto">

        <h1 class="font-[Arial] text-[50px]  text-[#F1EEDD] pb-6 pt-16"><strong>Minerais</strong></h1>
        <div class="">
            <img class= "pb-40 w-full " src="/assets/img/image (3).png" alt="Foto do mineral tal">
        </div>

        <div class="w-full xl:mx-auto">
            <div class="grid grid-cols-2 gap-8 ">
                @foreach ($minerais as $item)
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
                            <img class="object-cover w-full h-[500px] rounded-xl"
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
                @endforeach

            </div>
            <div>
                <p class="font-[Arial] text-[25px] text-[#F1EEDD] cursor-pointer text-center pt-10">Ver mais</p>
            </div>
        </div>
        <div class="w-full xl:mx-auto">
            <div class="grid grid-cols-2 gap-8 ">
                @foreach ($rochastipo2 as $item)
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
                            <img class="object-cover w-full h-[500px] rounded-xl"
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
                @endforeach

            </div>
            <div>
                <p class="font-[Arial] text-[25px] text-[#F1EEDD] cursor-pointer text-center pt-10">Ver mais</p>
            </div>
        </div>
        <div class="w-full xl:mx-auto">
            <div class="grid grid-cols-2 gap-8 ">
                @foreach ($rochastipo3 as $item)
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
                            <img class="object-cover w-full h-[500px] rounded-xl"
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
                @endforeach
            </div>
        </div>
        <div>
            <p class="font-[Arial] text-[25px] text-[#F1EEDD] cursor-pointer text-center pt-10">Ver mais</p>
        </div>

        {{-- <figure class="pl-80 pb-20 w-[82%]">
        <img src="/assets/img/image (3).png" alt="Imagem da rocha tal">
        <figcaption>
            <h2 class="font-[Arial] text-[30px] text-[#F1EEDD] pt-4"><strong>Rocha tal</strong></h2>
        </figcaption>
    </figure>

    <div class="grid grid-cols-2 gap-8">
        <figure class="pl-80 ">
            <img src="/assets/img/image (2).png" alt="Imagem da rocha tal">
            <div class="flex justify-between items-center p-4 text-white">
            <span class="font-[Arial] text-[30px] text-[#F1EEDD] font-bold">Rocha tal</span>
            <div class="flex space-x-4">
                <i class="text-2xl flex gap-2 cursor-pointer hover:text-gray-300 transition-colors duration-200">
                   <img class="" src="/assets/img/Vector.png" alt="curtir">
                   <img class="" src="/assets/img/Vector (1).png" alt="salvar">
                </i>
                <i class="fa-solid fa-download text-2xl cursor-pointer hover:text-gray-300 transition-colors duration-200"></i>
            </div>
        </figure>
        <figure class="pl-2 pb-20">
            <img src="/assets/img/image (2).png" alt="Imagem da rocha tal">
            <div class="flex justify-between items-center p-4 text-white">
            <span class="font-[Arial] text-[30px] text-[#F1EEDD] font-bold">Rocha tal</span>
            <div class="flex space-x-4 ">
                <i class="text-2xl flex gap-2 cursor-pointer hover:text-gray-300 transition-colors duration-200">
                   <img class="" src="/assets/img/Vector.png" alt="curtir">
                   <img class="" src="/assets/img/Vector (1).png" alt="salvar">
                </i>
                <i class="fa-solid fa-download text-2xl cursor-pointer hover:text-gray-300 transition-colors duration-200"></i>
            </div>
        </figure>
    </div> --}}

        <x-rodape_site></x-rodape_site>
    </div>
</body>

</html>

