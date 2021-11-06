@extends('layouts.main')

@section('title', 'QuestGames')

@section('content')

    <link rel="stylesheet" href="/css/game.css">

    <div class="banner">
        <img class="img" src="/img/Test1.png" alt="">
    </div>


    <div class="line1">
        <h1 class="gamename">The last human</h1>

        <a href="" class="btncompra">Comprar R$ 15,00</a>
    </div>


    <div class="line2">
        <div class="gamedescription">
            <p> The last human- é uma ação-aventura 2D de estilo retro, com uma perspectiva side-scroller como Castlevania, Shinobi, etc, com elementos de RPG de jogos como; Final Fantasy, Secret of Mana e muitos outros grandes títulos, combinando o antigo estilo de jogo com a nova mecânica.</p>
        </div>
        <div class="gameimages">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec est nisl,
            <img src="/img/Test1.png" alt="">
            <img src="/img/Test2.png" alt="">
            <img src="/img/Test3.png" alt="">
        </div>
    </div>

@endsection
