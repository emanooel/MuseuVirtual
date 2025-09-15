<x-layouts.BaseLayout>
    @vite(['resources/css/EspecificoBlade.css', 'resources/js/app.js', 'resources/js/rochaemineral_especificos.js'])
    <x-slot name="title">Mineral - {{ $mineral->nome }}</x-slot>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
    
    <script>
        Fancybox.bind("[data-fancybox]", {
            hideScrollbar: false,
            clickOutside: "close",
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
                        <a href="{{ asset('storage/' . $fotoCapa->caminho) }}" data-fancybox="gallery"
                            data-caption="{{ $mineral->nome }}">
                            <img id="main-mineral-image" src="{{ asset('storage/' . $fotoCapa->caminho) }}"
                                alt="Foto principal da mineral {{ $mineral->nome }}">
                        </a>
                        <div class="action-buttons">

                            <div class="action-button" onclick="downloadImage()" title="Baixar imagem">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 16l-4-4h3V4h2v8h3l-4 4zM6 20v-2h12v2H6z" />
                                </svg>
                            </div>
                            <div class="action-button" onclick="showQRCode()" title="Gerar QR Code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M3 3h8v8H3V3zm2 2v4h4V5H5zm8-2h8v8h-8V3zm2 2v4h4V5h-4zM3 13h8v8H3v-8zm2 2v4h4v-4H5zm10 0h2v2h-2v-2zm4 0h2v2h-2v-2zm-4 4h2v2h-2v-2zm4 0h2v2h-2v-2zm-6-6h2v2h-2v-2zm2 2h2v2h-2v-2zm0 2h2v2h-2v-2z" />
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



</x-layouts.BaseLayout>
