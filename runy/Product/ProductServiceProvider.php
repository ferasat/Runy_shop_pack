<?php

namespace Product;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class ProductServiceProvider extends ServiceProvider
{
    public function register()
    {
        $ProductHelper = base_path('runy/Product/ProductHelpers.php');
        if (file_exists($ProductHelper)){
            require_once ($ProductHelper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/Product/views') , 'ProductView');

        $this->loadMigrationsFrom([
            base_path('runy/Product/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/Product/product_route.php'));
        Route::middleware('web')->group(base_path('runy/Product/product_show_route.php'));
    }
}
