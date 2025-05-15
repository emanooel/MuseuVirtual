<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastro de Fotos') }}
            </h2>
            <a href="{{ route('fotos-create') }}"
            class="mt-4 md:mt-0 inline-block px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">Adicionar
            Foto</a>
        </div>
    </x-slot>
    <div class="flex justify-center mt-5"> 
        <div class="max-w-xl w-full p-6 bg-white rounded-xl shadow-md">
            <h1 class="text-2xl font-semibold mb-6 text-center">Adicione uma nova foto</h1>
            <form action="{{ route('fotos-store') }}" method="post" enctype="multipart/form-data" class="space-y-5">
                @csrf
    
                <div>
                    <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Foto</label>
                    <input type="file" name="foto" id="foto" class="w-full file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>
    
                <div>
                    <label for="idRocha" class="block text-sm font-medium text-gray-700 mb-1">ID da Rocha</label>
                    <select name="idRocha" id="idRocha" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Selecione uma Rocha</option>
                        @foreach ($rochas as $rocha)
                            <option value="{{$rocha->id}}">{{$rocha->nome}}</option>
                        @endforeach
                    </select>
                </div>
    
                <div>
                    <label for="idMineral" class="block text-sm font-medium text-gray-700 mb-1">ID do Mineral</label>
                    <select name="idMineral" id="idMineral" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Selecione um Mineral</option>
                        @foreach ($minerais as $mineral)
                            <option value="{{$mineral->id}}">{{$mineral->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="idJazida" class="block text-sm font-medium text-gray-700 mb-1">ID da Jazida</label>
                    <select name="idJazida" id="idJazida" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Selecione uma Jazida</option>
                        @foreach ($jazidas as $jazida)
                            <option value="{{$jazida->id}}">{{$jazida->localizacao}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Usar foto como capa?</label>
                    <div class="flex items-center space-x-4">
                        <label class="flex items-center">
                            <input type="radio" name="capa" value="1" id="capaSim" class="text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-700">Sim</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="capa" value="0" id="capaNao" checked class="text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-700">Não</span>
                        </label>
                    </div>
                </div>
                <div>
                    <input type="submit" name="submit" value="Enviar" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition duration-200">
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
