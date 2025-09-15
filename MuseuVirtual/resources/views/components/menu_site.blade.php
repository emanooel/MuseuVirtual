<header class="w-full bg-black text-white">
  <nav class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center relative">
    
    <img src="/assets/img/logo12.png" alt="Museu Virtual ES Logo" class="h-11">

    <ul class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2 space-x-12 font-semibold text-lg">
      <li><a href="{{ route('home') }}" class="p-2 hover:underline {{ request()->routeIs('home')?'underline':'' }}">Home</a></li>
      <li><a href="{{ route('site.jazidas') }}" class="p-2 hover:underline {{ request()->routeIs('site.jazidas','site.jazidas.show')?'underline':'' }}">Jazidas</a></li>
      <li><a href="{{ route('site.rochas') }}" class="p-2 hover:underline {{ request()->routeIs('site.rochas','site.rochas.show','site.rochas.tipo')?'underline':'' }}">Rochas</a></li>
      <li><a href="{{ route('site.minerais') }}" class="p-2 hover:underline {{ request()->routeIs('site.minerais','site.minerais.show','site.minerais.tipo')?'underline':'' }}">Minerais</a></li>
    </ul>

    <form action="{{ route('busca') }}" method="GET" class="hidden lg:flex items-center ml-auto">
      <input type="text" name="q" placeholder="Buscar..." value="{{ $termo ?? '' }}" 
             class="w-64 px-3 py-2 rounded-l-md text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white">
      <button type="submit" class="bg-white text-black px-4 py-2 rounded-r-md hover:bg-gray-200 transition">
        Buscar
      </button>
    </form>
    
    <button id="btn-mobile" class="lg:hidden flex flex-col justify-center items-center gap-1 p-2 focus:outline-none focus:ring-2 focus:ring-white z-10" aria-label="Abrir menu">
      <span class="block w-6 h-0.5 bg-white transition-transform duration-300 ease-in-out"></span>
      <span class="block w-6 h-0.5 bg-white transition-opacity duration-300 ease-in-out"></span>
      <span class="block w-6 h-0.5 bg-white transition-transform duration-300 ease-in-out"></span>
    </button>
  </nav>

  <hr class="border-white">

  <div id="mobile-menu" class="lg:hidden fixed top-16 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-95 rounded-lg shadow-lg px-6 py-8 space-y-4 max-w-xs w-11/12 scale-y-0 origin-top transition-transform duration-300 ease-out z-50">
    <a href="{{ route('home') }}" class="block text-white text-center hover:underline">Home</a>
    <a href="{{ route('site.jazidas') }}" class="block text-white text-center hover:underline">Jazidas</a>
    <a href="{{ route('site.rochas') }}" class="block text-white text-center hover:underline">Rochas</a>
    <a href="{{ route('site.minerais') }}" class="block text-white text-center hover:underline">Minerais</a>

    <form action="{{ route('busca') }}" method="GET" class="flex mt-2">
      <input type="text" name="q" placeholder="Buscar..." class="flex-grow px-3 py-2 rounded-l-md text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white">
      <button type="submit" class="bg-white text-black px-4 py-2 rounded-r-md hover:bg-gray-200 transition">Buscar</button>
    </form>
  </div>
</header>

<script>
  const btnMobile = document.getElementById('btn-mobile');
  const mobileMenu = document.getElementById('mobile-menu');

  function toggleMenu() {
    mobileMenu.classList.toggle('scale-y-0');
    mobileMenu.classList.toggle('scale-y-100');

    // Animação do ícone do botão hambúrguer
    const spans = btnMobile.querySelectorAll('span');
    spans[0].classList.toggle('rotate-45');
    spans[0].classList.toggle('translate-y-1.5');
    spans[1].classList.toggle('opacity-0');
    spans[2].classList.toggle('-rotate-45');
    spans[2].classList.toggle('-translate-y-1.5');
  }

  btnMobile.addEventListener('click', toggleMenu);
</script>