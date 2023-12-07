<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthManager;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();

Route::get('/home', [ProductController::class,'index'])->name('home');
Route::get('/brand', [BrandController::class,'index'])->name('brand');
Route::get('/category', [CategoryController::class,'index'])->name('category');

Route::post('/savecat', [CategoryController::class,'savecat']);
Route::post('/savebra', [BrandController::class,'savebra']);
Route::post('/save', [ProductController::class,'save']);

Route::get('/logout', [AuthManager::class,'logout'])->name('logout');
