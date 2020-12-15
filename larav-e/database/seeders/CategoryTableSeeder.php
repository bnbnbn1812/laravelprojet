<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *  @returnvoid
     */
    //public function run()

   // {

    //    $category = new App\Models\Category();
    //    $category->nom = "Films";
    //    $category->is_online = 1;
    //    $category->save();

    //    $category2 = new App\Models\Category();
    //    $category2->nom = "Séries TV";
    //    $category2->is_online = 1;
    //    $category2->save();

    //    $category3 = new App\Models\Category();
    //    $category3->nom = "Musique";
    //    $category3->is_online = 1;
    //    $category3->save();

    //    $category4 = new App\Models\Category();
    //    $category4->nom = "Jeux-vidéos";
    //    $category4->is_online = 1;
    //    $category4->save();

    //    $category5 = new App\Models\Category();
    //    $category5->nom = "Sport";
    //    $category5->is_online = 1;
    //    $category5->save();
        



    private $seed=[

        ["nom" => "Films",
        "is_online" => "1",
        ],

        [
            "nom" => "Séries TV",
            "is_online" => "1",
        ],

         [
            "nom" => "Musique",
            "is_online" => "1",
        ],

         [
            "nom" => "Jeux-vidéos",
            "is_online" => "1",
        ],

         [
            "nom" => "Sport",
            "is_online" => "1",
        ],
    ];


        public function run(){
        
            \App\Models\Category::insert($this->seed);
    }

    
}