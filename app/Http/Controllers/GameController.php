<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Post;

class GameController extends Controller
{
    public function index()
    {
        $game = Games::all();
        return view('adm',['todosjogos' => $game]);
    }

    public function store(Request $request)
    {
        $game = $request->all();
        try{
            Games::create([
              'nome' => $game['inpt_txt_nome'],
              'preco' => $game['inpt_txt_preco'],
              'description' => $game['inpt_txt_descr'],
              'desenvolvedor' => $game['inpt_txt_desenvol'],
              'image' => $game['file_img_fundo']
            ]);

            return redirect('adm')->with('message', 'Game cadastrado com sucesso');
        }catch(Exception $error){
            dd($error);
        }
    }

    public function destroy($nome)
    {
        $game = Games::where('nome', $nome);
        $game->delete();
        return redirect('adm')->with('message', 'Game apagado com sucesso!');
}
}