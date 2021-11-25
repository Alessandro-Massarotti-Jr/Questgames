<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\Category;
use App\Models\User;
use App\Models\Biblio;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\Auth;

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
        if($request->hasFile('file_img_print1') && $request->file('file_img_print1')->isValid()) {

            $requestImage = $request->file_img_print1;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/games'), $imageName);

            $game->print1 = $imageName;

        }
        if($request->hasFile('file_img_print2') && $request->file('file_img_print2')->isValid()) {

            $requestImage = $request->file_img_print2;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/games'), $imageName);

            $game->print2 = $imageName;

        }
        if($request->hasFile('file_img_print3') && $request->file('file_img_print3')->isValid()) {

            $requestImage = $request->file_img_print3;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/games'), $imageName);

            $game->print3 = $imageName;

        }

            $game->save();


            return redirect('adm')->with('message', 'Game cadastrado com sucesso');
            
        } catch (Exception $error) {
            dd($error);
        }
    }

    public function catsave(Request $request)
    {
        $category = new Category;
        try {
            $category->category_name = $request->inpt_nome_cat;

            $category->save();

        return redirect('adm')->with('message', 'Game apagado com sucesso!');
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

    public function destroycat($nome)
    {
        $category = Category::where('category_nome', $nome);
        $category->delete();
        return redirect('adm')->with('message', 'Game apagado com sucesso!');
    }

    public function viewloja()
    {
        $games = Games::all();
        $cats = Category::all();
        return view('welcome', ['games' => $games, 'categorias' =>$cats ]);
    }

    public function editperfil()
    {
        $user = Auth::User();
        
        return view('edit', ['user'=>$user]);
    }

    public function alterperfil(Request $request)
    {
        
        $user = User::findOrFail($request->id);
        $user->name=$request->cx_nick;
        $user->user_desc=$request->cx_desc;

        if($request->hasFile('file_foto') && $request->file('file_foto')->isValid()) {

            $requestImage = $request->file_foto;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/perfil'), $imageName);

            $user->profile_photo_path = $imageName;

        }

        if($request->hasFile('filepubli1') && $request->file('filepubli1')->isValid()) {

            $requestImage = $request->filepubli1;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/perfil'), $imageName);

            $user->post1 = $imageName;

        }
        if($request->hasFile('filepubli4') && $request->file('filepubli4')->isValid()) {

            $requestImage = $request->filepubli4;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/perfil'), $imageName);

            $user->post4 = $imageName;

        }
        if($request->hasFile('filepubli2') && $request->file('filepubli2')->isValid()) {

            $requestImage = $request->filepubli2;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/perfil'), $imageName);

            $user->post2 = $imageName;

        }
        if($request->hasFile('filepubli3') && $request->file('filepubli3')->isValid()) {

            $requestImage = $request->filepubli3;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/perfil'), $imageName);

            $user->post3 = $imageName;

        }

        $user->update();
       

        
        return redirect('/dashboard');
    }

    public function show($id) {

        $game = Games::findOrFail($id);

        $user = Auth::User();

        return view('game', ['game' => $game, 'user'=>$user]);
        
    }

    public function biblio()
    {
        $games = Games::all();
        $cats = Category::all();
        $user = Auth::User();
        $biblios = biblio::all();

        return view('biblioteca', ['games' => $games, 'categorias' =>$cats,'biblios'=>$biblios, 'user'=>$user ]);
    }



    public function bibliosave(Request $request)
    {

        $biblio = new Biblio;

        $biblio->user_id = $request->userid;
        $biblio->game_id = $request->gameid;

        $biblio->save();
        
        return redirect('/biblioteca');
    }


    public function perfil()
    {
        $user = Auth::User();
    
        
        return view('dashboard',['user'=>$user]);
    }


}

    