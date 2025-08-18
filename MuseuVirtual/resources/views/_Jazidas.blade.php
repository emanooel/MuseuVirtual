<x-layouts.BaseLayout>
    <x-slot name="title">Minerais</x-slot>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, #ACB18E 0.5%, #73785C 5%, #363C27 20%);
            color: #F1EEDD;
        }

        .hero-section {
            background: linear-gradient(135deg, rgba(172, 177, 142, 0.2), rgba(115, 120, 92, 0.2));
            border-radius: 25px;
            padding: 50px 30px;
            margin-bottom: 50px;
            text-align: center;
            border: 2px solid rgba(241, 238, 221, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .highlight-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
            margin-bottom: 40px;
        }

        .rock-type-section {
            background: rgba(54, 60, 39, 0.3);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 60px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(241, 238, 221, 0.1);
        }

        .rock-description h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .rock-description p {
            font-size: 1.1rem;
            line-height: 1.6;
            opacity: 0.9;
        }

        .minerals-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 colunas em telas grandes */
            gap: 30px;
            margin-top: 40px;
        }

        @media (max-width: 1024px) {
            .minerals-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 colunas em telas de tablet */
            }
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }

            .hero-section p {
                font-size: 1rem;
            }

            .minerals-grid {
                grid-template-columns: 1fr; /* 1 coluna em telas de celular */
            }
        }

        figure {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        figure:hover {
            transform: scale(1.02);
        }

        figure img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-bottom: 1px solid rgba(241, 238, 221, 0.2);
        }

        figcaption {
            padding: 20px;
            text-align: center;
        }

        figcaption h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .pagination-links nav {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .pagination-links nav a,
        .pagination-links nav span {
            padding: 10px 15px;
            margin: 0 5px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .pagination-links nav a {
            background-color: rgba(241, 238, 221, 0.1);
            color: #F1EEDD;
        }

        .pagination-links nav a:hover {
            background-color: #73785C;
            color: #363C27; /* Adicionado para um hover mais completo */
        }

        .pagination-links nav .active span {
            background-color: #ACB18E;
            color: #363C27;
            font-weight: bold;
        }

        .pagination-links nav .disabled span {
            opacity: 0.5;
            cursor: not-allowed;
            color: #F1EEDD;
        }

        .pagination-links nav .disabled span:hover {
            background-color: rgba(241, 238, 221, 0.1);
            color: #F1EEDD;
        }
    </style>

    <div class="2xl:px-80 xl:px-32 lg:px-20 md:px-10 px-4">
        <div class="hero-section">
            <h1><strong>Museu Mineral - Jazidas</strong></h1>
            <p>
                Conheça as principais jazidas em nossa coleção. Descubra como cada uma se forma e suas características únicas.
            </p>
        </div>

        <img class="highlight-image" src="/storage/app/public/fotos/rochas/1.jpg" alt="Formações rochosas espetaculares">

        <div class="rock-type-section">
            <div class="rock-description">
                <h2><strong>Jazidas</strong></h2>
                    Formadas a partir de processos geológicos. As jazidas são concentrações naturais de minerais ou rochas que possuem valor econômico.
                </p>
            </div>

            <div class="minerals-grid">
                @foreach ($jazidas as $item)
                    <a href="{{ route('site.jazidas.show', $item->id) }}">
                        <figure>
                            @php
                                $fotoExibir = $item->fotos->firstWhere('capa', true) ?? $item->fotos->first();
                            @endphp

                            @if ($fotoExibir)
                                <img src="{{ asset('storage/' . $fotoExibir->caminho) }}" alt="Imagem de {{ $item->nome }}">
                            @else
                                <img src="{{ asset('assets/img/placeholder.png') }}" alt="Nenhuma imagem disponível">
                            @endif

                            <figcaption>
                                <h2>{{ $item->nome }}</h2>
                            </figcaption>
                        </figure>
                    </a>
                @endforeach
            </div>

            {{-- <div class="pagination-links">
                {{ $jazidas->links() }}
            </div> --}}
        </div>
    </div>
</x-layouts.BaseLayout>