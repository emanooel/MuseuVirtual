<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Foto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="max-w-xl w-full p-6 bg-white rounded-xl shadow-md">
        <h1 class="text-2xl font-semibold mb-6 text-center">Editar uma foto</h1>
        <form action="{{ route('fotos-update', ['id' => $fotos->id]) }}" method="post" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Foto</label>
                <input type="file" name="foto" id="foto" class="w-full file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>

            <div>
                <label for="idRocha" class="block text-sm font-medium text-gray-700 mb-1">ID da Rocha</label>
                <input type="number" name="idRocha" id="idRocha" value="{{ $fotos->idRocha }}" placeholder="Adicione o ID da Rocha" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="idMineral" class="block text-sm font-medium text-gray-700 mb-1">ID do Mineral</label>
                <input type="number" name="idMineral" id="idMineral" value="{{ $fotos->idMineral }}" placeholder="Adicione o ID do mineral" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="idJazida" class="block text-sm font-medium text-gray-700 mb-1">ID da Jazida</label>
                <input type="number" name="idJazida" id="idJazida" value="{{ $fotos->idJazida }}" placeholder="Adicione o ID da jazida" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Usar foto como capa?</label>
                <div class="flex items-center space-x-4">
                    <label class="flex items-center">
                        <input type="radio" name="capa" value="1" id="capaSim" {{ $fotos->capa == 1 ? 'checked' : '' }} class="text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-700">Sim</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="capa" value="0" id="capaNao" {{ $fotos->capa == 0 ? 'checked' : '' }} class="text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-700">Não</span>
                    </label>
                </div>
            </div>

            <div>
                <input type="submit" name="submit" value="Atualizar" class="w-full py-2 px-4 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700 transition duration-200">
            </div>
        </form>
    </div>
