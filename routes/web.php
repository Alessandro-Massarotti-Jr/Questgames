<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GameController::class, 'viewloja']);

Route::get('/biblioteca', [GameController::class, 'biblio']);

Route::post('/biblioteca/save', [GameController::class, 'bibliosave'])->name('biblio/save');

Route::get('/game/{id}', [GameController::class, 'show']);

Route::get('/adm', function () {
    return view('adm');
});

Route::get('/edit', [GameController::class, 'editperfil']);

Route::post('/edit/save', [GameController::class, 'alterperfil']);

Route::get('/game', function () {
    return view('game');
});

Route::get('/compra', function () {
    return view('compra');
});

Route::post('/adm/store',[GameController::class, 'store'] )->name('adm/store');
Route::post('/adm/catsave',[GameController::class, 'catsave'] )->name('adm/catsave');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[GameController::class, 'perfil'])->name('dashboard');

Route::group(['middleware' => ['web']], function(){
    Route::resource('adm', GameController::class);
});

Route::get('/perfil', function () {
    return view('resources/views/profile/update-profile-information-form.blade.php'
);

});