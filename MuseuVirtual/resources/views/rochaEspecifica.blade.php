<x-layouts.BaseLayout>
<<<<<<< HEAD


    <x-slot name="title">RochaEspecifica</x-slot>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <style>
        /* Estilos para o contêiner principal do carrossel e seus botões */
        .swiper-container-wrapper {
            display: flex;
            /* Permite que os itens (botões e carrossel) fiquem lado a lado */
            align-items: center;
            /* Alinha os itens verticalmente ao centro */
            justify-content: center;
            /* Centraliza os itens horizontalmente dentro do wrapper */
            max-width: 800px;
            /* Largura máxima do wrapper do carrossel para desktops */
            margin: 50px auto;
            /* Centraliza o wrapper do carrossel na página e adiciona margem superior/inferior */
            position: relative;
            /* Necessário para posicionamento absoluto de outros elementos se houver */
        }
=======
    @vite(['resources/css/EspecificoBlade.css', 'resources/js/app.js'])
    <x-slot name="title">Rocha - {{ $rocha->nome }}</x-slot>

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
    <div id="loading-overlay" class="loading-overlay">
        <div class="loading-spinner"></div>
    </div>

    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 px-4">
        <br><br>
>>>>>>> cd021bb2301a400068c3ee814f805670ea617e40

        <div class="hero-section fade-in">
            <h1><strong>{{ $rocha->nome }}</strong></h1>
            <p>
                Detalhes sobre a geologia, minerais e história desta rocha fascinante.
            </p>
        </div>

<<<<<<< HEAD
        /* Estilos para cada slide individual do carrossel */
        .swiper-slide {
            width: 240px;
            /* Largura explícita para cada slide (corresponde ao size-60 da imagem) */
            /* O espaço entre os slides será controlado pelo 'spaceBetween' no JS do Swiper */
        }

        /* Estilos para as imagens dentro dos slides do carrossel */
        .swiper-slide img {
            width: 100%;
            /* A imagem preenche 100% da largura do seu slide */
            height: 100%;
            /* A imagem preenche 100% da altura do seu slide */
            object-fit: cover;
            /* Recorta a imagem para cobrir toda a área do slide sem distorcer */
            border-radius: 0.75rem;
            /* Aplica bordas arredondadas (equivalente ao Tailwind rounded-xl) */
        }

        /* Estilos para os botões de navegação (setas) do carrossel */
        .swiper-button-prev,
        .swiper-button-next {
            width: 40px;
            /* Largura do botão */
            height: 40px;
            /* Altura do botão */
            border-radius: 50%;
            /* Transforma o botão em um círculo */
            background-color: rgba(0, 0, 0, 0);
            /* Fundo transparente por padrão */
            display: flex;
            align-items: center;
            /* Centraliza a seta verticalmente */
            justify-content: center;
            /* Centraliza a seta horizontalmente */
            cursor: pointer;
            /* Muda o cursor para indicar que é clicável */
            flex-shrink: 0;
            /* Impede que o botão encolha em telas menores */
            position: static;
            /* Necessário para o flexbox do pai (swiper-container-wrapper) posicioná-los */
            margin: 0 10px;
            /* Adiciona espaçamento horizontal entre os botões e o carrossel */
            transition: background-color 0.3s ease;
            /* Transição suave para a cor de fundo no hover */
        }

        /* Efeito de HOVER para o fundo dos botões de navegação */
        .swiper-button-prev:hover,
        .swiper-button-next:hover {
            background-color: rgba(0, 0, 0, 0.3);
            /* Fundo semi-transparente quando o mouse está sobre o botão */
        }

        /* Estilos para as setas (o conteúdo gerado por ::after) dentro dos botões */
        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 20px;
            /* Tamanho da fonte da seta */
            color: #F1EEDD;
            /* Cor padrão da seta */
            transition: color 0.3s ease;
            /* Transição suave para a cor da seta no hover */
        }

        /* Efeito de HOVER para a cor das SETAS */
        .swiper-button-prev:hover::after,
        .swiper-button-next:hover::after {
            color: #FFFFFF;
            /* Cor da seta muda para branco no hover */
        }

        /* ----- Estilos para a IMAGEM PRINCIPAL (Da Rocha Específica) ----- */
        .main-image-container {
            display: flex;
            /* Usa flexbox para centralizar a imagem */
            justify-content: center;
            /* Centraliza a imagem horizontalmente */
            align-items: center;
            /* Centraliza a imagem verticalmente (se houver altura disponível) */
            width: 100%;
            /* Garante que este contêiner ocupe a largura total do seu pai (o div com paddings responsivos) */
            margin-top: 20px;
            /* Adiciona um espaço da imagem para o título acima dela */
        }

        .main-image {
            max-width: 100%;
            /* A imagem nunca será maior que seu contêiner, garantindo responsividade */
            height: auto;
            /* Mantém a proporção da imagem ao redimensionar */
            display: block;
            /* Remove o espaço extra abaixo da imagem que navegadores podem adicionar */
            object-fit: cover;
            /* Recorta a imagem para cobrir a área sem distorcer (útil se você definir uma proporção fixa) */
            border-radius: 0.75rem;
            /* Aplica bordas arredondadas (equivalente ao Tailwind rounded-xl) */
            /* Se desejar limitar a largura máxima da imagem em telas muito grandes, adicione: */
            /* max-width: 1200px; */
        }


        body,
        .font {
            font-family: 'Segoe UI', sans-serif !important;
        }

        h1 {
            font-family: "Italiana", sans-serif;
            font-weight: 400;
        }
    </style>

    {{-- Contêiner principal para o conteúdo da página (com paddings responsivos) --}}

    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 ">

        {{-- Comentário para depuração (Laravel Blade) --}}
        {{-- @dd($rocha) --}}

        {{-- Título da página, exibindo o nome da rocha --}}
        <h1 class=" text-[50px] text-[#F1EEDD] pt-16"><strong>{{ $rocha->nome }}</strong></h1>

        {{-- Lógica PHP para encontrar a foto de capa (se existir) ou a primeira foto --}}
        @php
            $fotoExibir = null;
            foreach ($rocha->fotos as $item) {
                if ($item->capa) {
                    $fotoExibir = $item;
                    break;
                }
            }
            // Se nenhuma capa foi definida, usa a primeira foto disponível
            if (is_null($fotoExibir) && count($rocha->fotos) > 0) {
                $fotoExibir = $rocha->fotos[0];
            }
        @endphp

        {{-- Substitua seu HTML do container por: --}}
        <div class="container">
            {{-- Swiper Principal --}}
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    @foreach ($rocha->fotos as $foto)
                        <div class=" swiper-slide">
                            <a href="{{ asset('storage/' . $foto->caminho) }}" data-fancybox="gallery"><img
                                    src="{{ asset('storage/' . $foto->caminho) }}" alt="Imagem da Rocha"></a>

                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="flex">
                    <div class="swiper-button-prev swiper-button-prev2"></div>
                    <div class="swiper-button-next swiper-button-next2"></div>
                </div>

            </div>

            {{-- Swiper de Miniaturas --}}
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($rocha->fotos as $foto)
                        <div class="swiper-slide">
                            <a href="{{ asset('storage/' . $foto->caminho) }}" data-fancybox="gallery"><img
                                    src="{{ asset('storage/' . $foto->caminho) }}" alt="Imagem da Rocha"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="text-white">

            {{-- Seção de descrição e composição da rocha --}}
            <div class="font">
                <h2 class="text-[20px] text-[#F1EEDD]"> <strong> Descrição:
                    </strong>{!! $rocha->descricao !!}</h2>
                <br>
                <h2 class="text-[20px] text-[#F1EEDD]"><strong> Composição da rocha: </strong>
                    {{ $rocha->composicao }}</h2>
=======
        <div class="section-container fade-in animate-delay-1">
            @php
                $fotoCapa = $rocha->fotos->firstWhere('capa', true) ?? $rocha->fotos->first();
            @endphp
            @if ($fotoCapa)
                <div class="image-gallery-container">
                    <div class="main-image-wrapper">
                        <img id="main-rocha-image" src="{{ asset('storage/' . $fotoCapa->caminho) }}" alt="Foto principal da rocha {{ $rocha->nome }}">
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

            @if($rocha->fotos->count() > 1)
                <div class="swiper-container swiper-rocha-thumbs">
                    <div class="swiper-wrapper">
                        @foreach ($rocha->fotos as $foto)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $foto->caminho) }}" alt="Miniatura da rocha {{ $rocha->nome }}" data-src="{{ asset('storage/' . $foto->caminho) }}">
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
>>>>>>> cd021bb2301a400068c3ee814f805670ea617e40
            </div>
        </div>

        @if($rocha->descricao || $rocha->composicao)
            <div class="section-container fade-in animate-delay-2">
                <div class="content-box">
                    @if($rocha->descricao)
                        <p><strong>Descrição:</strong> {!! $rocha->descricao !!}</p>
                    @endif

                    @if($rocha->descricao && $rocha->composicao)
                        <br> {{-- Adiciona uma quebra de linha se ambas existirem --}}
                    @endif

                    @if($rocha->composicao)
                        <p><strong>Composição:</strong> {!! $rocha->composicao !!}</p>
                    @endif
                </div>
            </div>
        @endif
    </div>
<<<<<<< HEAD
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
        Fancybox.bind('[data-fancybox]', {
            placeFocusBack: false
=======



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
            const mainImage = document.getElementById('main-rocha-image');

            @if($rocha->fotos->count() > 1)
                const thumbsSwiper = new Swiper(".swiper-rocha-thumbs", {
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
            const imageSrc = document.getElementById('main-rocha-image').src;
            const a = document.createElement('a');
            a.href = imageSrc;
            a.download = 'rocha-{{ Str::slug($rocha->nome) }}-' + Date.now();
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
                a.download = 'qrcode-rocha-{{ Str::slug($rocha->nome) }}';

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
            const img = document.getElementById('main-rocha-image');
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
>>>>>>> cd021bb2301a400068c3ee814f805670ea617e40
        });
    </script>
</x-layouts.BaseLayout>
