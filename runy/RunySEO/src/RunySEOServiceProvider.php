<?php

namespace RunySEO;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RunySEOServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/config.php', 'RunySeoConfig'
        );
    }


    public function boot(): void
    {
        $this->loadViewsFrom(base_path('runy/RunySEO/src/views') , 'RunySEOView');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/RunySEOView'),
        ]);

        // migrations
        $this->loadMigrationsFrom([
            base_path('runy/RunySEO/src/migrations')
        ]);

        // Route
        Route::middleware('web')->group(base_path('runy/RunySEO/src/route.php'));
    }
}
