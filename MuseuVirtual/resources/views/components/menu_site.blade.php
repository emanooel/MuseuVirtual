<header class="w-full bg-black text-white">
    <nav class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex flex-col lg:flex-row justify-between items-center gap-4">
            <!-- Botão Mobile -->
            <button aria-label="Abrir menu" id="btn-mobile" aria-controls="menu" aria-haspopup="true" aria-expanded="false"
                class="lg:hidden text-white p-2 focus:outline-none focus:ring-2 focus:ring-white">
                Menu
                <span class="block w-6 h-0.5 bg-white my-1"></span>
                <span class="block w-6 h-0.5 bg-white my-1"></span>
                <span class="block w-6 h-0.5 bg-white my-1"></span>
            </button>

            <!-- Menu Desktop -->
            <ul id="menu" role="menu" class="hidden lg:flex flex-grow justify-start font-[arial] font-bold space-x-8 text-lg">
                <li><a href="{{ route('home') }}" class="p-3 text-white !text-white hover:text-white {{ request()->routeIs('home') ? 'border-b-2 border-white' : '' }}">Museu Virtual ES</a></li>
                <li><a href="{{ route('site.jazidas') }}" class="p-3 text-white !text-white hover:text-white {{ request()->routeIs('site.jazidas', 'site.jazidas.show') ? 'border-b-2 border-white' : '' }}">Jazidas</a></li>
                <li><a href="{{ route('site.rochas') }}" class="p-3 text-white !text-white hover:text-white {{ request()->routeIs('site.rochas', 'site.rochas.show', 'site.rochas.tipo') ? 'border-b-2 border-white' : '' }}">Rochas</a></li>
                <li><a href="{{ route('site.minerais') }}" class="p-3 text-white !text-white hover:text-white {{ request()->routeIs('site.minerais', 'site.minerais.show', 'site.minerais.tipo') ? 'border-b-2 border-white' : '' }}">Minerais</a></li>
            </ul>

            <!-- Formulário de Busca -->
            <form action="{{ route('busca') }}" method="GET" class="flex items-center space-x-2 w-full lg:w-auto">
                <input type="text" name="q" placeholder="Buscar..." value="{{ $termo ?? '' }}"
                    class="opacity-70 w-full lg:w-64 px-4 py-2 rounded-full text-black focus:outline-none focus:ring-2 focus:ring-white"
                >
                <button type="submit"
                    class="bg-white text-black font-semibold px-4 py-2 rounded-full hover:bg-gray-200 transition opacity-80">
                    Buscar
                </button>
            </form>
        </div>
    </nav>
    <hr>
</header>
