<?php

use Illuminate\Support\Facades\Route;
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/',"App\http\controllers\Shop\MainController@index");

//Route::get('/shop', [MainController::class, 'index']);

Route::get('/produit/voir/{id}','App\http\controllers\Shop\MainController@produit')->name('voir_produit');

Route::get('/categorie','App\http\controllers\Shop\MainController@viewByCategory');



Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');

Route::get('empty',function (){
    cart::destroy
});
Route::view('/cart','cart');


Route::view('/checkout','checkout');
Route::view('/thankyou','thankyou');
