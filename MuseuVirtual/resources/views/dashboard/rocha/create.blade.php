<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Stones List') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <form method="POST" action="{{ route('Rocha.store') }}">
                            @csrf

                            <div>
                                <x-input-label for="nome" :value="__('Nome')" />
                                <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" required autofocus autocomplete="nome" />
                            </div>
                            
                            <div>
                                <x-input-label for="descricao" :value="__('Descrição')" />
                                <x-text-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" required autocomplete="descricao" />
                            </div>
                            
                            <div>
                                <x-input-label for="composicao" :value="__('Composição')" />
                                <x-text-input id="composicao" class="block mt-1 w-full" type="text" name="composicao" required autocomplete="composicao" />
                            </div>

                            <x-primary-button class="ms-3">
                                {{ __('Criar Rocha') }}
                            </x-primary-button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>