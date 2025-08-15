<x-layouts.BaseLayout>
    <x-slot name="title">Jazidas</x-slot>
    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10">
        <h1 class="font-[Arial] text-[50px]  text-[#F1EEDD] pb-6 pt-16"><strong>Jazidas</strong></h1>
        <div class="">
            <img class="2xl:pb-40 pb-10 w-full" src="/assets/img/image (3).png" alt="Foto da jazida tal">
        </div>
        {{-- @dd($jazidas) --}}
        <div class="w-full xl:mx-auto">
            <div class="grid sm:grid-cols-2 grid-cols-1 gap-8 ">
                @foreach ($jazidas as $item)
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
                            {{-- @dd($item->id) --}}
                            <a href="{{ route('jazidas.site.show', $item->id) }}">
                                <img class="object-cover w-full h-[500px] rounded-xl"
                                    src="{{ asset('storage/' . $fotoExibir->caminho) }}" alt="Imagem da jazida tal">
                            </a>
                            <div class="flex">
                                {{-- <div class="flex">
                                <img class="" src="/assets/img/Vector.png" alt="curtir">
                                <img class="" src="/assets/img/Vector (1).png" alt="salvar">
                            </div> --}}
                                <figcaption>
                                    <h2 class="font-[Arial] text-[30px] text-[#F1EEDD] pt-4">
                                        <strong>{{ $item->localizacao }}</strong>
                                    </h2>
                                </figcaption>
                            </div>
                        @else
                            {{-- Opcional: Adicionar um placeholder se não houver fotos --}}
                            <img class="object-cover w-full h-[500px] rounded-xl"
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
                @endforeach

            </div>
            <div class="text-center m-10">
                <a href=""
                    class="p-1 pl-9 pr-9 rounded-full bg-[#F1EEDD] hover:bg-[#ACB18E] text-[#565851] cursor-pointer ">Ver
                    mais</a>
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
</x-layouts.BaseLayout>
