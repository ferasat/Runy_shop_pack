<?php

namespace Customer;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class CustomerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $PostHelper = base_path('runy/Customer/Helpers/CustomerHelper.php');
        if (file_exists($PostHelper)){
            require_once ($PostHelper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/Customer/views') , 'CustomerView');

        $this->loadMigrationsFrom([
            base_path('runy/Customer/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/Customer/customer_route.php'));
    }
}
