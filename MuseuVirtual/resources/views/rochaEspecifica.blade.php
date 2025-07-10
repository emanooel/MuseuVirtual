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
  height:20%;
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
  color:#d8d4c0
}
</style>

<script>
  const swiper = new Swiper(".mySwiper", {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>




<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RochaEspecifica </title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
     <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body class="bg-gradient-to-b from-[#ACB18E] from-0.5% via-[#73785C] via-5% to-[#363C27] to-20% ">
    <div class="w-[1600px] mx-auto ">
        <x-menu_site />

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
            <img class="w-[1600px] h-[832px] rounded-xl" src="{{ asset('storage/' . $fotoExibir->caminho) }}"
                alt="">
            <div class="swiper-container-wrapper">
                <div class="swiper-button-prev pb-20 color-[#F1EEDD]"></div>
                <div class="swiper mySwiper">
                    <div class="flex pt-4 justify-center swiper-wrapper">
                        @foreach ($rocha->fotos as $item)
                            <div class="pr-4">
                                <img class="size-60 rounded-xl" src="{{ asset('storage/' . $item->caminho) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="pb-20 swiper-button-next"></div>
            </div>
            <div class="pt-6">
                <h2 class="text-[20px] font-[arial] text-[#F1EEDD]"> <strong> Descrição:
                    </strong>{{ $rocha->descricao }}</h2>
                <br>
                <h2 class="text-[20px] font-[arial] text-[#F1EEDD]"><strong> Composição da rocha: </strong>
                    {{ $rocha->composicao }}</h2>
            </div>
            <x-rodape_site></x-rodape_site>
        </div>
</body>

</html>
