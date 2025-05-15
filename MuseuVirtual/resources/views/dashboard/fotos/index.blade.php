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
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Rocha</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Mineral</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Jazida</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Capa</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($fotos as $foto)
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $foto->id }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $foto->idRocha }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $foto->idMineral }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $foto->idJazida }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                    {{ $foto->capa ? 'Sim' : 'Não' }}
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-800 flex space-x-2">
                                    <a href="{{ route('fotos-edit', ['id' => $foto->id]) }}"
                                        class="text-blue-600 hover:underline">Editar</a>

                                    <form action="{{ route('fotos-destroy', ['id' => $foto->id]) }}" method="POST"
                                        onsubmit="return confirm('Tem certeza que deseja deletar?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-app-layout>
