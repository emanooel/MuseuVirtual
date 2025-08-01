<header>
    <nav class="bg-[#F1EEDD]  font-bold w-full">
        <ul class="flex justify-center font-[arial] pt-3 pb-3">
            <li><a href="{{route('home')}}" class="p-5 pr-40 text-[#565851]">Museu Virtual ES</a></li>
            <li><a href="{{route('site.jazidas')}}" class="p-5 text-[#565851]">JAZIDAS</a></li>
            <li><a href="{{route('site.rochas')}}" class="p-5 text-[#565851]">ROCHAS</a></li>
            <li><a href="{{route('site.minerais')}}" class="p-5 pr-40 text-[#565851] ">MINERAIS</a></li>
            <li><a href="{{route('register')}}" class="p-2 pl-5 pr-5 rounded-full bg-[#ACB18E] mr-5 text-[#F1EEDD] bg-[#ACB18E] hover:bg-[#A39D8C]">CADASTRAR</a></li>
            <li><a href="{{route('dashboardPublica')}}" class="p-2 pl-5 pr-5 rounded-full bg-[#ACB18E] text-[#F1EEDD] bg-[#ACB18E] hover:bg-[#A39D8C]">LOGIN</a></li>
        </ul>
    </nav>
</header>

<script>
    const btnMobile = document.getElementById('btn-mobile');

    function toggleMenu(event) {
        if (event.type === 'touchstart') event.preventDefault();
        const nav = document.getElementById('nav');
        nav.classList.toggle('active');
        const active = nav.classList.contains('active');
        event.currentTarget.setAttribute('aria-expanded', active);
        if (active) {
            event.currentTarget.setAttribute('aria-label', 'Fechar menu');
        } else {
            event.currentTarget.setAttribute('aria-label', 'Abrir menu');
        }
    }

    btnMobile.addEventListener('click', toggleMenu);
    btnMobile.addEventListener('touchstart', toggleMenu);
</script>
