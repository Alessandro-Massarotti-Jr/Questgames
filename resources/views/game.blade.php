@extends('layouts.main')

@section('title', 'QuestGames')

@section('content')

    <link rel="stylesheet" href="/css/game.css">

    <div class="banner">
        <img class="img" src="/img/Test1.png" alt="">
    </div>


    <div class="line1">
        <h1 class="gamename">pagina do Jogo</h1>

        <a href="" class="btncompra">Comprar R$ 15,00</a>
    </div>


    <div class="line2">
        <div class="gamedescription">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec est nisl, commodo eget scelerisque non, luctus et dolor. In aliquam est id orci hendrerit, imperdiet interdum lacus varius. Etiam in pulvinar purus, sit amet vestibulum ligula. Quisque gravida mattis aliquet. Sed blandit lacus erat, at scelerisque orci faucibus nec. Nulla vitae est eget justo dapibus efficitur vitae vitae dui. Cras cursus quam ut euismod rutrum. Nam nec sem tellus. Ut aliquam ipsum orci, ac imperdiet mi accumsan nec. Pellentesque in urna in felis porttitor maximus. In enim dolor, sagittis at commodo eget, euismod a sapien. Nunc aliquet vestibulum est, ac luctus lacus imperdiet sed. Vivamus vel congue neque.</p>
        </div>
        <div class="gameimages">
            <img src="/img/Test1.png" alt="">
            <img src="/img/Test2.png" alt="">
            <img src="/img/Test3.png" alt="">
        </div>
    </div>

@endsection
