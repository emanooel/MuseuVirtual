<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Edição de Fotos</h2>
    </x-slot>

    <x-slot name="slot">
        <div class="max-w-3xl mx-auto mt-8 bg-white dark:bg-gray-800 p-6 rounded-lg shadow">

            <form action="{{ route('fotos-update', ['id' => $fotos->id]) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nova Foto:</label>
                    <input type="file" name="foto" class="mt-1 block w-full text-sm text-gray-300 bg-gray-700 border border-gray-600 rounded-lg cursor-pointer dark:bg-gray-700 dark:border-gray-600 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">ID da Rocha:</label>
                    <input type="number" name="idRocha" value="{{ $fotos->idRocha }}" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">ID do Mineral:</label>
                    <input type="number" name="idMineral" value="{{ $fotos->idMineral }}" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">ID da Jazida:</label>
                    <input type="number" name="idJazida" value="{{ $fotos->idJazida }}" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Capa:</label>
                    <div class="flex items-center space-x-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="capa" value="1" class="form-radio text-indigo-600" {{ $fotos->capa == 1 ? 'checked' : '' }}>
                            <span class="ml-2 text-gray-700 dark:text-gray-300">Sim</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="capa" value="0" class="form-radio text-indigo-600" {{ $fotos->capa == 0 ? 'checked' : '' }}>
                            <span class="ml-2 text-gray-700 dark:text-gray-300">Não</span>
                        </label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 transition ease-in-out duration-150">
                        Atualizar
                    </button>
                </div>
            </form>
        </div>
    </x-slot>
</x-app-layout>
