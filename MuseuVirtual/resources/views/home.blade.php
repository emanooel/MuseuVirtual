<x-layouts.BaseLayout>
    @vite(['resources/css/homeBlade.css', 'resources/js/app.js', 'resources/js/home.js'])
    <x-slot name="title">Home</x-slot>

    <!-- Loading Screen -->
    <div class="loading-overlay" id="loading">
        <div class="spinner"></div>
    </div>
    @if (isset($termo))
        <main id="resultados-container" class="max-w-7xl mx-auto px-4 py-6 bg-white rounded shadow text-black">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold font-cinzel">
                    Resultados da busca por: <span class="text-white-600">"{{ $termo }}"</span>
                </h2>
                <button onclick="document.getElementById('resultados-container').style.display='none'"
                    class="text-sm text-red-600 hover:underline">
                    Fechar tudo
                </button>
            </div>

            @if ($minerais->count() || $rochas->count() || $jazidas->count())
                @if ($minerais->count() > 0)
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold font-cinzel mb-2">Minerais encontrados:</h3>
                        <ul class="list-disc list-inside">
                            @foreach ($minerais as $mineral)
                                <li>
                                    {{-- {{ route('site.minerais.show', ['slug_mineral' => $item->id]) }} --}}
                                    <a href="{{ route('site.minerais.show', $mineral->slug) }}"
                                        class="text-blue-600 hover:underline">
                                        {{ $mineral->nome }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="mt-4">
                            {{ $minerais->appends(['q' => $termo])->links() }}
                        </div>
                    </div>
                @endif

                @if ($rochas->count() > 0)
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold font-cinzel mb-2">Rochas encontradas:</h3>
                        <ul class="list-disc list-inside">
                            @foreach ($rochas as $rocha)
                                <li>
                                    <a href="{{ route('site.rochas.show', [$rocha->tipo,$rocha->slug]) }}"
                                        class="text-blue-600 hover:underline">
                                        {{ $rocha->nome }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="mt-4">
                            {{ $rochas->appends(['q' => $termo])->links() }}
                        </div>
                    </div>
                @endif

                @if ($jazidas->count() > 0)
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold font-cinzel mb-2">Jazidas encontradas:</h3>
                        <ul class="list-disc list-inside">
                            @foreach ($jazidas as $jazida)
                                <li>
                                    <a href="{{ route('jazidas.show', $jazida->id) }}"
                                        class="text-blue-600 hover:underline">
                                        {{ $jazida->localizacao }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="mt-4">
                            {{ $jazidas->appends(['q' => $termo])->links() }}
                        </div>
                    </div>
                @endif
            @else
                <p class="text-gray-600 font-cinzel">Nenhum resultado encontrado para "{{ $termo }}".</p>
            @endif
        </main>
    @endif




    <!-- Hero Section -->
    <div class="hero-container">
        <div class="hero-content">
            <br>
            <h1 class="main-title">Museu Virtual</h1>
            <p class="subtitle">
                Bem-vindo ao Museu Virtual das Rochas, um espaço interativo e educativo
                dedicado à incrível diversidade geológica da nossa região.
            </p>
        </div>

        <!-- Swiper -->
        <figure class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://th.bing.com/th/id/R.ad6cba861c6885f765c806b5b7863352?rik=6CY9S7bE5j3spA&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2f5%2f9%2fd%2f1281292-geology-wallpaper-1920x1080-for-lockscreen.jpg&ehk=19Sopya1egoOmeuV1vNCvXYLXkFfrxtBXMqB1Z9hwvc%3d&risl=&pid=ImgRaw&r=0"
                        alt="Rochas Geologia">
                </div>
            </div>
        </figure>
    </div>

    <!-- Explore Section -->
    <div class="explore-section">
        <h2 class="explore-title">Explore</h2>
        <h3 class="explore-intro">
            Explore o universo da geologia em nosso site, onde você encontra informações
            detalhadas sobre jazidas, rochas e minerais.
        </h3>

        <div class="cards-container">
            <div class="cards-grid">
                <figure class="card-figure" data-aos="fade-right">
                    <a href="{{ route('site.jazidas') }}" class="card-link">
                        <img class="card-image" src="/assets/img/JAZIDAinicial(2).png" alt="Jazidas">
                        <div class="card-content">
                            <h2 class="card-title">Jazidas</h2>
                            <h3 class="card-description">
                                Confira aqui nosso acervo completo de jazidas minerais,
                                com informações detalhadas sobre sua formação e localização.
                            </h3>
                        </div>
                    </a>
                </figure>

                <figure class="card-figure" data-aos="fade-left">
                    <a href="{{ route('site.rochas') }}" class="card-link">
                        <img class="card-image" src="/assets/img/rochaINICIAL.jpg" alt="Rochas">
                        <div class="card-content">
                            <h2 class="card-title">Rochas</h2>
                            <h3 class="card-description">
                                Descubra a diversidade de rochas da nossa região,
                                desde ígneas até metamórficas e sedimentares.
                            </h3>
                        </div>
                    </a>
                </figure>

                <figure class="card-figure" data-aos="fade-right">
                    <a href="{{ route('site.minerais') }}" class="card-link">
                        <img class="card-image" src="/assets/img/MINERALinicial.jpg" alt="Minerais">
                        <div class="card-content">
                            <h2 class="card-title">Minerais</h2>
                            <h3 class="card-description">
                                Explore nossa coleção de minerais únicos,
                                com suas propriedades físicas e químicas detalhadas.
                            </h3>
                        </div>
                    </a>
                </figure>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        window.addEventListener('load', function() {
            setTimeout(() => {
                document.getElementById('loading').classList.add('fade-out');
            }, 300);
        });

        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100
            });
        }

        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            speed: 1000,
        });

        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const scrolled = window.pageYOffset;
                    document.querySelectorAll('.floating-element').forEach(el => {
                        el.style.transform = `translateY(${-scrolled * 0.3}px)`;
                    });
                    ticking = false;
                });
                ticking = true;
            }
        });

        document.querySelectorAll('.card-figure').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.6s ease';

            card.addEventListener('mouseenter', () => card.style.transform = 'translateY(-15px) scale(1.02)');
            card.addEventListener('mouseleave', () => card.style.transform = 'translateY(0) scale(1)');
            card.addEventListener('click', () => {
                card.style.transform = 'translateY(-5px) scale(0.98)';
                setTimeout(() => card.style.transform = 'translateY(-15px) scale(1.02)', 150);
            });
        });

        window.addEventListener('load', () => {
            const cards = document.querySelectorAll('.card-figure');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 1200 + (index * 200));
            });
        });
    </script>
</x-layouts.BaseLayout>
