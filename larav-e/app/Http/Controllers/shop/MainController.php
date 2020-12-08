<?php

namespace App\Http\Controllers\shop;

use App\Models\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

     //SELECT * FROM produits;
     $produits = Produit::all();
    //dd($produits);   


        return view('shop.index',compact('produits'));
    }

    public function produit(Request $Request){

       // echo"page produit";
      // print_r($_GET);
     //  die($_GET);


        //SELECT * FROM produits WHERE id = ?
        //dd($Request->id);

        $produit= Produit::find($Request->id);

       return view('shop.produit', compact('produit'));
    }
}
