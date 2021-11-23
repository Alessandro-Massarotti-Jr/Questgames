@extends('layouts.main')
@section('title', 'perfil')

@section('content')


    <link rel="stylesheet" href="/css/perfil.css">



    <div class="geral">
        <div class="perfil">
            <div><img class="foto" src="../img/souls ico.jpeg" alt=""></div>
            <div class="conteudo">
                <p class="nome_color">Souls_slayer359</p>

                <p class="descricao_color">Master mode only player</p>
                <a href="/" class="botao">Editar Perfil</a>
            </div>
        </div>
        <div>
            <p class="publicacao">publicações</p>
        </div>

        <div class="print-sec">
            <div class="print">
               <div class="print-img"><img src="/img/solaire.jpeg" alt=""></div>
               <div class="print-img"><img src="/img/souls ladies.jpeg" alt=""></div>
               
            </div>
            <div class="print">
                <div class="print-img"><img src="/img/souls meme.jpeg" alt=""></div>
                <div class="print-img"><img src="/img/praise the sun.jpeg" alt=""></div>
            </div>
        </div>
    </div>



@endsection
