<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = DB::table('products')
                    ->join('categories', 'categories.id', '=', 'products.category_id')
                    ->join('brands', 'brands.id', '=', 'products.brand_id')
                    ->get();

        $category = DB::table('categories')
                    ->get();

        $brand = DB::table('brands')
                    ->get();

        return view('home', ['products' => $product , 'categories' => $category , 'brands' => $brand]);
    }

    public function save(Request $request){
        $product = new Product;
        $product->name = $request->input('name');
        $product->qty = $request->input('qty');
        $product->category_id = $request->input('category');
        $product->brand_id = $request->input('brand');

        $product->save();

        return redirect('/');
    }
/*
    public function savecat(Request $request){
        $category = new Category;
        $category->title = $request->input('name');
        $category->savecat();

        return redirect('/');
    }

    public function savebra(Request $request){
        $brand = new Brand;
        $brand->title = $request->input('name');
        $brand->savebra();

        return redirect('/');
    }
*/
}
