<?php

namespace App\Http\Controllers\shop;

use App\Models\Produit;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

     //SELECT * FROM produits;
     $produits = Produit::all();
    //dd($produits);   


        return view('shop.index',compact('produits'));
    }

    public function produit(){
        echo"page produit";
    }
}
