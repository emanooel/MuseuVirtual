<x-app-layout>
    <x-slot name="slot">
        <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-6">Editar Jazida</h2>

            <form action="{{ route('jazidas.update', $jazida) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="localizacao" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Localização:</label>
                    <input 
                        type="text" 
                        name="localizacao" 
                        value="{{ old('localizacao', $jazida->localizacao) }}" 
                        required 
                        class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 dark:bg-gray-900 dark:text-gray-300"
                    >
                </div>

                <div class="mb-4">
                    <label for="descricao" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Descrição:</label>
                    <textarea 
                        name="descricao" 
                        class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 dark:bg-gray-900 dark:text-gray-300"
                    >{{ old('descricao', $jazida->descricao) }}</textarea>
                </div>

                <div class="mt-6">
                    <button type="submit" class="w-full bg-indigo-600 text-white py-3 px-6 rounded-md hover:bg-indigo-700">
                        Atualizar
                    </button>
                </div>
            </form>
        </div>
    </x-slot>
</x-app-layout>
