<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin zone') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Adicione uma musica</h1>
                    <form method="POST" action="{{ route('musicas.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col items-center mt-4 gap-2">

                        <input type="text" class="rounded border border-gray-300" name="nome" placeholder="Nome da música" id="NomeMusica">

                        <input type="text" class="rounded border border-gray-300" name="descricao" placeholder="Descrição da música" id="DescMusica">
                        
                        <div class="border border-black p-2 rounded">
                            <p class="mb-2">Escolha a imagem de capa da música</p>
                            <input type="file" class="w-full" name="imagem" id="ImagemMusica">
                        </div>

                        <div class="border border-black p-2 rounded">
                            <p class="mb-2">Escolha o arquivo da música</p>
                            <input type="file" class="w-full" name="musica" id="ArquivoMusica">
                        </div>

                        <input type="submit" class="bg-red-600 text-white px-4 py-2 rounded cursor-pointer hover:bg-red-700 transition" value="Adicionar Música">
                    </div>
                </form>

                    @if (session('success'))
                    <div class="p-4 mb-4 text-green-800 bg-green-200 rounded">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-slot>
</x-app-layout>
