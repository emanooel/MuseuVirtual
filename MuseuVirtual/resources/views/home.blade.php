<x-layouts.BaseLayout>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lato', sans-serif;
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 100%);
            color: #F1EEDD;
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Hero Section */
        .hero-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            padding: 2rem 1rem;
        }

        .hero-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: none; 
            z-index: 1;
        }

        .hero-content {
            text-align: center;
            z-index: 2;
            max-width: 1200px;
            width: 100%;
        }

        .main-title {
            font-family: Arial, sans-serif;
            font-weight: 700;
            font-size: clamp(3rem, 8vw, 5rem);
            background: linear-gradient(135deg, #F1EEDD 0%, #d4c5a0 50%, #363C27 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 2rem;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out;
        }

        .subtitle {
            font-size: clamp(1rem, 2.5vw, 1.375rem);
            color: #F1EEDD;
            max-width: 800px;
            margin: 0 auto 3rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease-out 0.3s both;
            line-height: 1.6;
        }

        /* Swiper Styles */
        .swiper {
            width: 100%;
            max-width: 1200px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: none; /* remove sombra */
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .swiper-slide {
            width: 100%;
            position: relative;
        }

        .swiper-slide img {
            width: 100%;
            height: auto;
            aspect-ratio: 16/9;
            object-fit: cover;
            transition: transform 0.3s ease;
            display: block;
        }

        .swiper-slide:hover img {
            transform: scale(1.05);
        }

        /* Explore Section */
        .explore-section {
            padding: 30px 0;
            background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(20,20,20,0.8) 100%);
        }

        .explore-title {
            font-family: Arial, sans-serif;
            font-weight: 700;
            font-size: clamp(3rem, 6vw, 5rem);
            background: linear-gradient(135deg, #F1EEDD 0%, #363C27 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
            margin-bottom: 2rem;
        }

        .explore-intro {
            font-size: clamp(1rem, 2vw, 1.25rem);
            color: #F1EEDD;
            text-align: center;
            max-width: 600px;
            margin: 0 auto 4rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Cards Grid */
        .cards-container {
            display: flex;
            justify-content: center;
            margin-top: 2.5rem;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            max-width: 1400px;
            width: 100%;
            padding: 0 1rem;
        }

        .card-figure {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease;
            cursor: pointer;
            position: relative;
        }

        .card-link {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .card-image {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            transition: transform 0.4s ease;
            display: block;
        }

        .card-figure:hover .card-image {
            transform: scale(1.1);
        }

        .card-content {
            padding: 2rem;
        }

        .card-title {
            font-family: Arial, sans-serif;
            font-weight: 700;
            font-size: clamp(1.5rem, 3vw, 2.5rem);
            color: #F1EEDD;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #F1EEDD 0%, #d4c5a0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card-description {
            font-size: clamp(1rem, 1.5vw, 1.25rem);
            color: rgba(241, 238, 221, 0.8);
            line-height: 1.6;
        }

        /* Floating Elements */
        .floating-element {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
            pointer-events: none;
            font-size: 2rem;
        }

        .floating-element:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
        .floating-element:nth-child(2) { top: 60%; right: 15%; animation-delay: 2s; }
        .floating-element:nth-child(3) { bottom: 20%; left: 20%; animation-delay: 4s; }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .cards-grid { grid-template-columns: repeat(2, 1fr); gap: 1.5rem; }
        }

        @media (max-width: 768px) {
            .swiper-slide { height: auto; }
            .explore-section { padding: 2rem 1rem 4rem 1rem; }
            .cards-grid { grid-template-columns: 1fr; gap: 1.5rem; }
            .card-content { padding: 1.5rem; }
            .hero-container { min-height: 90vh; padding: 1rem; }
        }

        @media (max-width: 480px) {
            .cards-grid { grid-template-columns: 1fr; padding: 0 0.5rem; }
            .card-figure { margin: 0; }
            .swiper-slide img { aspect-ratio: 16/9; }
            .card-image { aspect-ratio: 16/9; }
        }

        /* Loading Screen */
        .loading-overlay {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 1;
            transition: opacity 0.5s ease-out;
        }

        .loading-overlay.fade-out {
            opacity: 0;
            pointer-events: none;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 3px solid rgba(241,238,221,0.3);
            border-top: 3px solid #F1EEDD;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        
        /* AOS Override */
        [data-aos="fade-right"] { opacity: 0; transform: translateX(-50px); transition: all 0.6s ease; }
        [data-aos="fade-right"].aos-animate { opacity: 1; transform: translateX(0); }
        [data-aos="fade-left"] { opacity: 0; transform: translateX(50px); transition: all 0.6s ease; }
        [data-aos="fade-left"].aos-animate { opacity: 1; transform: translateX(0); }
    </style>

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
            <figure class="w-full swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src={{ asset('assets/img/jazida-inicial-final.jpg') }} alt="Rochas Geologia">
                    </div>
                    <div class="swiper-slide">
                        <img src={{ asset('assets/img/jazida-inicia-final2.jpg') }} alt="Rochas Geologia">
                    </div>
                    <div class="swiper-slide">
                        <img src={{ asset('assets/img/jazida-inicial-final3.jpg') }} alt="Rochas Geologia">
                    </div>
                </div>
            </figure>
        </div>
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
