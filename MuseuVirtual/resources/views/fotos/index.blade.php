@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                <h1>Listagem de jogos</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('fotos-create') }}" class="btn btn-success">Adicionar foto</a>
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
                @foreach($fotos as $foto)
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
@endsection
