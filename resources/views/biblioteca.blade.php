@extends('layouts.main')
@section('title', 'biblioteca')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="css/biblio.css">
</head>
<body>
<div class="div_biblio_geral">
<div class="div_cima_jg">
     <input type="text" placeholder="Procurar">
     <ion-icon class="icone" name="search-outline"></ion-icon>
</div>
<div class="div_games_recent">
    <div class="div_recent">
        <p class="txt_color p_recent">Jogados Recentemente</p>
    </div>
    <div class="div_jogo">
        <img class="img_jogo" src="img/Test4.png" alt="">
        <p class="txt_color p_titulo_game">Hellen Action Shooter</p>
       <a class="a_baixar" href="Download">Download</a>
    </div>
</div>

<div class="div_games_all">
    <div class="div_all">
        <p class="txt_color p_all">Todos os jogos</p>
    </div>
    <div class="div_jogo">
        <img class="img_jogo" src="img/Test4.png" alt="">
        <p class="txt_color p_titulo_game">Hellen Action Shooter</p>
       <a class="a_baixar" href="Download">Download</a>
    </div>
</div>
</div>
</body>
</html>
@endsection
