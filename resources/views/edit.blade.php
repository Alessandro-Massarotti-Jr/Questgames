@extends('layouts.main')
@section('title', 'perfil')

@section('content')


    <link rel="stylesheet" href="/css/perfil.css">



    <div class="geral">
        <div class="perfil">
            <div><img class="foto_edit" src="../img/default.png" alt="Alterar">
                <input type="file" name="file_foto" id="file_foto">
            </div>
            <div class="conteudo">
                <input type="text" class="cx_nick" name="cx_nick">

                <textarea type="text" class="cx_desc" name="cx_nick"></textarea>
                
                <a href="" class="botao_editar">Salvar Perfil</a>
              
            </div>
        </div>
        <div>
            <p class="publicacao">Publicações</p>
        </div>

        <div class="print-sec">
            <div class="print">
               <div class="print-img"><img src="/img/default_publi.png" alt="">
                <input type="file" id="file_publi" name="filepubli1">
                </div>
               <div class="print-img"><img src="/img/default_publi.png" alt="">
                <input type="file" id="file_publi2" name="filepubli2">
            </div>
                
                </div>
            <div class="print">
                <div class="print-img"><img src="/img/default_publi.png" alt="">
                    <input type="file" id="file_publi3" name="filepubli3">
                </div>
                
                <div class="print-img"><img src="/img/default_publi.png" alt="">
                    <input type="file" id="file_publi4" name="filepubli4">
                </div>
            </div>
        </div>
    </div>


@endsection
