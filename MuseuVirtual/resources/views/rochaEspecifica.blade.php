
<x-layouts.BaseLayout>
    <x-slot name="title">RochaEspecifica</x-slot>
<style>
    .swiper-container-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        max-width: 800px;
        margin: 50px auto;
        position: relative;
    }
    
    .mySwiper {
        width: 600px;
        height: 400px;
    }
    
    .swiper-slide img {
        width: 100%;
        height: 20%;
        object-fit: cover;
    }

    .swiper-button-prev,
    .swiper-button-next {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        flex-shrink: 0;
    }
    
    .swiper-button-prev::after,
    .swiper-button-next::after {
        font-size: 20px;
        color: #d8d4c0;
    }
</style>

    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 ">

        {{-- @dd($rocha) --}}

        <h1 class= "font-[Arial] text-[50px] text-[#F1EEDD] pt-16"><strong>{{ $rocha->nome }}</strong></h1>
        @foreach ($rocha->fotos as $item)
            @php
                $fotoExibir = null;
                if ($item->capa) {
                    $fotoExibir = $item;
                    break;
                }
                if (is_null($fotoExibir) && count($rocha->fotos) > 0) {
                    $fotoExibir = $rocha->fotos[0];
                }
            @endphp
        @endforeach
        <img class="w-[1600px] h-[832px] rounded-xl" src="{{ asset('storage/' . $fotoExibir->caminho) }}" alt="">

        <div class="block md:flex pt-4 justify-center">
            @foreach ($rocha->fotos as $item)
                <div class="py-4 md:pr-4">
                    <img class="size-60 rounded-xl" src="{{ asset('storage/' . $item->caminho) }}" alt="">
                </div>
            @endforeach
            <div class="pb-20 swiper-button-next"></div>
        </div>
        
        <div class="text-white">
            {!! $rocha->descricao !!}
            <h2 class="text-[20px] font-[arial] text-[#F1EEDD]"><strong> Composição da rocha: </strong>
                {{ $rocha->composicao }}</h2>
        </div>

    </div>
</x-layouts.BaseLayout>