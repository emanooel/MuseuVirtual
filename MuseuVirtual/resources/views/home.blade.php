<x-layouts.BaseLayout>

    <style>

        body {
            font-family: 'Segoe UI', sans-serif;
            background: rgb(0, 0, 0);
            color: #F1EEDD;
        }

        .swiper-slide {
            width: 100%;
            height: 400px; 
        }

        @media (min-width: 768px) {
            .swiper-slide {
                height: 800px;
            }
        }
    </style>

    <x-slot name="title">Home</x-slot>

    <!-- Título principal -->
    <h1 class="font-[arial] pt-20 md:pt-40 font-bold text-4xl md:text-[80px] text-center text-[#F1EEDD] leading-tight">
        Museu Virtual
    </h1>

    <h2 class="mt-4 md:mt-6 text-center text-base md:text-[20px] font-[arial] text-[#F1EEDD] px-4 leading-relaxed">
        Bem-vindo ao Museu Virtual das Rochas, um <br class="hidden md:block">
        espaço interativo e educativo dedicado à incrível <br class="hidden md:block">
        diversidade geológica da nossa região.
    </h2>

    <figure class="w-full mt-10 md:mt-20 swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($fotosRecentes as $item)
                <img src="{{ asset('storage/' . $item->caminho) }}"
                     alt="Foto do acervo"
                     class="swiper-slide object-cover w-full h-[400px] md:h-[800px] rounded-lg">
            @endforeach
        </div>
    </figure>

    <div class="flex justify-center pt-20 md:pt-40">
        <h2 class="font-[arial] font-bold text-5xl md:text-[80px] bg-gradient-to-b from-[#F1EEDD] to-[#363C27] bg-clip-text text-transparent">
            Explore
        </h2>
    </div>

    <div class="flex justify-center mt-4 md:ml-60">
        <h3 class="text-base md:text-[20px] font-[arial] text-[#F1EEDD] text-center md:text-left px-4 leading-relaxed">
            Explore o universo da geologia em nosso <br class="hidden md:block">
            site, onde você encontra informações <br class="hidden md:block">
            detalhadas sobre jazidas, rochas e minerais.
        </h3>
    </div>
    <div class="flex justify-center mt-10">
        <div class="grid xl:grid-cols-3 gap-x-8 gap-y-8 grid-cols-1 justify-items-center items-stretch pb-40">

            <figure data-aos="fade-right">
                <a href="{{ route('site.jazidas') }}">
                    <img class="rounded-lg w-[90vw] md:w-[584px] h-[400px] md:h-[876px] object-cover cursor-pointer hover:scale-95 duration-300"
                         src="/assets/img/JAZIDAinicial(2).png" alt="">
                </a>
                <figcaption class="text-center md:text-left mt-4">
                    <h2 class="font-[arial] font-bold text-2xl md:text-[40px] text-[#F1EEDD]">Jazidas</h2>
                    <h3 class="font-[arial] text-base md:text-[20px] text-[#F1EEDD]">
                        Confira aqui nosso acervo de jazidas.
                    </h3>
                </figcaption>
            </figure>

            <figure data-aos="fade-left">
                <a href="{{ route('site.rochas') }}">
                    <img class="cursor-pointer rounded-lg hover:scale-95 w-[90vw] md:w-[584px] h-[400px] md:h-[876px] object-cover duration-300"
                         src="/assets/img/rochaINICIAL.jpg" alt="">
                </a>
                <figcaption class="text-center md:text-left mt-4">
                    <h2 class="font-[arial] font-bold text-2xl md:text-[40px] text-[#F1EEDD]">Rochas</h2>
                    <h3 class="font-[arial] text-base md:text-[20px] text-[#F1EEDD]">
                        Confira aqui nosso acervo de rochas.
                    </h3>
                </figcaption>
            </figure>

            <figure data-aos="fade-right">
                <a href="{{ route('site.minerais') }}">
                    <img class="cursor-pointer rounded-lg hover:scale-95 w-[90vw] md:w-[584px] h-[400px] md:h-[876px] object-cover duration-300"
                         src="/assets/img/MINERALinicial.jpg" alt="">
                </a>
                <figcaption class="text-center md:text-left mt-4">
                    <h2 class="font-[arial] font-bold text-2xl md:text-[40px] text-[#F1EEDD]">Minerais</h2>
                    <h3 class="font-[arial] text-base md:text-[20px] text-[#F1EEDD]">
                        Confira aqui nosso acervo de minerais.
                    </h3>
                </figcaption>
            </figure>

        </div>
    </div>

</x-layouts.BaseLayout>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    });
</script>
