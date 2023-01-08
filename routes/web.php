<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Models\Game;
use App\Http\Controllers\MailController;
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

Route::post('/send-mail', [MailController::class, 'sendMail']);
Route::get('/dashboard', function () {
    $games = Game::all();
    return view('welcome', compact('games'));
});

// Route::middleware('isAdmin')->group(function () {
//     Route::get('/form',[GameController::class, 'inputFormPage'])->name('inputFormPage');
//     Route::post ('/form',[GameController::class, 'insertGame'])->name('insertGame');
//     Route::get('/show-game/{id}', [GameController::class, 'show'])->name('show');
//     Route::get('/edit-game/{id}', [GameController::class, 'edit'])->name('edit');
//     Route::patch('/update-game/{id}', [GameController::class, 'update'])->name('update');
//     Route::delete('/delete-game/{id}', [GameController::class, 'delete'])->name('delete');
//     Route::delete('/delete-category/{id}','App\Http\Controllers\CategoryController@delete')->name('delete');
//     Route::get('/create-category', [CategoryController::class, 'create']);
//     Route::post('/store-category', [CategoryController::class, 'store']);
//     Route::get('/categories', 'App\Http\Controllers\CategoryController@create');
//     Route::post('/store', 'App\Http\Controllers\CategoryController@store');
// });

Route::get('/home', [GameController::class, 'dash'])->name('dash');

Route::get('/search', [GameController::class, 'search']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [GameController::class, 'dash'])->name('dashboard');
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');
    Route::post('review-store', 'BookingController@reviewstore')->name('review.store');
    Route::get('/review-game', 'BookingController@reviewstore')->name('review.store');
    Route::middleware('isAdmin')->group(function () {
        Route::get('/form',[GameController::class, 'inputFormPage'])->name('inputFormPage');
        Route::post ('/form',[GameController::class, 'insertGame'])->name('insertGame');
        Route::get('/show-game/{id}', [GameController::class, 'show'])->name('show');
        Route::get('/edit-game/{id}', [GameController::class, 'edit'])->name('edit');
        Route::patch('/update-game/{id}', [GameController::class, 'update'])->name('update');
        Route::delete('/delete-game/{id}', [GameController::class, 'delete'])->name('delete');
        Route::get('/categories', 'App\Http\Controllers\CategoryController@create')->name('categories');
        Route::post('/store', 'App\Http\Controllers\CategoryController@store')->name('categoryStore');
    });
});

require __DIR__.'/auth.php';
