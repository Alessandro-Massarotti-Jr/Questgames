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
            <a href="/">Loja</a>
            <a href="/">Carrinho</a>
            <a href="/">Categorias</a>
            <a href="/">comunidade</a>
            @guest
                <a href="/login">Login</a>
                <a href="/register">cadastro</a>
            @endguest
            @auth                
            <a href="/dashboard" class="nav-link">Perfil</a>
            <form action="logout" method="POST">
                @csrf
                <a href="/logout" class="nav-link" onclick="event.preventDefault();
                    this.closest('form').submit();">
                    <ion-icon name="arrow-redo-outline"></ion-icon>
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

        <img src="/img/QuestGames.png" alt="" class="logo">

    </header>
 
        <div id="main" class="" style="">
            @yield('content')
        </div>
   
    <footer>
        <p>QuestGames &copy; 2021</p>
    </footer>

    <!--Ion icons - icones-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
