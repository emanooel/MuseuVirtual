<x-app-layout>
    <x-slot name="slot">
        <div class="py-12 bg-[#67697C] aspect-[10/4.25]">
            <div class="flex justify-between items-stretch h-full dark:bg-black shadow-sm rounded-3xl overflow-hidden">
                
                <div class="p-6 bg-[#253D5B] w-[15%] rounded-3xl text-white">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('hello') }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                        </a>
                    </div>
                </div>


                <div class="p-6 bg-[#253D5B] w-[56%] flex flex-col justify-center items-center rounded-3xl text-white mx-auto">
                    @if (!empty($nome) && !empty($msc) && !empty($img))
                        <img src="{{ asset('img/musicasimg/' . $img) }}" alt="Capa da música" class="rounded-3xl shadow-lg w-[25%]">
                        <br>
                        {{$nome}}
                        <br>
                        <br>
                            <audio controls>
                                <source src="{{ asset('img/musicas/' . $msc) }}" type="audio/mp3">
                            </audio>
                    @endif
                </div>


                <div class="p-6 bg-[#253D5B] w-[25%] shadow-lg items-center rounded-3xl text-white whitespace-pre-line">
                    @if (!empty($info))
                        {{ $info }}
                    @else
                    {{__('Sem informações da música')}}

                    @endif
                </div>

            </div>
        </div>
    </x-slot>
</x-app-layout>
