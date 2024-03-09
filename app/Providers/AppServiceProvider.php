<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }

        Paginator::useBootstrap();
        Schema::defaultStringLength(200);

/*        if (config('app.env') !== 'build') {
            $setting = Setting::query()->first();

            View::share([
                'setting' => $setting
            ]);
        }*/


    }
}
