<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $seed=[
        [
        "nom"=>"T-Shirt (Bande d'enfoireé)",
        "prix_ht"=>15,
        "description"=>"T-shirt de l'année 2020 (Enfoireé)",
        "photo_principale"=>"1.jpg"
        ],
        [
        "nom"=>"T-Shirt (Bande d'enfoireé)",
        "prix_ht"=>20,
        "description"=>"Très jolie tee-shirt neuf original",
        "photo_principale"=>"2.jpg"
        ],
        [
        "nom"=>"T-Shirt (Bande d'enfoireé)",
        "prix_ht"=>10,
        "description"=>"T-shirt 100% coton",
        "photo_principale"=>"3.jpg"
        ],
        [
        "nom"=>"T-Shirt (Bande d'enfoireé)",
        "prix_ht"=>55,
        "description"=>"T-shirt historique des Antilles",
        "photo_principale"=>"4.jpg"
        ],
        [
        "nom"=>"T-Shirt unicolor (Origanl 100%)",
        "prix_ht"=>19,
        "description"=>"T-shirt de l'année 2020",
        "photo_principale"=>"5.jpg"
        ],
        [
        "nom"=>"T-Shirt Coronavirus (2020)",
        "prix_ht"=>17,
        "description"=>"Pandémie STOP (Covid-19)",
        "photo_principale"=>"6.jpg"
        ],
        [
        "nom"=>"T-Shirt Marraine(2020)",
        "prix_ht"=>25,
        "description"=>"Représente l'amour envers sa Marraine",
        "photo_principale"=>"7.jpg"
        ],
        [
        "nom"=>"T-Shirt Ohlala (2020)",
        "prix_ht"=>37,
        "description"=>"Une petite merveille tout éclateé",
        "photo_principale"=>"8.jpg"
        ],
        [
        "nom"=>"T-Shirt Laaa Chatttte (Year 2020)",
        "prix_ht"=>22,
        "description"=>"Young Girl Chataaaaa",
        "photo_principale"=>"9.jpg"
        ],
        
    ];
    public function run()
    {
        \App\Models\Produit::insert($this->seed);
    }
}
