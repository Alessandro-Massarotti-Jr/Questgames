@extends('layouts.main')
@section('title', 'perfil')

@section('content')


    <link rel="stylesheet" href="/css/perfil.css">



    <div class="geral">
        <div class="perfil">
            <div><img class="foto" src="/img/perfil/{{$user->profile_photo_path}}" alt="{{$user->name}}"></div>
            <div class="conteudo">
                <p class="nome_color">{{$user->name}}</p>

                <p class="descricao_color">{{$user->user_desc}}</p>
                
                <a href="/edit" class="botao">Editar Perfil</a>
              
            </div>
        </div>
        <div>
            <p class="publicacao">Publicações</p>
        </div>

        <div class="print-sec">
            <div class="print">
               <div class="print-img"><img src="/img/perfil/{{$user->post1}}" alt=""></div>
               <div class="print-img"><img src="/img/perfil/{{$user->post2}}" alt=""></div>
               
            </div>
            <div class="print">
                <div class="print-img"><img src="/img/perfil/{{$user->post3}}" alt=""></div>
                <div class="print-img"><img src="/img/perfil/{{$user->post4}}" alt=""></div>
            </div>
        </div>
    </div>



@endsection
