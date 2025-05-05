<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Stones List') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        @if (session('success'))
            <div id="popup" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-green-200 text-white px-4 py-2 rounded-md shadow-md opacity-0 transition-opacity duration-1500 ease-in-out">
                {{ session('success') }}
            </div>
        @endif
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        @foreach ($rochas as $rocha)

                        <div class="flex items-center justify-between border-b border-gray-300 py-2">

                            <div>
                                <p class="text-lg font-semibold">Fotoaqui</p>
                            </div>

                            <div>
                                <p class="text-lg font-semibold">{{ $rocha->nome }}</p>
                            </div>

                            <div x-data="{ open: false }" class="relative">
                                <!-- Botão Alterações -->
                                <button @click="open = !open" class="bg-gray-200 dark:bg-gray-700 text-sm px-3 py-1 rounded hover:bg-gray-300 dark:hover:bg-gray-600">
                                    Alterações
                                </button>

                                <!-- Dropdown -->
                                <div x-show="open" @click.away="open = false" x-transition
                                    class="absolute right-0 mt-2 w-32 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded shadow-md z-50">
                                    <!-- Editar -->
                                    <a href="{{ route('Rocha.edit', $rocha->id) }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700"> Editar </a>

                                    <!-- Excluir -->
                                    <form action="{{ route('Rocha.destroy', $rocha->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta rocha?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-100 dark:hover:bg-red-700"> Excluir </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                            
                        @endforeach
                    </div>
                    {{ $rochas->links() }}
                    <a href="{{ route('dashboard.rocha.create') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700"> Cadastrar rochas </a>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>