<?php

namespace SendMessages;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class SendMessagesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $PostHelper = base_path('runy/SendMessages/SendMessagesHelper.php');
        if (file_exists($PostHelper)){
            require_once ($PostHelper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/SendMessages/views') , 'SendMessagesView');

        $this->loadMigrationsFrom([
            base_path('runy/SendMessages/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/SendMessages/messages_route.php'));
    }
}
