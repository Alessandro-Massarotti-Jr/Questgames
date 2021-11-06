<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Post;

class GameController extends Controller
{
    public function index()
    {
        $game = Games::all();
        $category = Category::all();
        return view('adm', ['todosjogos' => $game, 'categorias' =>$category ]);
    }

    public function store(Request $request)
    {
        $game = new Games;
        try {
            $game->nome = $request->inpt_txt_nome;
            $game->preco = $request->inpt_txt_preco;
            $game->description = $request->inpt_txt_descr;
            $game->desenvolvedor = $request->inpt_txt_desenvol;
            $game->category = $request->inpt_select_category;
            // Image Upload
            
        if($request->hasFile('file_img_fundo') && $request->file('file_img_fundo')->isValid()) {

            $requestImage = $request->file_img_fundo;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/games'), $imageName);

            $game->image = $imageName;

        }

            $game->save();


            return redirect('adm')->with('message', 'Game cadastrado com sucesso');
            
        } catch (Exception $error) {
            dd($error);
        }
    }

    public function destroy($nome)
    {
        $game = Games::where('nome', $nome);
        $game->delete();
        return redirect('adm')->with('message', 'Game apagado com sucesso!');
    }

    public function viewloja()
    {
        $games = Games::all();
        $cats = Category::all();
        return view('welcome', ['games' => $games, 'categorias' =>$cats ]);
    }

    public function show($id) {

        $game = Games::findOrFail($id);

        return view('game', ['game' => $game]);
        
    }

}
