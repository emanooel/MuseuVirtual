<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gradient-to-b from-[#ACB18E] from-0.5% via-[#73785C] via-5% to-[#363C27] to-20% ">
    <x-menu_site></x-menu_site>
    <h1 class="font-[arial] pt-40 font-bold text-[80px] text-center text-[#F1EEDD]">Museu Virtual</h1>
    <h2 class="text-center text-[20px] font-[arial] text-[#F1EEDD]">Bem-vindo ao Museu Virtual das Rochas, um <br>espaço
        interativo e educativo dedicado à incrível<br> diversidade geológica da nossa região. </h2>
    <br>
    <p class="text-center"><a href="#" class="p-1 pl-9 pr-9 rounded-full bg-[#F1EEDD] text-[#565851]">Login</a></p>
    <figure class="w-100 mt-20">
        <img class="w-full" src="/assets/img/image 1.png" alt="Imagem de uma jazida ">
    </figure>

    <div class="flex justify-center mr-60 pt-40">
        <h2
            class="font-[arial] font-bold text-[80px] bg-gradient-to-b from-[#F1EEDD] to-[#363C27] bg-clip-text text-transparent">
            Explore</h2>
    </div>
    <div class="flex justify-center ml-60">
        <h3 class="text-[15px] font-[arial] text-[#F1EEDD] text-left">Explore o universo da geologia em nosso <br>
            site,onde você encontra informações <br> detalhadas sobre jazidas, rochas e minerais.</h3>
    </div>
    <br>
    <div class="flex justify-center mt-10">
        <div class="w-[1200px]">
            <div class="grid grid-cols-2 grid-rows-2  gap-x-8 gap-y-4 justify-items-center items-center">
                <figure class="">
                    <img src="/assets/img/JazidaInicial.png" alt="">
                    <figcaption>
                        <h2 class="font-[arial] font-bold text-[40px] text-[#F1EEDD]">Jazidas</h2>
                        <h3 class="font-[arial] text-[20px] text-[#F1EEDD]">Confira aqui nosso acervo de jazidas.</h3>
                    </figcaption>
                </figure>

                <figure class="">
                    <img src="/assets/img/RochaInicial.png" alt="">
                    <figcaption>
                        <h2 class="font-[arial] font-bold text-[40px] text-[#F1EEDD]">Rochas</h2>
                        <h3 class="font-[arial] text-[20px] text-[#F1EEDD]">Confira aqui nosso acervo de rochas.</h3>
                    </figcaption>
                </figure>

                <figure class="">
                    <img src="/assets/img/MineraisInicial.png" alt="">
                    <figcaption>
                        <h2 class="font-[arial] font-bold text-[40px] text-[#F1EEDD]">Minerais</h2>
                        <h3 class="font-[arial] text-[20px] text-[#F1EEDD]">Confira aqui nosso acervo de minerais.</h3>
                    </figcaption>
                </figure>

                <figure class="">
                    <img src="/assets/img/CatalogoInicial.png" alt="">
                    <figcaption>
                        <h2 class="font-[arial] font-bold text-[40px] text-[#F1EEDD]">Catálogo</h2>
                        <h3 class="font-[arial] text-[20px] text-[#F1EEDD]">O catálogo é uma coleção organizada de
                            amostras
                            com <br> informações sobre suas características e classificações, confira <br>aqui nosso
                            catálogo.</h3>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <x-rodape_site></x-rodape_site>
</body>

</html>
