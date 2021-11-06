@extends('layouts.main')
@section('title', 'perfil')

@section('content')

    <head>
        <link rel="stylesheet" href="/css/perfil.css">
    </head>

    <body>
        <div class="geral">
            <div class="perfil">
                <div><img class="foto" src="../img/smzinho.png" alt=""></div>
                <div class="conteudo">
                <input type="text" class="text_nome" id="pname" name="nome">

                <textarea class=descricao id="story" name="descricao" rows="3" cols="33">
            </textarea>
                <button class="botao">Editar Perfil</button>
        </div>
            </div>
            <div class="print">
            <img class="gif" src="../img/smzinho.png" alt="">
            <img class="gif" src="../img/smzinho.png" alt="">
            </div>
            
        </div>

    </body>
@endsection
