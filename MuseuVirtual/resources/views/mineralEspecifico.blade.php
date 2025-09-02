<x-layouts.BaseLayout>
    <x-slot name="title">Mineral - {{ $mineral->nome }}</x-slot>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
    
    <script>
        Fancybox.bind("[data-fancybox]", {
            hideScrollbar: false,
            Toolbar: {
                display: {
                    left: ["infobar"],
                    middle: [],
                    right: ["slideshow", "download", "thumbs", "close"],
                },
            },
        });
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lato:wght@300;400;700&display=swap');

        :root {
            --primary-dark: #1c1f1a;
            --primary-light: #F1EEDD;
            --accent-green: #ACB18E;
            --accent-dark-green: #73785C;
            --section-bg: rgba(54, 60, 39, 0.3);
            --glass-bg: rgba(255, 255, 255, 0.08);
            --border-color: rgba(241, 238, 221, 0.1);
            --shadow-light: 0 5px 15px rgba(0, 0, 0, 0.2);
            --shadow-heavy: 0 10px 30px rgba(0, 0, 0, 0.3);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --border-radius: 20px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lato', sans-serif;
            background: rgb(0, 0, 0);
            color: var(--primary-light);
            line-height: 1.6;
            min-height: 100vh;
        }

        h1, h2, .section-title {
            font-family: 'Cinzel', serif;
        }

        /* Loading Screen */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgb(0, 0, 0);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 3px solid var(--border-color);
            border-top: 3px solid var(--accent-green);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, 
                rgba(172, 177, 142, 0.15) 0%, 
                rgba(115, 120, 92, 0.25) 50%,
                rgba(54, 60, 39, 0.2) 100%
            );
            border-radius: 30px;
            padding: 60px 40px;
            margin: 40px 0 60px 0;
            text-align: center;
            border: 2px solid var(--border-color);
            box-shadow: var(--shadow-heavy);
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(20px);
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(172, 177, 142, 0.1) 50%, transparent 70%);
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { transform: translateX(-100%); }
            50% { transform: translateX(100%); }
        }

        .hero-section h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            color: var(--primary-light);
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 2;
        }

        .hero-section p {
            font-size: clamp(1rem, 2vw, 1.3rem);
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        /* Section Container */
        .section-container {
            background: var(--section-bg);
            border-radius: var(--border-radius);
            padding: 50px 40px;
            margin-bottom: 60px;
            backdrop-filter: blur(15px);
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .section-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-green), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .section-container:hover::before {
            opacity: 1;
        }

        /* Content Box */
        .content-box {
            background: var(--glass-bg);
            border-left: 6px solid var(--accent-green);
            border-radius: 15px;
            padding: 35px;
            margin-top: 30px;
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            position: relative;
        }

        .content-box:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-heavy);
        }

        .content-box p {
            font-size: 1.1rem;
            line-height: 1.7;
        }

        .content-box strong {
            color: var(--accent-green);
            font-weight: 600;
        }

        /* Image Gallery */
        .image-gallery-container {
            position: relative;
            margin-top: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-image-wrapper {
            position: relative;
            width: 100%;
            max-width: 900px;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-heavy);
            transition: var(--transition);
            background: linear-gradient(45deg, var(--accent-green), var(--accent-dark-green));
            padding: 3px;
        }
        
        .main-image-wrapper:hover {
            transform: scale(1.02) translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        .main-image-wrapper img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
            border-radius: calc(var(--border-radius) - 3px);
            transition: var(--transition);
        }

        /* Action Buttons */
        .action-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 12px;
            z-index: 10;
        }

        .action-button {
            background: rgba(172, 177, 142, 0.9);
            color: var(--primary-dark);
            border-radius: 50%;
            width: 48px;
            height: 48px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-light);
        }

        .action-button:hover {
            background: var(--accent-green);
            transform: scale(1.15) rotate(5deg);
            box-shadow: var(--shadow-heavy);
        }

        .action-button svg {
            width: 24px;
            height: 24px;
        }

        /* Swiper Styles */
        .swiper-container {
            width: 100%;
            margin-top: 40px;
            position: relative;
            padding: 0 50px;
        }

        .swiper-slide {
            width: 160px !important;
            height: 130px;
            cursor: pointer;
            transition: var(--transition);
            border-radius: 12px;
            overflow: hidden;
        }

        .swiper-slide:hover {
            transform: scale(1.05) translateY(-3px);
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
            border: 3px solid transparent;
            transition: var(--transition);
        }

        .swiper-slide-thumb-active img,
        .swiper-slide:hover img {
            border-color: var(--accent-green);
            box-shadow: 0 8px 25px rgba(172, 177, 142, 0.3);
        }

        .swiper-button-prev,
        .swiper-button-next {
            background: var(--accent-dark-green);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            color: var(--primary-light);
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            margin-top: -25px;
        }

        .swiper-button-prev:hover,
        .swiper-button-next:hover {
            transform: scale(1.1);
            background: var(--accent-green);
            box-shadow: var(--shadow-heavy);
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 20px;
            font-weight: bold;
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(5px);
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            background: rgb(0, 0, 0);
            padding: 40px;
            border-radius: var(--border-radius);
            text-align: center;
            box-shadow: var(--shadow-heavy);
            max-width: 90%;
            border: 2px solid var(--accent-green);
            transform: scale(0.9);
            animation: modalSlideIn 0.3s ease forwards;
        }

        @keyframes modalSlideIn {
            to {
                transform: scale(1);
            }
        }

        .modal-content h2 {
            margin-bottom: 20px;
            color: var(--accent-green);
            font-size: 1.5rem;
        }
        
        .modal-content #qrcode {
            padding: 15px;
            background: var(--primary-light);
            border-radius: 12px;
            display: inline-block;
            margin: 20px 0;
            box-shadow: var(--shadow-light);
        }

        .modal-actions {
            display: flex;
            justify-content: center;
            gap: 15px; 
            margin-top: 20px;
        }

        .modal-close-button {
            background: linear-gradient(135deg, var(--accent-green), var(--accent-dark-green));
            border: none;
            color: var(--primary-dark);
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 25px;
            cursor: pointer;
            transition: var(--transition);
            font-size: 1rem;
        }
        
        .modal-close-button.close-only {
            background: transparent;
            border: 2px solid var(--accent-dark-green);
            color: var(--primary-light);
        }

        .modal-close-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-light);
        }
        
        .modal-close-button.close-only:hover {
             background: var(--accent-dark-green);
             color: var(--primary-light);
        }


        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                padding: 40px 25px;
                margin: 20px 0 40px 0;
                border-radius: 20px;
            }

            .section-container {
                padding: 30px 25px;
                margin-bottom: 40px;
            }

            .main-image-wrapper img {
                height: 300px;
            }

            .swiper-slide {
                width: 120px !important;
                height: 100px;
            }

            .action-buttons {
                top: 15px;
                right: 15px;
                gap: 8px;
            }

            .action-button {
                width: 40px;
                height: 40px;
            }

            .action-button svg {
                width: 20px;
                height: 20px;
            }

            .swiper-container {
                padding: 0 35px;
            }

            .swiper-button-prev,
            .swiper-button-next {
                width: 40px;
                height: 40px;
            }
        }

        @media (max-width: 480px) {
            .swiper-container {
                padding: 0 25px;
            }
            
            .modal-content {
                padding: 25px;
                margin: 20px;
            }
            
            .modal-actions {
                flex-direction: column;
                gap: 10px;
            }
        }

        /* Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-delay-1 { animation-delay: 0.1s; }
        .animate-delay-2 { animation-delay: 0.2s; }
        .animate-delay-3 { animation-delay: 0.3s; }

        /* Notification animations */
        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideOutRight {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }

        /* Estilo para a linha do rodapé estendida */
        .full-width-line {
            width: 100vw;
            margin-left: calc(-50vw + 50%);
            border: none;
            border-top: 1px solid var(--border-color);
            opacity: 0.2;
            margin-top: 60px;
        }

    </style>

    <div id="loading-overlay" class="loading-overlay">
        <div class="loading-spinner"></div>
    </div>

    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 px-4">
        <br><br>

        <div class="hero-section fade-in">
            <h1><strong>{{ $mineral->nome }}</strong></h1>
            <p>
                Detalhes sobre a geologia, minerais e história deste mineral fascinante.
            </p>
        </div>

        <div class="section-container fade-in animate-delay-1">
            @php
                $fotoCapa = $mineral->fotos->firstWhere('capa', true) ?? $mineral->fotos->first();
            @endphp
            @if ($fotoCapa)
                <div class="image-gallery-container">
                    <div class="main-image-wrapper">
                        <img id="main-mineral-image" src="{{ asset('storage/' . $fotoCapa->caminho) }}" alt="Foto principal do mineral {{ $mineral->nome }}">
                        <div class="action-buttons">
                            <div class="action-button" onclick="downloadImage()" title="Baixar imagem">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 16l-4-4h3V4h2v8h3l-4 4zM6 20v-2h12v2H6z"/>
                                </svg>
                            </div>
                            <div class="action-button" onclick="showQRCode()" title="Gerar QR Code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M3 3h8v8H3V3zm2 2v4h4V5H5zm8-2h8v8h-8V3zm2 2v4h4V5h-4zM3 13h8v8H3v-8zm2 2v4h4v-4H5zm10 0h2v2h-2v-2zm4 0h2v2h-2v-2zm-4 4h2v2h-2v-2zm4 0h2v2h-2v-2zm-6-6h2v2h-2v-2zm2 2h2v2h-2v-2zm0 2h2v2h-2v-2z"/>
                                </svg>
                            </div>
                            <div class="action-button" onclick="openFullscreen()" title="Tela cheia">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M5 5h5V3H3v7h2V5zm9-2v2h5v5h2V3h-7zM3 14v7h7v-2H5v-5H3zm16 0v5h-5v2h7v-7h-2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($mineral->fotos->count() > 1)
                <div class="swiper-container swiper-mineral-thumbs">
                    <div class="swiper-wrapper">
                        @foreach ($mineral->fotos as $foto)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $foto->caminho) }}" alt="Miniatura do mineral {{ $mineral->nome }}" data-src="{{ asset('storage/' . $foto->caminho) }}">
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            @endif
        </div>

        <div id="qrcode-modal-overlay" class="modal-overlay">
            <div class="modal-content">
                <h2>📱 Acesse esta página</h2>
                <div id="qrcode"></div>
                <div class="modal-actions">
                    <button class="modal-close-button" onclick="downloadQRCode()">Baixar QR Code</button>
                    <button class="modal-close-button close-only" onclick="hideQRCode()">Fechar</button>
                </div>
            </div>
        </div>

        @if($mineral->descricao || $mineral->propriedades)
            <div class="section-container fade-in animate-delay-2">
                <div class="content-box">
                    @if($mineral->descricao)
                        <p><strong>Descrição:</strong> {!! $mineral->descricao !!}</p>
                    @endif

                    @if($mineral->descricao && $mineral->propriedades)
                        <br> {{-- Adiciona uma quebra de linha se ambas existirem --}}
                    @endif

                    @if($mineral->propriedades)
                        <p><strong>Propriedades:</strong> {!! $mineral->propriedades !!}</p>
                    @endif
                </div>
            </div>
        @endif
    </div>



    <script>
        // Loading screen
        window.addEventListener('load', function() {
            const loadingOverlay = document.getElementById('loading-overlay');
            setTimeout(() => {
                loadingOverlay.style.opacity = '0';
                setTimeout(() => {
                    loadingOverlay.style.display = 'none';
                }, 500);
            }, 800);
        });

        // Swiper and main functionality
        document.addEventListener('DOMContentLoaded', function () {
            const mainImage = document.getElementById('main-mineral-image');

            @if($mineral->fotos->count() > 1)
                const thumbsSwiper = new Swiper(".swiper-mineral-thumbs", {
                    spaceBetween: 15,
                    slidesPerView: 5,
                    freeMode: true,
                    watchSlidesProgress: true,
                    loop: true,
                    centeredSlides: false,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: {
                        320: { slidesPerView: 2.5, spaceBetween: 10 },
                        480: { slidesPerView: 3, spaceBetween: 12 },
                        768: { slidesPerView: 4, spaceBetween: 15 },
                        1024: { slidesPerView: 5, spaceBetween: 15 },
                    },
                });

                // Handle thumbnail clicks
                thumbsSwiper.on('click', function(swiper, event) {
                    const clickedSlide = event.target.closest('.swiper-slide');
                    if (clickedSlide) {
                        const newSrc = clickedSlide.querySelector('img').getAttribute('data-src');
                        if (newSrc) {
                            mainImage.style.opacity = '0.5';
                            mainImage.src = newSrc;
                            
                            mainImage.onload = function() {
                                mainImage.style.opacity = '1';
                            };
                            
                            document.querySelectorAll('.swiper-slide').forEach(slide => {
                                slide.classList.remove('swiper-slide-thumb-active');
                            });
                            clickedSlide.classList.add('swiper-slide-thumb-active');
                        }
                    }
                });
            @endif

            // Animate elements on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.section-container').forEach(el => {
                observer.observe(el);
            });
        });
        
        // Download image function
        function downloadImage() {
            const imageSrc = document.getElementById('main-mineral-image').src;
            const a = document.createElement('a');
            a.href = imageSrc;
            a.download = 'mineral-{{ Str::slug($mineral->nome) }}-' + Date.now();
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            
            showNotification('📥 Download da imagem iniciado!');
        }
        
        // QR Code functions
        function showQRCode() {
            const modal = document.getElementById('qrcode-modal-overlay');
            const qrcodeContainer = document.getElementById('qrcode');
            modal.style.display = 'flex';
            
            qrcodeContainer.innerHTML = '';
            
            const jazidaUrl = window.location.href;
            new QRCode(qrcodeContainer, {
                text: jazidaUrl,
                width: 200,
                height: 200,
                colorDark: "#1c1f1a",
                colorLight: "#F1EEDD",
                correctLevel: QRCode.CorrectLevel.H
            });
        }
        
        function hideQRCode() {
            const modal = document.getElementById('qrcode-modal-overlay');
            modal.style.display = 'none';
        }

        // Download QR Code function
        function downloadQRCode() {
            const qrcodeContainer = document.getElementById('qrcode');
            const canvas = qrcodeContainer.querySelector('canvas');
            
            if (canvas) {
                const imageDataURL = canvas.toDataURL("image/png");
                const a = document.createElement('a');
                a.href = imageDataURL;
                a.download = 'qrcode-mineral-{{ Str::slug($mineral->nome) }}';

                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);

                showNotification('✅ QR Code baixado!');
            } else {
                showNotification('Gerando QR Code... por favor, tente novamente.', 'error');
                showQRCode();
            }
        }

        // Fullscreen function
        function openFullscreen() {
            const img = document.getElementById('main-mineral-image');
            if (img.requestFullscreen) {
                img.requestFullscreen();
            } else if (img.webkitRequestFullscreen) {
                img.webkitRequestFullscreen();
            } else if (img.msRequestFullscreen) {
                img.msRequestFullscreen();
            }
        }

        // Notification system
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.textContent = message;
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: var(--accent-green);
                color: var(--primary-dark);
                padding: 15px 25px;
                border-radius: 10px;
                font-weight: 600;
                z-index: 10000;
                animation: slideInRight 0.3s ease;
            `;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.animation = 'slideOutRight 0.3s ease forwards';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        // Close modal when clicking outside
        document.getElementById('qrcode-modal-overlay').addEventListener('click', function(e) {
            if (e.target === this) {
                hideQRCode();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                hideQRCode();
            }
        });
    </script>
</x-layouts.BaseLayout>