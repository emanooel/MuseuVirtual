@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Jazidas</h1>
    
    <a href="{{ route('jazidas.create') }}" class="btn btn-primary mb-3">Nova Jazida</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($jazidas->count())
        <ul class="list-group">
            @foreach ($jazidas as $jazida)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>Localização:</strong> {{ $jazida->localizacao }} <br>
                        <strong>Descrição:</strong> {{ $jazida->descricao ?? 'Sem descrição' }} <br>
                        <strong>Administrador:</strong> {{ $jazida->administrador->name ?? 'Administrador não atribuído' }}
                    </div>
                    <div>
                        <a href="{{ route('jazidas.edit', $jazida) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('jazidas.destroy', $jazida) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhuma jazida cadastrada.</p>
    @endif
</div>
@endsection
