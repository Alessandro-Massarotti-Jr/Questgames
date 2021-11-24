@extends('layouts.main')
@section('title', 'biblioteca')
@section('content')
<link rel="stylesheet" href="/css/biblio.css">



<div class="biblio-search">
    <ion-icon class="search-icon" name="search-outline"></ion-icon>
    <input type="text" placeholder="Procurar...">
</div>
    
        <div class="biblio">


            @foreach ($biblios as $biblio)
            @foreach ($games as $game)
            @if ($biblio->user_id==$user->id && $biblio->game_id==$game->id)
                
           

          
              <div class="biblio-card">
                  <div class="biblio-card-img"><img src="/img/games/{{$game->image}}" alt="{{$game->nome}}"></div>
                  <div class="biblio-card-content">
                      <h1>{{$game->nome}}</h1>
                  </div>
              </div>

              @endif
              @endforeach
              @endforeach




        </div>
            
@endsection
