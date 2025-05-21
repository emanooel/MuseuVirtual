<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastro de fotos') }}
        </h2>
    </x-slot>

    <x-slot name="title">Cadastro de fotos</x-slot>

    <x-slot name="slot">
        <div class="container mx-auto px-4 mt-6">
            <div class="max-w-3xl mx-auto mt-2 p-6 bg-white dark:bg-gray-800 rounded-xl shadow-md">
                <form action="{{ route('fotos-store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Foto -->
                    <div>
                        <label for="foto"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Foto</label>
                        <input type="file" name="foto[]" id="foto" multiple
                            class="mt-1 block w-full text-sm text-gray-900 dark:text-gray-100 file:bg-gray-100 file:border-0 file:py-2 file:px-4 file:rounded file:text-sm file:font-semibold file:text-gray-700 file:cursor-pointer hover:file:bg-gray-200 dark:file:bg-gray-700 dark:file:text-gray-200 dark:hover:file:bg-gray-600" />
                    </div>

                    <!-- idRocha -->
                    <div>
                        <label for="idRocha"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Rocha</label>
                        <select name="idRocha" id="idRocha"
                            class="mt-1 block w-full bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 border border-gray-300 dark:border-gray-600 rounded-lg py-2 px-3">
                            <option value="">Escolha uma rocha...</option>
                            @foreach ($rochas as $rocha)
                                <option value="{{ $rocha->id }}">{{ $rocha->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- idMineral -->
                    <div>
                        <label for="idMineral" class="block text-sm font-medium text-gray-700 dark:text-gray-300">ID do
                            Mineral</label>
                        <select name="idMineral" id="idMineral"
                            class="mt-1 block w-full bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 border border-gray-300 dark:border-gray-600 rounded-lg py-2 px-3">
                            <option value="">Escolha um Mineral...</option>
                            @foreach ($minerais as $mineral)
                                <option value="{{ $mineral->id }}">{{ $mineral->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- idJazida -->
                    <div>
                        <label for="idJazida" class="block text-sm font-medium text-gray-700 dark:text-gray-300">ID da
                            Jazida</label>
                        <select name="idJazida" id="idJazida"
                            class="mt-1 block w-full bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 border border-gray-300 dark:border-gray-600 rounded-lg py-2 px-3">
                            <option value="">Escolha uma Jazida...</option>
                            @foreach ($jazidas as $jazida)
                                <option value="{{ $jazida->id }}">{{ $jazida->localizacao }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Capa -->
                    <div>
                        <span class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Usar foto como
                            capa?</span>
                        <div class="flex items-center space-x-4">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="capa" value="1" id="capaSim"
                                    class="text-blue-600">
                                <span class="text-gray-700 dark:text-gray-300">Sim</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="capa" value="0" id="capaNao" class="text-blue-600"
                                    checked>
                                <span class="text-gray-700 dark:text-gray-300">Não</span>
                            </label>
                        </div>
                    </div>

                    <!-- Botão -->
                    <div>
                        <button type="submit"
                            class="w-full md:w-auto px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold transition">
                            Salvar Foto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-app-layout>
