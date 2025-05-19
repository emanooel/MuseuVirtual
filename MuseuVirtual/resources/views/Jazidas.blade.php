<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jazidas</title>
       <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
</head>

<body class="bg-[#363C27]">
    <x-menu_site/>
    
    <h1 class="font-[Arial] text-[50px] ms-80 text-[#F1EEDD] pb-6 pt-16"><strong>Jazidas</strong></h1>
    <div class="px-80">
        <img class= "pb-40 w-full object-cover" src="/assets/img/image 2.png" alt="Foto da jazida tal">
    </div>

    <div class="grid grid-cols-2 gap-8 ">
        <figure class="pl-80 w-full">
            <img class="object-cover" src="/assets/img/image.png" alt="Imagem da jazida tal">
            <figcaption>
                <h2 class="font-[Arial] text-[30px] text-[#F1EEDD]"><strong>Jazida tal</h2>
                <h3 class="font-[Arial] text-[20px] text-[#F1EEDD]">Fica em tal lugar</strong></h3>
            </figcaption>
        </figure>
        <figure class= "pb-20 w-full ">
            <img class="object-cover" src="/assets/img/image.png" alt="Imagem da jazida tal">
            <figcaption>
                <h2 class="font-[Arial] text-[30px] text-[#F1EEDD]"><strong>Jazida tal</h2>
                <h3 class="font-[Arial] text-[20px] text-[#F1EEDD]">Fica em tal lugar</strong></h3>
            </figcaption>
        </figure>
    </div>

    <figure class="pl-80 pb-20 w-[82%]">
            <img src="/assets/img/image (1).png" alt="Imagem da jazida tal">
            <figcaption>
                <h2 class="font-[Arial] text-[30px] text-[#F1EEDD]"><strong>Jazida tal</h2>
                <h3 class="font-[Arial] text-[20px] text-[#F1EEDD]">Fica em tal lugar</strong></h3>
            </figcaption>
        </figure>
    
    <div class="grid grid-cols-2 gap-8">
        <figure class="pl-80 ">
            <img src="/assets/img/image.png" alt="Imagem da jazida tal">
            <figcaption>
                <h2 class="font-[Arial] text-[30px] text-[#F1EEDD]"><strong>Jazida tal</h2>
                <h3 class="font-[Arial] text-[20px] text-[#F1EEDD]">Fica em tal lugar</strong></h3>
            </figcaption>
        </figure>
        <figure class="pl-2 pb-40">
            <img src="/assets/img/image.png" alt="Imagem da jazida tal">
            <figcaption>
                <h2 class="font-[Arial] text-[30px] text-[#F1EEDD]"><strong>Jazida tal</h2>
                <h3 class="font-[Arial] text-[20px] text-[#F1EEDD]">Fica em tal lugar</strong></h3>
            </figcaption>
        </figure>
    </div>

    
    <div style="text-align: center;">
        <footer>
        <h3>Entre com sua conta no Museu Virtual</h3>
        <form class="formulario" action="" action="get">
            <input type="text" id="login" name="login" placeholder="Login">
            <br>
            <input type="text" id="Senha" name="Senha" placeholder="Senha">
            <br>
            <input type="button" value="Entrar">
            <br>
            <a href="">Ainda não se cadastrou? Cadastre-se aqui</a>
        </form>
        <img class="imagem_final" src="" alt="">
        <img class="imagem_final" src="" alt="">
    </footer>
    </div>
    
</body>

</html>