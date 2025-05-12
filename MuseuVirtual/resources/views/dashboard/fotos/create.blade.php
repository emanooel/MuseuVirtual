<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('criacao de fotos') }}
        </h2>
    </x-slot>

    <x-slot name="title">Cadastro de fotos</x-slot>

    <x-slot name="slot">
        <div class="container">
            <h1>Adicione uma nova foto</h1>
            <form action="{{ route('fotos-store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="foto">Foto</label><br>
                    <input type="file" name="foto" placeholder="Adicione a foto">
                </div>
                <br>
                <div class="form-group">
                    <label for="idRocha">idRocha</label><br>
                    <select name="" id="">
                        <option value="">Escolha uma rocha...</option>
                        @foreach($rochas as $rocha)
                            <option value="{{$rocha->id}}">{{$rocha->nome}}</option>
                        @endforeach
                    </select>
                   
                </div>
                <br>
                <div class="form-group">
                    <label for="idMineral">idMineral</label><br>
                    <input type="number" name="idMineral" placeholder="Adicione o id do mineral">
                </div>
                <br>
                <div class="form-group">
                    <label for="idJazida">idJazida</label><br>
                    <input type="number" name="idJazida" placeholder="Adicione o id da jazida">
                </div>
                <br>
                <div class="form-group">
                    <label>Usar foto como capa?</label><br>
                    <input type="radio" name="capa" value="1" id="capaSim">
                    <label for="capaSim">Sim</label><br>
                    <input type="radio" name="capa" value="0" id="capaNao" checked>
                    <label for="capaNao">Não</label>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </x-slot>
</x-app-layout>
