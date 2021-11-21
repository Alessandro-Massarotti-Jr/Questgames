<?php

namespace App\Http\Controllers;

use App\Models\Perfilsocial;

use Illuminate\Http\Request;

class PerfilsocialController extends Controller
{
    public function index()
    {
        $perfilsocial = Perfilsocial::all();
        return view('dashboard', ['perfilsocial' => $perfilsocial]);
    }
}
