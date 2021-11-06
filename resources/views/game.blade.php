@extends('layouts.main')

@section('title', $game->nome)

@section('content')

    <link rel="stylesheet" href="/css/game.css">

    <div class="banner">
        <img class="img" src="/img/games/{{$game->image}}" alt="{{$game->nome}}">
    </div>


    <div class="line1">
        <h1 class="gamename">{{$game->nome}}</h1>

        <a href="" class="btncompra">Comprar R$ {{$game->preco}},00</a>
    </div>


    <div class="line2">
        <div class="gamedescription">
            <p>{{$game->description}}</p>
        </div>
        <div class="gameimages">
            <img src="/img/Test1.png" alt="{{$game->nome}}">
            <img src="/img/Test2.png" alt="{{$game->nome}}">
            <img src="/img/Test3.png" alt="{{$game->nome}}">
        </div>
    </div>

@endsection
