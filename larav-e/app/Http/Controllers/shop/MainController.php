<?php

namespace App\Http\Controllers\shop;

use App\Models\Category;
use App\Models\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

     //SELECT * FROM produits;
     $produits = Produit::all();
    //dd($produits);   
        $categories = Category::where('is_online',1)->get();


        return view('shop.index',compact('produits','categories'));
    }

    public function produit(Request $Request){

       // echo"page produit";
      // print_r($_GET);
     //  die($_GET);


        //SELECT * FROM produits WHERE id = ?
        //dd($Request->id);

        $produit= Produit::find($Request->id);
        $categories = Category::where('is_online',1)->get();

       return view('shop.produit', compact('produit','categories'));
    }

        public function viewByCategory(){
            //Recupere toutes les catégories; is_online == 1
         //   $categories = Category::where('is_online',1)->get();
           // dd($categories);
            
            return view('shop.categorie');
        }


}
