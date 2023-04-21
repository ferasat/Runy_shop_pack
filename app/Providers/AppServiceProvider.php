<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $runyHelper = base_path('runy/RunyHelper.php');
        if (file_exists($runyHelper)){
            require_once ($runyHelper) ;
        }
    }


    public function boot(): void
    {
        //
    }
}
