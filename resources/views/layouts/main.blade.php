<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--fonte do google-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!--css do bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <!--css do app-->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
              <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                   <a href="/" class="navbar-brand">
                      <img src="img/HDC_logo.svg"alt="HDC events">
                   </a>
                   <ul class="navbar-nav">
                       <li class="nav-item">
                           <a href="/" class="nav-link">Loja</a>
                       </li>
                       <li class="nav-item">
                        <a href="/" class="nav-link">Comunidade</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Perfil</a>
                    </li>  
                    <li class="nav-item">
                        <form action="logout" method="POST">
                            @csrf
                            <a href="/logout" 
                            class="nav-link" 
                            onclick="event.preventDefault();
                            this.closest('form').submit();"><ion-icon name="arrow-redo-outline"></ion-icon>
                            Logout</a>
                        </form>
                    </li>  
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">cadastro</a>
                    </li>
                    @endguest
                </ul>
                </div>
              </nav>

        </header>
        <div class="container-fluid">
            <div class="row">
              @yield('content')
            </div>
        </div>
        <footer>
            <p>QuestGames &copy; 2021</p>
        </footer>

        <!--Ion icons - icones-->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>