<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin zone') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="py-12">
            <div class="flex bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg"> <!-- Removido overflow-hidden -->
                
                <div class="p-6 w-[15%] text-gray-900 dark:text-gray-100">
                    a
                </div>
                
                
                <div class="p-6 flex-grow flex justify-center items-center border border-gray-300 box-border text-gray-900 dark:text-gray-100">
                @if (!empty($nome) && !empty($msc) && !empty($img))
                    <img 
                        src="{{ asset('img/musicasimg/' . $img . '.jpg') }}" 
                        alt="Capa do música"
                        class="w-1/2 rounded-lg shadow-lg"
                    >

                    <audio controls>
                        <source src="{{ asset('img/musicas/' . $msc . '.mp3') }}" type="audio/mp3">
                    </audio>
                @endif
                </div>


                <div class="p-6 w-[25%] text-gray-900 dark:text-gray-100 whitespace-pre-line">
                    c
                    @if (!empty($info))
                        {{ $info }}
                    @endif
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
