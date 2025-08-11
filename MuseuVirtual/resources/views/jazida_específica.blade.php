<x-layouts.BaseLayout>
    <x-slot name="title">JazidaEspecifica</x-slot>

    <body>   
        <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 ">     
        <h1 class="font-[Arial] text-[40px] text-[#F1EEDD] pt-16"><strong>{{ $jazida->localizacao }}</strong></h1>

         @php
            $fotoExibir = null;
            foreach ($jazida->fotos as $item) {
                if ($item->capa) {
                    $fotoExibir = $item;
                    break;
                }
            }
            // Se nenhuma capa foi definida, usa a primeira foto disponível
            if (is_null($fotoExibir) && count($jazida->fotos) > 0) {
                $fotoExibir = $jazida->fotos[0];
            }
        @endphp

        @if ($fotoExibir)
            {{-- Contêiner para centralizar a imagem principal e aplicar estilos --}}
            <div class="px-90 ">
                <img class="2xl:w-full h-full h-[600px] rounded-xl main-image object-cover"
                    src="{{ asset('storage/' . $fotoExibir->caminho) }}"
                    alt="Imagem principal de {{ $jazida->nome }}">
            </div>
        @endif
        <div class="pt-6">
            <h2 class="text-[20px] font-[arial] text-[#F1EEDD]"> <strong> Descrição:
                </strong>{!! $jazida->descricao !!}</h2>

        
    </body>
</x-layouts.BaseLayout>
