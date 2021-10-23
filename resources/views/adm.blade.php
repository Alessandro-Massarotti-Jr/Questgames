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
            <input type="text" id="inpt_txt_nome" class="inpt_txt" style="top: 6%; left: 3%">
            <p class="txt_format" style="top: 15.7%; left: 3%">Preço:</p>
            <input type="text" id="inpt_txt_preco" class="inpt_txt" style="top: 28.3%; left: 3%">
            <p class="txt_format" style="top: 31.7%; left: 3%">Descrição:</p>
            <input type="text" id="inpt_txt_descr" class="inpt_txt" style="top: 51%; left: 3%">
            <p class="txt_format" style="top: 48%; left: 3%">Desenvolvedor:</p>
            <input type="text" id="inpt_txt_desenvol" class="inpt_txt" style="top: 73.3%; left: 3%">
            <p style="position: absolute; top: 90%; left: 3%; color: white">Imagem:</p>
        <input type="file" name="" id="file_img" class="file_img" style="top: 97%; left: 3%">
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
            <button class="bt_all" id="bt_cadastrar" onclick="Cadastrar()" style="top: 90px">Cadastrar</button>
        </div>
        <button class="bt_all" id="bt_alterar" onclick="Alterar()" style="top: 130px">Alterar</button>
        <button class="bt_all" id="bt_excluir" onclick="Excluir()" style="top: 168px">Excluir</button>
    </div>
    </div>

    <script type="text/javascript">
        //GAMES_MOSTRAR
        var gam = document.getElementById('tb_games');
        gam.style.visibility = 'visible';

        function MostrarTabela() {
            var gam = document.getElementById('tb_games');
            if (gam.style.visibility === 'visible') {
                gam.style.visibility = 'hidden';
            } else {
                gam.style.visibility = 'visible';
            }
        }

        if (gam.style.visibility === 'visible') {

            let el = document.getElementById('bt_games');
            gam.style.visibility = 'hidden';
        } else {
            let el = document.getElementById('bt_games');
            gam.style.visibility = 'visible';
        }
        //GAMES_CADASTRAR
        var x = document.getElementById('div_cadastro_games');
        x.style.visibility = 'visible';


        function Cadastrar() {
            var x = document.getElementById('div_cadastro_games');
            if (x.style.visibility === 'visible') {
                x.style.visibility = 'hidden';
                gam.style.visibility = 'hidden';
            } else {
                x.style.visibility = 'visible';
                gam.style.visibility = 'hidden';
            }
        }
        if (x.style.visibility === 'visible') {

            let el = document.getElementById('bt_cadastrar');
            x.style.visibility = 'visible';
        } else {
            let el = document.getElementById('bt_cadastrar');
            x.style.visibility = 'visible';
        }
        //GAMES_ALTERAR
        var x = document.getElementById('tb_games');
        x.style.visibility = 'visible';

        function Alterar() {
            var x = document.getElementById('tb_games');
            if (x.style.visibility === 'visible') {
                x.style.visibility = 'hidden';
            } else {
                x.style.visibility = 'visible';
            }
        }

        if (x.style.visibility === 'visible') {

            let el = document.getElementById('bt_games');
            x.style.visibility = 'hidden';
        } else {
            let el = document.getElementById('bt_games');
            x.style.visibility = 'visible';
        }
        //GAMES_EXCLUIR
        var x = document.getElementById('tb_games');
        x.style.visibility = 'visible';

        function Excluir() {
            var x = document.getElementById('tb_games');
            if (x.style.visibility === 'visible') {
                x.style.visibility = 'hidden';
            } else {
                x.style.visibility = 'visible';
            }
        }

        if (x.style.visibility === 'visible') {

            let el = document.getElementById('bt_games');
            x.style.visibility = 'hidden';
        } else {
            let el = document.getElementById('bt_games');
            x.style.visibility = 'visible';
        }
    </script>
</body>

</html>