<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Jazidas') }}
            </h2>
            <a href="{{ route('jazidas.create') }}">Nova Jazida</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($jazidas->count())
                        <ul class="list-group">
                            @foreach ($jazidas as $jazida)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Localização:</strong> {{ $jazida->localizacao }} <br>
                                        <strong>Descrição:</strong> {{ $jazida->descricao ?? 'Sem descrição' }} <br>
                                    </div>
                                    <div>
                                        <a href="{{ route('jazidas.edit', $jazida) }}"
                                            class="btn btn-sm btn-warning">Editar</a>
                                        <form action="{{ route('jazidas.destroy', $jazida) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Tem certeza?')">Excluir</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>Nenhuma jazida cadastrada.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>