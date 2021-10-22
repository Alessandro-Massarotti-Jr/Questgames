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
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>Francisco Chang</td>
                <td>Mexico</td>
            </tr>
        </table>
        <div id="div_cadastro_games" class="div_cadastro_games">
            <p class="txt_format">Nome:</p>
            <input type="text" id="inpt_txt_nome" class="inpt_txt" style="top: 22%; left: 3%">
            <p class="txt_format">Preço:</p>
            <input type="text" id="inpt_txt_preco" class="inpt_txt" style="top: 43%; left: 3%">
            <p class="txt_format">Descrição:</p>
            <input type="text" id="inpt_txt_descr" class="inpt_txt" style="top: 64%; left: 3%">
            <p class="txt_format">Desenvolvedor:</p>
            <input type="text" id="inpt_txt_desenvol" class="inpt_txt" style="top: 85%; left: 3%">
            <p style="position: absolute; top: 17%; left: 31%; color: white">Imagem:</p>
            <input type="file" name="" id="file_img" class="file_img" style="top: 21%; left: 31%">
        </div>

    </div>
    <div class="div_rect_esquerda">
        <section class="sec_all_bt">
        <p class="txt_all">Configurações</p>
        <div class="div_table_bt">
            <button class="bt_all" id="bt_games" onclick="MostrarTabela()" style="top: 50px; left: 20px">> Games</button>
        </div>
        <div class="div_bt_cadastrar">
            <button class="bt_all" id="bt_cadastrar" onclick="Cadastrar()" style="top: 90px; left: 60px">Cadastrar</button>
        </div>
        <button class="bt_all" id="bt_alterar" onclick="Alterar()" style="top: 130px; left: 45px">Alterar</button>
        <button class="bt_all" id="bt_excluir" onclick="Excluir()" style="top: 168px; left: 44px">Excluir</button>
    </section>
    </div>

    <script type="text/javascript">
        //GAMES_MOSTRAR
        var x = document.getElementById('tb_games');
        x.style.visibility = 'visible';

        function MostrarTabela() {
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
        //GAMES_CADASTRAR
        var x = document.getElementById('div_cadastro_games');
        x.style.visibility = 'visible';

        function Cadastrar() {
            var x = document.getElementById('div_cadastro_games');
            if (x.style.visibility === 'visible') {
                x.style.visibility = 'hidden';
            } else {
                x.style.visibility = 'visible';
            }
        }
        if (x.style.visibility === 'visible') {

            let el = document.getElementById('bt_cadastrar');
            x.style.visibility = 'hidden';
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