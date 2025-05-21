<x-app-layout>
    {{-- Cabeçalho da página --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ __('Editar Mineral') }}</h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <!-- Formulário para atualizar dados do mineral -->
                    <form action="{{ route('minerais.update', $mineral->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <label for="nome" class="block mt-1 w-full">Nome</label>
                            <input type="text" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
                                   focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 
                                   rounded-md shadow-sm" id="nome" name="nome" value="{{ $mineral->nome }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="descricao" class="block mt-1 w-full">Descrição</label>
                            <textarea class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
                                      focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 
                                      rounded-md shadow-sm" id="descricao" name="descricao" rows="4" required>{{ $mineral->descricao }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="propriedades" class="form-label">Propriedades</label>
                            <textarea class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
                                      focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 
                                      rounded-md shadow-sm" id="propriedades" name="propriedades" rows="4">{{ $mineral->propriedades }}</textarea>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button type="submit" class="btn btn-primary">Salvar Alterações</x-primary-button>
                        </div>
                    </form>
                    
                    <br>

                    <div class="flex flex-wrap justify-center border-gray-300 dark:border-gray-700 
                                dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm p-4">
                        <h2 class="self-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Fotos do Mineral') }}
                        </h2>
                    </div>

                    <div class="flex flex-wrap border-gray-300 dark:border-gray-700 
                                dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm p-4">
                        @if ($mineral->fotos->isEmpty())
                            <p>Não existem imagens cadastradas para este mineral</p>
                        @else
                            @php
                                $fotos = $mineral->fotos;
                            @endphp
                            @foreach ($fotos as $foto)
                                <div class="flex flex-col h-[212px] w-[160px] items-center justify-between p-2 m-2 border rounded-md 
                                            dark:border-gray-700 dark:bg-gray-900">
                                    <img src="{{ asset('storage/' . $foto->caminho) }}" alt="Foto do mineral" 
                                         class="h-[144px] w-[128px] object-cover mb-2">
                                    
                                    <div class="flex gap-2">
                                        <!-- Editar a imagem -->
                                        
                                        <!-- Apagar a imagem -->
                                        <form action="{{ route('fotos-destroy', $foto->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta foto?');" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center px-2 py-1 text-sm text-red-600 dark:text-red-400 hover:underline">Excluir</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>