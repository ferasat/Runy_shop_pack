<?php

namespace MsgBox;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Imanghafoori\HeyMan\Facades\HeyMan;


class MsgBoxServiceProvider extends ServiceProvider
{
    public function register()
    {
        $PostHelper = base_path('runy/MsgBox/MessageBoxHelpers.php');
        if (file_exists($PostHelper)){
            require_once ($PostHelper) ;
        }
    }

    public function boot()
    {
        $this->loadViewsFrom(base_path('runy/MsgBox/views') , 'MsgBoxView');

        $this->loadMigrationsFrom([
            base_path('runy/MsgBox/migrations')
        ]);

        Route::middleware('web')->group(base_path('runy/MsgBox/message_box_route.php'));
    }
}
