<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!--fonte do google-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!--css do bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!--css do app-->
    <link rel="stylesheet" href="/css/styles.css">
    {{-- java script --}}
    <script src="/js/scripts.js"></script>
</head>

<body>
    <header style="display: flex;">
        {{-- dentro da sidebar --}}
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                <ion-icon name="menu-outline"></ion-icon>
            </a>

            <a href="/">
                <ion-icon class="icons" name="bag-add-outline"></ion-icon>Loja
            </a>
            {{-- <a href="/">
                <ion-icon class="icons" name="cart-outline"></ion-icon>Carrinho (Alfa)
            </a> --}}
            <a href="/">
                <ion-icon class="icons" name="pricetag-outline"></ion-icon>Categorias
            </a>
           
            {{-- <a href="/">
                <ion-icon class="icons" name="settings-outline"></ion-icon>Configurações
            </a> --}}



            @guest
                <a href="/login">
                    <ion-icon class="icons" name="log-in-outline"></ion-icon>Login
                </a>
                <a href="/register">
                    <ion-icon class="icons" name="person-add-outline"></ion-icon>cadastro
                </a>
            @endguest

            @auth
            <a href="/biblioteca">
                <ion-icon class="icons" name="library-outline"></ion-icon>Biblioteca
            </a>
                <a href="/dashboard"> <ion-icon class="icons" name="person-outline"></ion-icon> Perfil</a>
                <form action="logout" method="POST">
                    @csrf
                    <a href="/logout" onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <ion-icon class="icons" name="arrow-redo-outline"></ion-icon>
                        Logout
                    </a>
                </form>
            @endauth
        </div>
        {{-- Fim dentro da side bar --}}

        {{-- fora da side bar e no header --}}
        <!-- Abre a side bar -->
        <h1 class="openbtn" onclick="openNav()">
            <ion-icon name="menu-outline"></ion-icon>
        </h1>

        <img src="/img/logo.png" alt="" class="logo">

    </header>

    <div id="main">
        @yield('content')
        <div class="footerlinks">
            <div class="footerlinkscolumn">
                <h1>LINKS</h1>
                <a href="/">Perguntas frequentes</a>
                <a href="/">Entre em contato</a>
                <a href="/">Termos de uso</a>
            </div>
            <div class="footerlinkscolumn">
                <h1>SIGA-NOS</h1>
                <a href="/"><ion-icon class="icons" name="logo-discord"></ion-icon>Discord</a>
                <a href="/"><ion-icon class="icons" name="logo-twitter"></ion-icon>Twitter</a>
                <a href="/"><ion-icon class="icons" name="logo-facebook"></ion-icon>Facebook</a>
            </div>
            <div class="footerlinkscolumn">
                <h1>PRIVACIDADE</h1>
                <a href="/">Politicas</a>
            </div>
    </div>



    <footer>
        

        </div>
        <div class="footer">
            <p>QuestGames &copy; 2021</p>
        </div>
    </footer>

    <!--Ion icons - icones-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
