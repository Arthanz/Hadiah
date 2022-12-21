<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    //
    function homePage(){
        $games = Game::all();

        return view('home', compact('games'));
    }
    function inputFormPage(){
        return view('inputForm');
    }
    function insertGame(Request $request){
        $newGame = new Game();
        $newGame->name = $request->name;
        $newGame->price = $request->price;
        $newGame->genre = $request->genre;
        $newGame->PublishDate = $request->PublishDate;
        $newGame->save();
        return redirect()->to('/home');
    }
}
