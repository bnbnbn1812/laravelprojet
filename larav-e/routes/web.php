<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\MainController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/',"App\http\controllers\Shop\MainController@index");

//Route::get('/shop', [MainController::class, 'index']);

Route::get('/produit/voir/{id}','App\http\controllers\Shop\MainController@produit')->name('voir_produit');
