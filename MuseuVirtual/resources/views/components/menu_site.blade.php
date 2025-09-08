<style>
    /* Navbar */
    #nav #div {
        background: #f1eedd;
    }

    /* Links da navbar */
    #menu li a {
        color: #565851;
        text-decoration: none;
        transition: color 0.3s, transform 0.3s;
    }

    /* Hover na navbar */
    #menu li a:hover {
        color: #000;       /* muda a cor da letra no hover */
        transform: scale(1.05); /* leve zoom */
    }

    /* Link ativo */
    #menu li a.active {
        color: #000;       /* link da página atual fica preto */
        font-weight: bold; /* opcional: destaca ainda mais */
    }

    @media(max-width:1600px){
        #nav {
            background: #F1EEDD;
        }
    }

    @media (max-width: 768px) {
        #btn-mobile {
            display: block;
        }

        #menu {
            display: block;
            position: absolute;
            width: 100%;
            background: #F1EEDD;
            right: 0px;
            height: 0px;
            transition: .6s;
            z-index: 1000;
            visibility: hidden;
            overflow-y: hidden;
        }

        #nav.active #menu {
            height: 100vh;
            visibility: visible;
            overflow-y: auto;
        }

        #nav #div {
            border-radius: 0;
            margin-top: 0;
        }

        #btn-mobile {
            display: flex;
            padding: .5rem 1rem;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            gap: .5rem;
        }

        #hamburguer {
            width: 20px;
            border-top: 2px solid;
            display: block;
            color: #565851;
        }

        #hamburguer::after,
        #hamburguer::before {
            content: '';
            display: block;
            width: 20px;
            height: 2px;
            background: currentColor;
            margin-top: 5px;
            transition: .3s;
            position: relative;
        }

        #nav.active #hamburguer {
            border-top-color: transparent;
        }

        #nav.active #hamburguer::before {
            transform: rotate(135deg);
        }

        #nav.active #hamburguer::after {
            transform: rotate(-135deg);
            top: -7px;
        }

        #menu #cadastro,
        #login {
            background: none;
            color: #565851;
        }

        /* Hover mobile */
        #menu li a:hover {
            color: #000;
        }
    }
</style>

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
{{-- <hr class="opacity-60 border-t-[#F1EEDD]">
</hr> --}}

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
