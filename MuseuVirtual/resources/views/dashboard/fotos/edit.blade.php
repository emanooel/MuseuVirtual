@extends('layouts.fotola')

@section('title', 'Edição')

@section('content')
    <div class="container">
        <h1>Editar uma foto</h1>
        <form action="{{ route('fotos-update', ['id' => $fotos->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="foto">Foto</label><br>
                <input type="file" name="foto" placeholder="Adicione a foto">
            </div>
            <br>
            <div class="form-group">
                <label for="idRocha">idRocha</label><br>
                <input type="number" name="idRocha" value="{{ $fotos->idRocha }}" placeholder="Adicione o id da Rocha">
            </div>
            <br>
            <div class="form-group">
                <label for="idMineral">idMineral</label><br>
                <input type="number" name="idMineral" value="{{ $fotos->idMineral }}" placeholder="Adicione o id do mineral">
            </div>
            <br>
            <div class="form-group">
                <label for="idJazida">idJazida</label><br>
                <input type="number" name="idJazida" value="{{ $fotos->idJazida }}" placeholder="Adicione o id da jazida">
            </div>
            <br>
            <div class="form-group">
                <label>Usar foto como capa?</label><br>
                <input type="radio" name="capa" value="1" id="capaSim" {{ $fotos->capa == 1 ? 'checked' : '' }}>
                <label for="capaSim">Sim</label><br>
                <input type="radio" name="capa" value="0" id="capaNao" {{ $fotos->capa == 0 ? 'checked' : '' }}>
                <label for="capaNao">Não</label>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
            </div>
        </form>
    </div>
@endsection
