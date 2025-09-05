<x-layouts.BaseLayout>
    @vite(['resources/css/homeBlade.css', 'resources/js/app.js'])
    <x-slot name="title">Home</x-slot>

    <!-- Loading Screen -->
    <div class="loading-overlay" id="loading">
        <div class="spinner"></div>
    </div>

    <!-- Hero Section -->
    <div class="hero-container">
        <div class="hero-content">
            <h2 class="main-title">Museu Virtual</h2>
            <h2 class="subtitle">
                Bem-vindo ao Museu Virtual das Rochas, um espaço interativo e educativo
                dedicado à incrível diversidade geológica da nossa região.
            </h2>
        </div>

        <!-- Swiper -->
        <figure class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://th.bing.com/th/id/R.ad6cba861c6885f765c806b5b7863352?rik=6CY9S7bE5j3spA&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2f5%2f9%2fd%2f1281292-geology-wallpaper-1920x1080-for-lockscreen.jpg&ehk=19Sopya1egoOmeuV1vNCvXYLXkFfrxtBXMqB1Z9hwvc%3d&risl=&pid=ImgRaw&r=0" alt="Rochas Geologia">
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
            setTimeout(() => { document.getElementById('loading').classList.add('fade-out'); }, 300);
        });

        if (typeof AOS !== 'undefined') {
            AOS.init({ duration: 1000, once: true, offset: 100 });
        }

        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            autoplay: { delay: 4000, disableOnInteraction: false },
            effect: "fade",
            fadeEffect: { crossFade: true },
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
