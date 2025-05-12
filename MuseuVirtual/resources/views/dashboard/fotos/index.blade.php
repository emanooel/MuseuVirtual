<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listagem de fotos') }}
        </h2>
    </x-slot>
    @section('title', 'Listagem')

    <x-slot name="slot">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-10">
                    <h1></h1>
                </div>
                <div class="flex justify-center">
                    <a href="{{ route('fotos-create') }}" class="bg-green-600 text-white px-4 py-2 rounded-xl">Adicionar foto</a>
                </div>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">idRocha</th>
                        <th scope="col">idMineral</th>
                        <th scope="col">idJazida</th>
                        <th scope="col">capa</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fotos as $foto)
                        <tr>
                            <th>{{ $foto->id }}</th>
                            <th>{{ $foto->idRocha }}</th>
                            <th>{{ $foto->idMineral }}</th>
                            <th>{{ $foto->idJazida }}</th>
                            <th>{{ $foto->capa }}</th>
                            <th class="d-flex">
                                <a href="{{ route('fotos-edit', ['id' => $foto->id]) }}">Editar</a>
                                <form action="{{ route('fotos-destroy', ['id' => $foto->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-app-layout>
