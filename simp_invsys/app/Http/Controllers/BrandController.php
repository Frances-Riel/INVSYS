<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){

        $brand = DB::table('brands')
                    ->get();

        return view('catbra.brand', ['brands' => $brand]);
    }
    public function savebra(Request $request){
        $brand = new Brand;
        $brand->brand = $request->input('name');
        $brand->save();

        return redirect('/brand');
    }
}
