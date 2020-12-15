<?php

namespace App\Http\ViewComposers;

class HeaderComposers{

    public function compose(View $view) {
        $view->with('categories',Category::where('is_online',1)->get());
    }

}
 