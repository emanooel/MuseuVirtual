<x-app-layout>
    <x-slot name="slot">
        <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-6">Jazidas</h2>

            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if ($jazidas->count())
                <ul class="space-y-4">
                    @foreach ($jazidas as $jazida)
                        <li class="bg-white p-4 rounded-md shadow-sm dark:bg-gray-900 dark:text-gray-300">
                            <div class="flex justify-between">
                                <div>
                                    <strong class="text-lg text-gray-900 dark:text-gray-100">Localização:</strong>
                                    <p>{{ $jazida->localizacao }}</p>
                                    <strong class="text-lg text-gray-900 dark:text-gray-100">Descrição:</strong>
                                    <p>{{ $jazida->descricao ?? 'Sem descrição' }}</p>
                                </div>
                                <div class="flex space-x-2">
                                    <a href="{{ route('jazidas.edit', $jazida) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-md">Editar</a>
                                    <form action="{{ route('jazidas.destroy', $jazida) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md" onclick="return confirm('Tem certeza?')">Excluir</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500 dark:text-gray-400">Nenhuma jazida cadastrada.</p>
            @endif
        </div>
    </x-slot>
</x-app-layout>