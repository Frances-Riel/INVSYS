<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $category = DB::table('categories')
                    ->get();

        return view('catbra.category', ['categories' => $category]);
    }
    public function savecat(Request $request){
        $category = new Category;
        $category->title = $request->input('name');
        $category->save();

        return redirect('/category');
    }
}
