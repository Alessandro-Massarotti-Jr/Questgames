@extends('layouts.main')
@section('title', 'perfil')

@section('content')


    <link rel="stylesheet" href="/css/perfil.css">


    <form action="/edit/save" enctype="multipart/form-data" method="POST">
        @csrf
    <div class="geral">
        <div class="perfil">
            <div><img class="foto_edit" src="../img/perfil/{{$user->profile_photo_path}}" id="img_foto" alt="Alterar">
                <input type="file" onchange="loadFile1(event)" name="file_foto" value="{{$user->profile_photo_path}}" id="file_foto">
                <input type="hidden" value="{{$user->id}}"  name="id">
            </div>
            <div class="conteudo">
                <input type="text" class="cx_nick" name="cx_nick" value="{{$user->name}}">

                <textarea type="text" class="cx_desc" name="cx_desc">{{$user->user_desc}}</textarea>
                
                <button type="submit" class="botao_editar">Salvar Perfil </button>
              
            </div>
        </div>
        <div>
            <p class="publicacao">Publicações</p>
        </div>

        <div class="print-sec">
           
            <div class="print">
               <div class="print-img"><img src="/img/perfil/{{$user->post1}}" alt="" id="img_post1">
                <input type="file" id="file_publi" onchange="loadFile2(event)" value="{{$user->post1}}" name="filepubli1">
                </div>
               <div class="print-img"><img src="/img/perfil/{{$user->post2}}" alt="" id="img_post2">
                <input type="file" id="file_publi2" onchange="loadFile3(event)" value="{{$user->post2}}" name="filepubli2">
            </div>
                
                </div>
            <div class="print">
                <div class="print-img"><img src="/img/perfil/{{$user->post3}}" alt="" id="img_post3">
                    <input type="file" id="file_publi3" onchange="loadFile4(event)" value="{{$user->post3}}" name="filepubli3">
                </div>
                
                <div class="print-img"><img src="/img/perfil/{{$user->post4}}" alt="" id="img_post4">
                    <input type="file" id="file_publi4" onchange="loadFile5(event)" value="{{$user->post4}}" name="filepubli4">
                </div>
            </div>
        </div>
    </div>
</form>

<script>
 var loadFile1 = function(event) {
    var img_foto = document.getElementById('img_foto');
    img_foto.src = URL.createObjectURL(event.target.files[0]);
};

var loadFile2 = function(event) {
    var img_post1 = document.getElementById('img_post1');
    img_post1.src = URL.createObjectURL(event.target.files[0]);
};
    var loadFile3 = function(event) {
    var img_post2 = document.getElementById('img_post2');
    img_post2.src = URL.createObjectURL(event.target.files[0]);
};
    var loadFile4 = function(event) {
    var img_post3 = document.getElementById('img_post3');
    img_post3.src = URL.createObjectURL(event.target.files[0]);
};
    var loadFile5 = function(event) {
    var img_post4 = document.getElementById('img_post4');
    img_post4.src = URL.createObjectURL(event.target.files[0]);
};
</script>


@endsection
