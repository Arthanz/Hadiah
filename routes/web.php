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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [GameController::class, 'homePage'])->name('homePage');
Route::get('/form',[GameController::class, 'inputFormPage'])->name('inputFormPage');
Route::post ('/form',[GameController::class, 'insertGame'])->name('insertGame');
Route::get('/show-game/{id}', [GameController::class, 'show'])->name('show');
Route::get('/edit-game/{id}', [GameController::class, 'edit'])->name('edit');
Route::patch('/update-game/{id}', [GameController::class, 'update'])->name('update');
Route::delete('/delete-game/{id}', [GameController::class, 'delete'])->name('delete');