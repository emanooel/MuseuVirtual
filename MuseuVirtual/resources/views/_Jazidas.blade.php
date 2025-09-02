<x-layouts.BaseLayout>
    <x-slot name="title">Jazidas</x-slot>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: rgb(0, 0, 0);
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

        .rock-type-section {
            background: rgba(54, 60, 39, 0.3);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 60px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(241, 238, 221, 0.1);
        }

        .rock-description {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            border-left: 5px solid #ACB18E;
        }

        .rock-description h2 {
            font-size: 40px;
            margin-bottom: 20px;
            color: #F1EEDD;
        }

        .rock-description p {
            font-size: 16px;
            line-height: 1.6;
            opacity: 0.9;
            color: #F1EEDD;
        }

        .minerals-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        @media (max-width: 1024px) {
            .minerals-grid {
                grid-template-columns: repeat(2, 1fr);
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
                grid-template-columns: 1fr;
            }
        }

        figure {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        figure:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        figure img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 0.75rem 0.75rem 0 0;
        }

        figcaption {
            padding: 20px;
            text-align: center;
        }

        figcaption h2 {
            font-size: 28px;
            font-weight: bold;
            color: #F1EEDD;
            margin: 0;
        }
        

        /* Paginação */
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
            font-family: Arial, sans-serif;
            color: #F1EEDD;
            background-color: rgba(241, 238, 221, 0.1);
        }

        .pagination-links nav a:hover {
            background-color: #73785C;
            color: #F1EEDD;
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
        <br><br>

        {{-- Título grande e descrição do topo --}}
        <div class="hero-section">
            <h1><strong>Museu Mineral - Jazidas</strong></h1>
            <p>
                Conheça as principais jazidas em nossa coleção. Descubra como cada uma se forma e suas características únicas.
            </p>
        </div>

        {{-- Seção estilizada com borda verde, como em Minerais --}}
        <div class="rock-type-section">
            <div class="rock-description">
                <h2><strong>Jazidas</strong></h2>
                <p>
                    As jazidas representam concentrações naturais de minerais que podem ser exploradas economicamente. Explore nossa coleção para conhecer os principais locais e seus minerais característicos.
                </p>
            </div>

            <div class="minerals-grid">
                @foreach ($jazidas as $item)
                    <a href="{{ route('jazidas.show', $item->id) }}">
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

            <div class="pagination-links">
                {{ $jazidas->links() }}
            </div>
        </div>
    </div>
</x-layouts.BaseLayout>
