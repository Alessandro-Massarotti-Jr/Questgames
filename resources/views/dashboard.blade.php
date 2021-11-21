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
                   <p class="nome_color">Smzinho</p>

                   <p class="descricao_color">Corno azul, ladrão, vendedor de cachorro</p>
                    <a href="/" class="botao">Editar Perfil</a>
                </div>
            </div>
            <div><p class="publicacao">publicações</p></div>
            <div class="print">
                
                <img class="gif1" src="../img/smzinho.png" alt="">
                <img class="gif1" src="../img/smzinho.png" alt="">
            </div>
            <div class="print1">
                <img class="gif2" src="../img/smzinho.png" alt="">
                <img class="gif2" src="../img/smzinho.png" alt="">
            </div>
        </div>

    </body>
@endsection
