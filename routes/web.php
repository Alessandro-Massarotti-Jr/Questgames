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

Route::get('/adm', function () {
    return view('adm');
});
Route::get('/game', function () {
    return view('game');
});
Route::get('/biblioteca', function () {
    return view('biblioteca');
});
Route::get('/compra', function () {
    return view('compra');
});

Route::post('/adm/store',[GameController::class, 'store'] )->name('adm/store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['web']], function(){
    Route::resource('adm', GameController::class);
});