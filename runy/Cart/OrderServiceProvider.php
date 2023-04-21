<?php

namespace Cart;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class OrderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $OrderHelpers = base_path('runy/Cart/OrderHelpers.php');
        if (file_exists($OrderHelpers)){
            require_once ($OrderHelpers) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/Cart/views') , 'OrderView');

        $this->loadMigrationsFrom([
            base_path('runy/Cart/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/Cart/order_route.php'));
    }
}
