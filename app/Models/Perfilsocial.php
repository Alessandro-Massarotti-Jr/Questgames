<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfilsocial extends Model
{
    use HasFactory;

    protected $table = "perfilsocial";
    protected $fillable = [
        'nome',
        'description',
        'perfilimage',
        'print1',
        'print2',
        'print3',
        'print4',
        'user_id'
   
    ];
}
