<header class="w-full bg-black text-white">
  <nav class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center relative">
    
    <img src="/assets/img/logo_sem_estado.png" alt="Museu Virtual ES Logo" class="h-11 pl-16 opacity-65">

    <!-- Menu desktop -->
    <ul class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2 space-x-12 font-semibold text-lg">
      <li><a href="{{ route('home') }}" class="p-2 hover:underline {{ request()->routeIs('home')?'underline':'' }}">Home</a></li>
      <li><a href="{{ route('site.jazidas') }}" class="p-2 hover:underline {{ request()->routeIs('site.jazidas','site.jazidas.show')?'underline':'' }}">Jazidas</a></li>
      <li><a href="{{ route('site.rochas') }}" class="p-2 hover:underline {{ request()->routeIs('site.rochas','site.rochas.show','site.rochas.tipo')?'underline':'' }}">Rochas</a></li>
      <li><a href="{{ route('site.minerais') }}" class="p-2 hover:underline {{ request()->routeIs('site.minerais','site.minerais.show','site.minerais.tipo')?'underline':'' }}">Minerais</a></li>
    </ul>

    <form action="{{ route('busca') }}" method="GET" class="hidden lg:flex items-center ml-auto">
      <input type="text" name="q" placeholder="Buscar..." value="{{ $termo ?? '' }}" 
             class="opacity-80 w-64 px-3 py-2 rounded-full text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white">
      <button type="submit" class="opacity-90 bg-white text-black px-4 py-2 rounded-full hover:bg-gray-200 transition">
        Buscar
      </button>
    </form>
    
    <!-- Botão mobile -->
    <button id="btn-mobile" class="lg:hidden flex flex-col justify-center items-center gap-1 p-2 focus:outline-none focus:ring-2 focus:ring-white z-10" aria-label="Abrir menu">
      <span class="block w-6 h-0.5 bg-white transition-transform duration-300 ease-in-out"></span>
      <span class="block w-6 h-0.5 bg-white transition-opacity duration-300 ease-in-out"></span>
      <span class="block w-6 h-0.5 bg-white transition-transform duration-300 ease-in-out"></span>
    </button>
  </nav>

  <hr class="border-white">

  <!-- Menu mobile moderno (deslizando do topo) -->
  <div id="mobile-menu" class="lg:hidden fixed top-0 left-0 w-full bg-black bg-opacity-95 transform -translate-y-full transition-transform duration-300 ease-out z-50 p-6 space-y-4">
    <a href="{{ route('home') }}" class="block text-white text-center hover:underline">Home</a>
    <a href="{{ route('site.jazidas') }}" class="block text-white text-center hover:underline">Jazidas</a>
    <a href="{{ route('site.rochas') }}" class="block text-white text-center hover:underline">Rochas</a>
    <a href="{{ route('site.minerais') }}" class="block text-white text-center hover:underline">Minerais</a>

    <form action="{{ route('busca') }}" method="GET" class="flex mt-2">
      <input type="text" name="q" placeholder="Buscar..." class="flex-grow px-3 py-2 opacity-80 rounded-full text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white">
      <button type="submit" class="bg-white text-black px-4 py-2 rounded-full opacity-90 hover:bg-gray-200 transition">Buscar</button>
    </form>
  </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const btnMobile = document.getElementById('btn-mobile');
  const mobileMenu = document.getElementById('mobile-menu');

  if (!btnMobile || !mobileMenu) return;

  btnMobile.addEventListener('click', () => {
    // Alterna entre o menu oculto e visível deslizando do topo
    if (mobileMenu.classList.contains('-translate-y-full')) {
      mobileMenu.classList.remove('-translate-y-full');
      mobileMenu.classList.add('translate-y-0');
    } else {
      mobileMenu.classList.remove('translate-y-0');
      mobileMenu.classList.add('-translate-y-full');
    }

    // Animação do botão hambúrguer
    const spans = btnMobile.querySelectorAll('span');
    spans[0].classList.toggle('rotate-45');
    spans[0].classList.toggle('translate-y-1.5');
    spans[1].classList.toggle('opacity-0');
    spans[2].classList.toggle('-rotate-45');
    spans[2].classList.toggle('-translate-y-1.5');
  });
});
</script>
