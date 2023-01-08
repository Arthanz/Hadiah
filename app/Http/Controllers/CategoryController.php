<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function create(){

        $category = Category::paginate();
        return view('createCategory',  compact('category'));
    }

    function delete($id){
        Category::destroy($id);
        return redirect()->to('/categories');
    }

    public function store(Request $request){
        Category::create([
            'nama' => $request->name
        ]);

        return redirect('/dashboard');
    }
}
