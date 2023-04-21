<?php

namespace Cart;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class CartServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/Cart/views') , 'CartView');

        $this->loadMigrationsFrom([
            base_path('runy/Cart/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/Cart/cart_route.php'));
    }
}
