<header id="header">
    <nav id="nav" class="block">
        <div id="div" class="rounded-full">
            <button aria-label="Abrir menu" id="btn-mobile" aria-controls="menu" aria-haspopup="true" aria-expanded="false"
                class="hidden text-[#565851]">Menu
                <span id="hamburguer"></span>
            </button>
            <ul id="menu" role="menu" class="flex justify-center font-[arial] pt-3 pb-3 font-bold">
                <li><a href="{{ route('home') }}" class="p-5 pr-40 {{ request()->routeIs('home') ? 'active' : '' }}">Museu Virtual ES</a></li>
                <li><a href="{{ route('site.jazidas') }}" class="p-5 {{ request()->routeIs('site.jazidas', 'site.jazidas.show') ? 'active' : '' }}">Jazidas</a></li>
                <li><a href="{{ route('site.rochas') }}" class="p-5 {{ request()->routeIs('site.rochas', 'site.rochas.show', 'site.rochas.tipo') ? 'active' : '' }}">Rochas</a></li>
                <li><a href="{{ route('site.minerais') }}" class="p-5 pr-40 {{ request()->routeIs('site.minerais', 'site.minerais.show', 'site.minerais.tipo') ? 'active' : '' }}">Minerais</a></li>
            </ul>
        </div>
    </nav>
</header>


