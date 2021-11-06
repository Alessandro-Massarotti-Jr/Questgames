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
        <p id="p_cadastro">Cadastro de Games</p>

        <div id="div_alterar">
            <p class="p_alterar">Alterar Games</p>
            <select name="ID" id="sel_alterar_id">
                <option value="ID">ID</option>
            </select>
            <input type="text" id="inpt_alt_nome" class="inpt_alt" placeholder="Nome">
            <input type="text" id="inpt_alt_preco" class="inpt_alt" placeholder="Preço">
            <input type="text" id="inpt_alt_desc" class="inpt_alt" placeholder="Descrição">
            <input type="text" id="inpt_alt_desen" class="inpt_alt" placeholder="Desenvolvedor">

            <button class="bt_alt_alterar">Alterar</button>
        </div>
        
        <div id="div_excluir">
            <p class="p_excluir">Excluir Games</p>
            @foreach($todosjogos as $game)
            <form action="/adm/{{ $game->nome }}" method="POST">
                <select name="ID" id="sel_alterar_id">
                    <option value="opt_nome">{{ $game -> nome }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" name="nome" class="bt_alt_alterar" value="Excluir">
            </form>
        </div>

        <!-- PARTE TELINHA SIMULAÇÃO   -->
        <div id="div_simupag">
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

        <div id="div_simuloja">
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
            @foreach($todosjogos as $game)
            <tr>
                <td>{{ $game -> id }}</td>
                <td>{{ $game -> nome }}</td>
                <td>{{ $game -> preco }}</td>
                <td>{{ $game -> description }}</td>
                <td>{{ $game -> desenvolvedor }}</td>
            </tr>
            @endforeach
        </table>
        
        <form action="{{route('adm/store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div id="div_cadastro_games" class="div_cadastro_games">
                <div class="div_txt">
                    <p class="txt_format txt_nome">Nome:</p>
                    <input type="text" id="inpt_txt_nome" name="inpt_txt_nome" class="inpt_txt inpt_txt_nome">
                    <p class="txt_format txt_preco">Preço:</p>
                    <input type="text" id="inpt_txt_preco" name="inpt_txt_preco" class="inpt_txt inpt_txt_preco">
                    <p class="txt_format txt_descr">Descrição:</p>
                    <input type="text" id="inpt_txt_descr" name="inpt_txt_descr" class="inpt_txt inpt_txt_descr">
                    <p class="txt_format txt_desenvol">Desenvolvedor:</p>
                    <input type="text" id="inpt_txt_desenvol" name="inpt_txt_desenvol" class="inpt_txt inpt_txt_desenvol">
                    <p class="txt_format txt_category">Categoria:</p>
                    <select class="inpt_select_category" name="inpt_select_category" id="inpt_select_category">
                        <option value="Aventura">Aventura</option>
                        <option value="Ação">Ação</option>
                        <option value="Mistério">Mistério</option>
                        <option value="Puzzle">Puzzle</option>
                    </select>
                    <p class="txt_fundo_pag">Fundo pag/loja:</p>
                    <input type="file" name="file_img_fundo" id="file_img_fundo" class="file_img file_img_fundo">
                    <p class="txt_print1">Print 1:</p>
                    <input type="file" name="" id="file_img_print1" class="file_img file_img_print1">
                    <p class="txt_print2">Print 2:</p>
                    <input type="file" name="" id="file_img_print2" class="file_img file_img_print2">
                    <p class="txt_print3">Print 3:</p>
                    <input type="file" name="" id="file_img_print3" class="file_img file_img_print3">
                    <button type="submit" id="bt_salvar">Salvar</button>
                    
        </form>
        <input type="button" value="Testar" id="bt_testar" onclick="escrever(this);">
       
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
        var simupag = document.getElementById('div_simupag');
        var simuloja = document.getElementById('div_simuloja');
        var excluir = document.getElementById('div_excluir');
        var alterar = document.getElementById('div_alterar');
        var cadastro = document.getElementById('p_cadastro');
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
                simupag.style.visibility = 'hidden';
                simuloja.style.visibility = 'hidden';
                excluir.style.visibility = 'hidden';
                alterar.style.visibility = 'hidden';
                cadastro.style.visibility = 'hidden';
               
                let el = document.getElementById('bt_games');
            }
        }
        //GAMES_CADASTRAR
        function Cadastrar() {
            if (cada.style.visibility === 'visible') {
                let el = document.getElementById('bt_cadastrar');
                cada.style.visibility = 'hidden';
                gam.style.visibility = 'hidden';
                simupag.style.visibility = 'hidden';
                simuloja.style.visibility = 'hidden';
                excluir.style.visibility = 'hidden';
                alterar.style.visibility = 'hidden';
                cadastro.style.visibility = 'hidden';

            } else {
                cada.style.visibility = 'visible';
                simupag.style.visibility = 'visible';
                simuloja.style.visibility = 'visible';
                excluir.style.visibility = 'visible';
                alterar.style.visibility = 'visible';
                cadastro.style.visibility = 'visible';
               
                gam.style.visibility = 'hidden';
                let el = document.getElementById('bt_cadastrar');
            }
        }

        function escrever(bt_testar) {
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
            showThumbnail1(this.files);
        });

        function showThumbnail1(files) {
            if (files && files[0]) {
                var reader1 = new FileReader();
                var reader2 = new FileReader();
                reader1.onload = function(e) {
                    imgcapa.src = e.target.result;
                }
                reader2.onload = function(e) {
                    imgcapa2.src = e.target.result;
                }
                reader1.readAsDataURL(files[0]);
                reader2.readAsDataURL(files[0]);
            }
        }

        uploadprint1.addEventListener('change', function(e) {
            showThumbnail2(this.files);
        });

        function showThumbnail2(files) {
            if (files && files[0]) {
                var reader3 = new FileReader();
                reader3.onload = function(e) {
                    imgprint1.src = e.target.result;
                }
                reader3.readAsDataURL(files[0]);
            }
        }

        uploadprint2.addEventListener('change', function(e) {
            showThumbnail3(this.files);
        });

        function showThumbnail3(files) {
            if (files && files[0]) {
                var reader4 = new FileReader();
                reader4.onload = function(e) {
                    imgprint2.src = e.target.result;
                }
                reader4.readAsDataURL(files[0]);
            }
        }

        uploadprint3.addEventListener('change', function(e) {
            showThumbnail4(this.files);
        });

        function showThumbnail4(files) {
            if (files && files[0]) {
                var reader5 = new FileReader();
                reader5.onload = function(e) {
                    imgprint3.src = e.target.result;
                }
                reader5.readAsDataURL(files[0]);
            }
        }
    </script>
</body>

</html>
