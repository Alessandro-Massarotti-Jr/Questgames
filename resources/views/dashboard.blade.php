@extends('layouts.main')
@section('title', 'perfil')

@section('content')


    <link rel="stylesheet" href="/css/perfil.css">



    <div class="geral">
        <div class="perfil">
            <div><img class="foto" src="../img/default.png" alt=""></div>
            <div class="conteudo">
                <p class="nome_color">Defaultplayer001</p>

                <p class="descricao_color">Default desc</p>
                
                <a href="/edit" class="botao">Editar Perfil</a>
              
            </div>
        </div>
        <div>
            <p class="publicacao">Publicações</p>
        </div>

        <div class="print-sec">
            <div class="print">
               <div class="print-img"><img src="/img/default_publi.png" alt=""></div>
               <div class="print-img"><img src="/img/default_publi.png" alt=""></div>
               
            </div>
            <div class="print">
                <div class="print-img"><img src="/img/default_publi.png" alt=""></div>
                <div class="print-img"><img src="/img/default_publi.png" alt=""></div>
            </div>
        </div>
    </div>



@endsection
