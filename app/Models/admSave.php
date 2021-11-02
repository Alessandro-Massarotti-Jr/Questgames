<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admSave extends Model
{
    use HasFactory;

    protected $table = "games";
    protected $fillable = [
        'nome',
        'preco',
        'description',
        'desenvolvedor'
    ];
}
