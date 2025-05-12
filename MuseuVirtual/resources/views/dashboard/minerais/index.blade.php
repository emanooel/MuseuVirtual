<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Listagem de Minerais') }}
            </h2>
            
            <a href="{{ route('minerais.create') }}">Adicionar Mineral</a>
        </div>
    </x-slot>
    <x-slot name="slot">
        <div class="container mt-5">
            <h2 class="mb-4">Tabela de Minerais</h2>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Propriedades</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($minerais as $mineral)
                        <tr>
                            <td>{{ $mineral->id }}</td>
                            <td>{{ $mineral->nome }}</td>
                            <td>{{ $mineral->descricao }}</td>
                            <td>{{ $mineral->propriedades }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-app-layout>
