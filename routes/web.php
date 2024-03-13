<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/noticias', [NewsController::class, "index"])->name("news.index");
//Route::get('/noticias/nova', [NewsController::class, "create"])->name("news.create");
//Route::post('/noticias/nova', [NewsController::class, "store"])->name("news.store");

Route::resource('noticias', NewsController::class)
    ->names('news')
    ->parameters(["noticias" => "news"]);

Route::resource('categorias', CategoryController::class)
    ->names('category')
    ->parameters(["categorias" => "category"]);

Route::get('/home', function (){
    return view('home');
});
