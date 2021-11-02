<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;
use App\Models\Game;
use Exception;

class GameController extends Controller{

    public function store(Request $request){
                $game = new Game;

                $game->nome = $request -> inpt_txt_nome;
                $game->preco = $request-> inpt_txt_preco;
                $game->description = $request-> inpt_txt_descr;
                $game->desenvolvedor = $request-> inpt_txt_desenvol;
                $game->image = 'image';
                $game->save();
        

            return redirect('/adm');     
    }

}