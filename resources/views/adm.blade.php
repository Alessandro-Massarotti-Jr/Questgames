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
    <div class="div_dois_retangulo">
        
            <div class="div_all_bt">
                <p class="txt_all">Configurações</p>
                
            </div>
            <div class="div_rect_meio">
                <p id="p_cadastro">Cadastro de Games</p>
                <div class="div_tb_games" id="tb_games">
                    <table>
                        <div class="div_tr">
                        <tr>
                            <th class="th_td_margin">| ID |</th>
                            <th class="th_td_margin">| Nome |</th>
                            <th class="th_td_margin">| Preço |</th>
                            <th class="th_td_margin">| Descrição |</th>
                            <th class="th_td_margin">| Desenvolvedor |</th>
                        </tr>
                        </div>
                        @foreach ($todosjogos as $game)
                        <div class="div_tr">
                            <tr>
                                <td class="th_td_margin">| {{ $game->id }} |</td>
                                <td class="th_td_margin">| {{ $game->nome }} |</td>
                                <td class="th_td_margin">| {{ $game->preco }} |</td>
                                <td class="th_td_margin">| {{ $game->description }} |</td>
                                <td class="th_td_margin">| {{ $game->desenvolvedor }} |</td>
                            </tr>
                        </div>
                        @endforeach
                    </table>
                </div>
        
           
                <div class="div_tres_quadrados">
                    <div id="div_cadastro_games" class="div_cadastro_games">
                        <form action="{{ route('adm/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="div_txt">
                                <p class="all_txt">Nome:</p>
                                <input type="text" id="inpt_txt_nome" name="inpt_txt_nome"
                                    class="all_txt">
                                <p class="all_txt">Preço:</p>
                                <input type="text" id="inpt_txt_preco" name="inpt_txt_preco"
                                    class="all_txt">
                                <p class="all_txt">Descrição:</p>
                                <input type="text" id="inpt_txt_descr" name="inpt_txt_descr"
                                    class="all_txt">
                                <p class="all_txt">Desenvolvedor:</p>
                                <input type="text" id="inpt_txt_desenvol" name="inpt_txt_desenvol"
                                    class="all_txt">
                                <p class="all_txt">Categoria:</p>
                                <select name="inpt_select_category"
                                    id="inpt_select_category">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->category_name }}">
                                            {{ $categoria->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="all_txt">Fundo pag/loja:</p>
                                <input type="file" name="file_img_fundo" id="file_img_fundo"
                                    class="file_img file_img_fundo">
                                <p class="all_txt">Print 1:</p>
                                <input type="file" name="file_img_print1" id="file_img_print1" class="file_img file_img_print1">
                                <p class="all_txt">Print 2:</p>
                                <input type="file" name="file_img_print2" id="file_img_print2" class="file_img file_img_print2">
                                <p class="all_txt">Print 3:</p>
                                <input type="file" name="file_img_print3" id="file_img_print3" class="file_img file_img_print3">
                                <button type="submit" class="bt_margin" id="bt_salvar">Salvar</button>
                        </form>
                        <input type="button" class="bt_margin" value="Testar" id="bt_testar" onclick="escrever(this);">

                    </div>
                </div>

                <!-- PARTE TELINHA SIMULAÇÃO   -->
                <div id="div_simupag">
                    <div class="div_imgfundo">
                        <img id="img_fundo" src="/img/imgadm.png">
                    </div>
                    <div class="div_tit_preco">
                        <p id="p_titulo">Titulo do jogo</p>
                        <div class="div_rect_compra">
                            <p id="p_preco2">R$00,00</p>
                        </div>
                    </div>
                    <div class="div_desc_img">
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
        </div>

        <div id="div_acoes">
            <div class="div_cadastrar_cat" id="div_cadastrar_cat">
            <p class="p_excluir">Cadastrar Categoria</p>
            <form action="{{ route('adm/catsave') }}" method="post" enctype="multipart/form-data">
                @csrf
            <input type="text" name="inpt_nome_cat" class="inpt_txt_ex_nome" placeholder="Nome" id="inpt_txt_desenvol">
            <button type="submit" class="bt_alt_alterar" id="bt_salvar">Salvar</button>
            </form>
            </div>

            <div class="div_excluir_cat">
                <p class="p_excluir">Excluir Categoria</p>
                @foreach ($categorias as $category)
            <form action="/adm/{{ $category->category_name }}" method="POST">
                @endforeach
                @csrf
                @method('delete')
                <select id="sel_alterar_id">
                    @foreach ($categorias as $category)
                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            <input type="submit" class="bt_alt_alterar" value="Excluir">
            </form>
                </div>

            <div class="div_excluir">
            <p class="p_excluir">Excluir Games</p>
            @foreach ($todosjogos as $game)
            <form action="/adm/{{ $game->nome }}" method="POST">
                @endforeach
                @csrf
                @method('delete')
                <select name="inpt_select_nome" id="sel_alterar_id">
                    @foreach ($todosjogos as $game)
                    <option value="{{ $game->nome }}">{{ $game->nome }}</option>
                    @endforeach
                </select>
            <input type="submit" class="bt_alt_alterar" value="Excluir">
            </form>
            </div>
        </div>
    </div>
    <script>
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
