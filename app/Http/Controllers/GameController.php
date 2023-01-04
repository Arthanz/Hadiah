<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Http\Request;
use App\Models\Category;
class GameController extends Controller
{
    //
    function homePage(){
        $games = Game::all();

        return view('home', compact('games'));
    }
    function inputFormPage(){
        $categories = Category::all();
        return view('inputForm', compact('categories'));
    }
    function insertGame(Request $request){
        $validated = $request->validate([
            'name'=>'required|unique:games,name|min:5|max:255',
            'PublishDate'=>'required',
            'publisher'=>'required',
            'price'=>'required|min:4',
            'image'=>'required|mimes:jpg,png,jpeg'

        ]);


        $extension = $request->file('image')->getClientOriginalExtension();
        // $filename = $request->name.'_'.$request
        $filename = $request->file('image')->getClientOriginalName();
        $request -> file('image')->storeAs('/public/game/', $filename);

        $newGame = new Game();
        $newGame->name = $request->name;
        $newGame->price = $request->price;
        $newGame->publisher = $request->publisher;
        $newGame->PublishDate = $request->PublishDate;
        $newGame->image = $filename;
        $newGame->category_id = $request -> category;
        $newGame->save();
        return redirect()->to('/home');
    }
    function show($id){
        $games = Game::findOrFail($id);

        return view('showGame', compact ('games'));
    }
    function edit($id){

        $games = Game::findOrFail($id);
        return view('editGame', compact('games'));
    }
    function update(Request $request, $id){
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->file('image')->getClientOriginalName();
        $request -> file('image')->storeAs('/public/game/', $filename);
        Game::findOrFail($id)->update([
            'name'=>$request->title,
            'price'=>$request->price,
            'publisher'=>$request->publisher,
            'PublishDate'=>$request->publishDate,
            'image'=> $filename
        ]);
        return redirect()->to('/home');
    }

    function delete($id){
        Game::destroy($id);
        return redirect()->to('/home');
    }
}
