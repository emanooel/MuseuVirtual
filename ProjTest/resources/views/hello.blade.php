<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Musics Zone - Preview') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="py-12">
            <style>
                .musica-card {
                    width: max(150px, 16.5%);
                    max-width: 200px; /* Limite para o tamanho máximo da card */
                    flex: 1 1 200px; /* Permite que a card se ajuste responsivamente */
                }

                .musica-card img {
                    width: 100%;
                    height: auto; /* Mantém a proporção da imagem */
                    max-height: 150px; /* Limita a altura da imagem */
                }

                .musica-card .text-center {
                    padding-top: 8px; /* Dá um pequeno espaço entre a imagem e o nome */
                    font-size: 1rem;
                    text-align: center;
                }
            </style>

            <div class="flex flex-wrap items-start justify-center">
                @foreach ($musicas as $musica)
                    <a href="{{ route('musica.show', $musica[0]) }}" class="no-underline">
                        <div class="musica-card m-2 border border-black flex flex-col items-center cursor-pointer hover:shadow-lg transition">
                            <img src="{{ asset('img/musicasimg/' . $musica[0]) }}" alt="Capa" class="border-b border-black" />
                            <div class="text-center p-1">
                                {{ $musica[1] }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </x-slot>
</x-app-layout>
