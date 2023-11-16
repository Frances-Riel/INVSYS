<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/home', [ProductController::class,'index']);
//Route::post('/savecat', [ProductController::class,'savecat']);
//Route::post('/savebra', [ProductController::class,'savebra']);
Route::post('/save', [ProductController::class,'save']);

Route::get('/logout', [AuthManager::class,'logout'])->name('logout');
