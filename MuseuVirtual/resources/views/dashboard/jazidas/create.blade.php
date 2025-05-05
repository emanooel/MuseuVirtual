<x-app-layout>
    <x-slot name="slot">
        <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-6">Nova Jazida</h2>

            <form action="{{ route('jazidas.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="localizacao" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Localização:</label>
                    <input 
                        class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 dark:focus:ring-indigo-600"
                        type="text" 
                        name="localizacao" 
                        required
                    >
                </div>

                <div class="mb-4">
                    <label for="descricao" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Descrição:</label>
                    <textarea 
                        class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 dark:focus:ring-indigo-600"
                        name="descricao"
                    ></textarea>
                </div>


                <div class="mt-6">
                    <button 
                        type="submit" 
                        class="w-full bg-indigo-600 text-white font-medium py-3 px-6 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50"
                    >
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </x-slot>
</x-app-layout>
