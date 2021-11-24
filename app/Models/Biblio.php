<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblio extends Model
{
    use HasFactory;



    protected $table = "biblio";
    protected $fillable = [
        'user_id',
        'game_id'
    ];


}
