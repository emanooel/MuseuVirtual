<x-layouts.BaseLayout>

    <STYLE>
        body,
        html {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* Evita a barra de rolagem horizontal */
        }

        .carousel-container {
            width: 100vw;
            height: 60vh;
            /* Para ocupar a altura total da tela, se desejado */
            position: relative;
            overflow: hidden;
        }

        .carousel-slide {
            display: flex;
            width: 600vw;
            /* 3 imagens, cada uma com 100vw */
            height: 100%;
            animation: slide-animation 18s infinite;
            /* 3s por imagem */
        }

        .carousel-slide img {
            width: 100vw;
            /* Cada imagem ocupa 100% da largura da tela */
            height: 100%;
            object-fit: cover;
            /* Garante que a imagem preencha o espaço sem distorcer */
        }

        .carousel-slide {
            /* ... outros estilos ... */
            width: 600vw;
            /* 6 fotos, cada uma com 100vw */
            animation: slide-animation 18s infinite;
            /* 3 segundos por foto * 6 fotos */
        }

        @keyframes slide-animation {

            /* Foto 1 */
            0%,
            14.28% {
                /* 100 / 7 = ~14.28%. Tempo de pausa na foto */
                transform: translateX(0);
            }

            /* Transição para a Foto 2 */
            16.66% {
                /* 100 / 6 = 16.66% */
                transform: translateX(-100vw);
            }

            /* Foto 2 */
            16.66%,
            30.94% {
                /* Pausa na foto 2 */
                transform: translateX(-100vw);
            }

            /* Transição para a Foto 3 */
            33.32% {
                transform: translateX(-200vw);
            }

            /* Foto 3 */
            33.32%,
            47.6% {
                /* Pausa na foto 3 */
                transform: translateX(-200vw);
            }

            /* Transição para a Foto 4 */
            49.98% {
                transform: translateX(-300vw);
            }

            /* Foto 4 */
            49.98%,
            64.26% {
                /* Pausa na foto 4 */
                transform: translateX(-300vw);
            }

            /* Transição para a Foto 5 */
            66.64% {
                transform: translateX(-400vw);
            }

            /* Foto 5 */
            66.64%,
            80.92% {
                /* Pausa na foto 5 */
                transform: translateX(-400vw);
            }

            /* Transição para a Foto 6 */
            83.3% {
                transform: translateX(-500vw);
            }

            /* Foto 6 */
            83.3%,
            97.58% {
                /* Pausa na foto 6 */
                transform: translateX(-500vw);
            }

            /* Transição final para o início */
            100% {
                transform: translateX(0);
            }
        }
    </STYLE>

    <x-slot name="title">Home</x-slot>
    <h1 class="font-[arial] pt-40 font-bold text-[80px] text-center text-[#F1EEDD]">Museu Virtual</h1>
    <h2 class="text-center text-[20px] font-[arial] text-[#F1EEDD]">Bem-vindo ao Museu Virtual das Rochas, um <br>espaço
        interativo e educativo dedicado à incrível<br> diversidade geológica da nossa região. </h2>
    <br>
    <p class="text-center"><a href="{{ route('dashboardPublica') }}"
            class="p-1 pl-9 pr-9 rounded-full bg-[#F1EEDD] hover:bg-[#ACB18E] text-[#565851]">Login</a></p>
    <figure class="w-100 mt-20 carousel-container">
            <div class="carousel-slide">
                @foreach ($fotosRecentes as $item)
                    <img src="{{ asset('storage/' . $item->caminho) }}" alt="">
                @endforeach
            </div>
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
            <div class="grid xl:grid-cols-2 grid-rows-2 gap-x-8 gap-y-4 grid-cols-1 justify-items-center items-center">
                <figure data-aos="fade-right">
                    <a href="{{ route('site.jazidas') }}"><img class="cursor-pointer"
                            src="/assets/img/JazidaInicial.png" alt=""></a>
                    <figcaption>
                        <h2 class="font-[arial] font-bold text-[40px] text-[#F1EEDD]">Jazidas</h2>
                        <h3 class="font-[arial] text-[20px] text-[#F1EEDD]">Confira aqui nosso acervo de jazidas.</h3>
                    </figcaption>
                </figure>

                <figure data-aos="fade-left">
                    <a href="{{ route('site.rochas') }}"><img class="cursor-pointer" src="/assets/img/RochaInicial.png"
                            alt=""></a>
                    <figcaption>
                        <h2 class="font-[arial] font-bold text-[40px] text-[#F1EEDD]">Rochas</h2>
                        <h3 class="font-[arial] text-[20px] text-[#F1EEDD]">Confira aqui nosso acervo de rochas.</h3>
                    </figcaption>
                </figure>

                <figure data-aos="fade-right">
                    <a href="{{ route('site.minerais') }}"><img class="cursor-pointer"
                            src="/assets/img/MineraisInicial.png" alt=""></a>
                    <figcaption>
                        <h2 class="font-[arial] font-bold text-[40px] text-[#F1EEDD]">Minerais</h2>
                        <h3 class="font-[arial] text-[20px] text-[#F1EEDD]">Confira aqui nosso acervo de minerais.</h3>
                    </figcaption>
                </figure>

                <figure data-aos="fade-left">
                    <a href="#"><img class="cursor-pointer" src="/assets/img/CatalogoInicial.png"
                            alt=""></a>
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
</x-layouts.BaseLayout>
