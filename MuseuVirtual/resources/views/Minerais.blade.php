<x-layouts.BaseLayout>
    <x-slot name="title">Minerais</x-slot>
    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 ">
        <div class="w-100 mx-auto sm:px-10">

            <h1 class="font-[Arial] text-[50px]  text-[#F1EEDD] pb-6 pt-16"><strong>Minerais</strong></h1>
            <div>
                <img class= "2xl:pb-40 pb-10 w-full " src="/assets/img/image (3).png" alt="Foto do mineral tal">
            </div>

            <div class="w-full xl:mx-auto">
                <div class="grid sm:grid-cols-2 grid-cols-1 gap-8">
                    @foreach ($minerais as $item)
                        <a href="{{ route('minerais.show', $item->id) }}">
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
                                        src="{{ asset('storage/' . $fotoExibir->caminho) }}"
                                        alt="Imagem do mineral tal">
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
                <div class="text-center m-10">
                    <a href=""
                        class="p-1 pl-9 pr-9 rounded-full bg-[#F1EEDD] hover:bg-[#ACB18E] text-[#565851] cursor-pointer ">Ver
                        mais</a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.BaseLayout>
