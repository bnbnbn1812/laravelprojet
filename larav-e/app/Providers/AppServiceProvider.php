<?php

namespace App\Providers;
use App\Models\Category;
use App\Http\ViewComposers\HeaderComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      //  view::composer('shop..app', App\Http\ViewComposers\HeaderComposer);
       view()->composer('shop.categorie', function($view){
         $view->with('categories', Category::where('is_online',1)->get());
       });

         Schema::defaultStringLength(191);
    }
}
