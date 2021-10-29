<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>
    <link rel="stylesheet" href="css/adm.css">
</head>

<body>
    <div class="div_rect_cima">
        <img class="logo" src="img/logo.png" alt="">
    </div>
    <div class="div_rect_meio">
<!-- PARTE TELINHA SIMULAÇÃO   -->
    <div class="div_simupag">
       <div class="div_imgfundo">
        <img id="img_fundo" src="/img/imgadm.png">
        <p id="p_titulo">Titulo do jogo</p>
        <div class="div_rect_compra">
            <p id="p_preco2">R$00,00</p>
        </div>
       <div class="div_rect_desc">
        <p id="p_desc2">Digite uma descrição aqui :)</p>
       </div>
       <div class="div_3img">
        <img id="img_print1" src="/img/imgadm.png">
        <img id="img_print2" src="/img/imgadm.png">
        <img id="img_print3" src="/img/imgadm.png">
       </div>
       </div>
    </div>

    <div class="div_simuloja">
        <h1 id="h1_titulo">Titulo do jogo</h1>
        <img id="img_fundo2" src="/img/imgadm.png">
        <p id="p_preco3">R$00,00</p>
    </div>




        <table id="tb_games">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Desenvolvedor</th>
            </tr>
            <tr>
                <td>-1</td>
                <td>Teste</td>
                <td>-200,00</td>
                <td>gge retsae</td>
                <td>Alguem</td>
            </tr>
        </table>
        <div id="div_cadastro_games" class="div_cadastro_games">
            <div class="div_txt">
            <p class="txt_format"style="top: 0%; left: 3%">Nome:</p>
            <input type="text" id="inpt_txt_nome" class="inpt_txt" style="top: 4%; left: 3%">
            <p class="txt_format" style="top: 8%; left: 3%">Preço:</p>
            <input type="text" id="inpt_txt_preco" class="inpt_txt" style="top: 16.7%; left: 3%">
            <p class="txt_format" style="top: 16.6%; left: 3%">Descrição:</p>
            <input type="text" id="inpt_txt_descr" class="inpt_txt" style="top: 29%; left: 3%">
            <p class="txt_format" style="top: 24%; left: 3%">Desenvolvedor:</p>
            <input type="text" id="inpt_txt_desenvol" class="inpt_txt" style="top: 41%; left: 3%">
            <p style="position: absolute; top: 54.5%; left: 3%; color: white">Fundo pag/loja:</p>
        <input type="file" name="" id="file_img_fundo" class="file_img" style="top: 58.8%; left: 3%">
        <p style="position: absolute; top: 63.5%; left: 3%; color: white">Print 1:</p>
        <input type="file" name="" id="file_img_print1" class="file_img" style="top: 68%; left: 3%">
        <p style="position: absolute; top: 73%; left: 3%; color: white">Print 2:</p>
        <input type="file" name="" id="file_img_print2" class="file_img" style="top: 77%; left: 3%">
        <p style="position: absolute; top: 81.3%; left: 3%; color: white">Print 3:</p>
        <input type="file" name="" id="file_img_print3" class="file_img" style="top: 85.5%; left: 3%">
        <button  id="bt_salvar">Salvar</button>
        <button id="bt_testar" onclick="escrever(this);">Testar</button>
        </div>
        </div>
    </div>
    <div class="div_rect_esquerda">
        <div class="div_all_bt">
        <p class="txt_all">Configurações</p>
        <div class="div_table_bt">
            <button class="bt_all" id="bt_games" onclick="MostrarTabela()" style="top: 50px">> Games <</button>
        </div>
        <div class="div_bt_cadastrar">
            <button class="bt_all" id="bt_cadastrar" onclick="Cadastrar()" style="top: 90px">CRUD</button>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        //CONFIG_GLOBAL
        var gam = document.getElementById('tb_games');
        var cada = document.getElementById('div_cadastro_games');
        gam.style.visibility = 'hidden';
       // cada.style.visibility = 'hidden';
        
        //GAMES_MOSTRAR
        function MostrarTabela() {
            
            if (gam.style.visibility === 'visible') {
                gam.style.visibility = 'hidden';
                let el = document.getElementById('bt_games');
               
            } else {
                gam.style.visibility = 'visible';
                cada.style.visibility = 'hidden';
                let el = document.getElementById('bt_games');
            }
        }
        //GAMES_CADASTRAR
        function Cadastrar() {
            if (cada.style.visibility === 'visible') {
                let el = document.getElementById('bt_cadastrar');
                cada.style.visibility = 'hidden';
                gam.style.visibility = 'hidden';
                
            } else {
                cada.style.visibility = 'visible';
                gam.style.visibility = 'hidden';
                let el = document.getElementById('bt_cadastrar');
            }
        }
  function escrever(bt_testar){
  var nome = document.getElementById("inpt_txt_nome").value;
  var preco = document.getElementById("inpt_txt_preco").value;
  var desc = document.getElementById("inpt_txt_descr").value;


  document.getElementById('p_titulo').innerHTML = nome;
  document.getElementById('h1_titulo').innerHTML = nome;
  document.getElementById('p_preco3').innerHTML = preco;
  document.getElementById('p_preco2').innerHTML = preco;
  document.getElementById('p_desc2').innerHTML = desc;


}
//IMAGEM INPUT
var uploadcapa = document.getElementById('file_img_fundo');
var uploadprint1 = document.getElementById('file_img_print1');
var uploadprint2 = document.getElementById('file_img_print2');
var uploadprint3 = document.getElementById('file_img_print3');

var imgcapa = document.getElementById('img_fundo');
var imgcapa2 = document.getElementById('img_fundo2');
var imgprint1 = document.getElementById('img_print1');
var imgprint2 = document.getElementById('img_print2');
var imgprint3 = document.getElementById('img_print3');

uploadcapa.addEventListener('change', function(e) {
    showThumbnail1(this.files);});
    function showThumbnail1(files) {
    if (files && files[0]) {
        var reader1 = new FileReader();
        var reader2 = new FileReader();
    reader1.onload = function (e) {
       imgcapa.src = e.target.result;
    }
    reader2.onload = function (e) {
       imgcapa2.src = e.target.result;
    }
    reader1.readAsDataURL(files[0]);
    reader2.readAsDataURL(files[0]);
    }
    }
  
    uploadprint1.addEventListener('change', function(e) {
    showThumbnail2(this.files);});
    function showThumbnail2(files) {
    if (files && files[0]) {
        var reader3 = new FileReader();
    reader3.onload = function (e) {
       imgprint1.src = e.target.result;
    }
    reader3.readAsDataURL(files[0]);
    }
    }

    uploadprint2.addEventListener('change', function(e) {
    showThumbnail3(this.files);});
    function showThumbnail3(files) {
    if (files && files[0]) {
        var reader4 = new FileReader();
    reader4.onload = function (e) {
       imgprint2.src = e.target.result;
    }
    reader4.readAsDataURL(files[0]);
    }
    }

    uploadprint3.addEventListener('change', function(e) {
    showThumbnail4(this.files);});
    function showThumbnail4(files) {
    if (files && files[0]) {
        var reader5 = new FileReader();
    reader5.onload = function (e) {
       imgprint3.src = e.target.result;
    }
    reader5.readAsDataURL(files[0]);
    }
    }

</script>
</body>
</html>