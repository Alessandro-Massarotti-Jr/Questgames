<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;
use App\Models\admSave;
use Exception;

class GameController extends Controller{
    public function admsave(Request $request)
    {
        $adm_save = $request->all();
        try{
            admSave::create([
              'nome' => $adm_save['inpt_txt_nome'],
              'preco' => $adm_save['inpt_txt_preco'],
              'description' => $adm_save['inpt_txt_descr'],
              'desenvolvedor' => $adm_save['inpt_txt_desenvol']
            ]);

            return redirect()->route("/");
        }catch(Exception $error){
            dd($error);
        }
    }
}