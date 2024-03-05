<?php

use Illuminate\Support\Facades\Facade;

return [
    'name' => env('APP_NAME', 'Laravel'),

    'env' => env('APP_ENV', 'production'),

    'debug' => (bool) env('APP_DEBUG', false),

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    'timezone' => 'Asia/Tehran',

    'locale' => 'fa',

    'fallback_locale' => 'fa',

    'faker_locale' => 'fa_IR',

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    'csrf_except' => [
        '/payed_invoice_callback_url',
    ],

    'maintenance' => [
        'driver' => 'file',
        // 'store'  => 'redis',
    ],

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */
        App\Providers\FortifyServiceProvider::class,
        Artesaos\SEOTools\Providers\SEOToolsServiceProvider::class,

        /*
         * My Package Service Providers...
         */
        Post\PostServiceProvider::class,
        Product\ProductServiceProvider::class,
        HomePage\HomeServiceProvider::class,
        Cart\OrderServiceProvider::class,
        Cart\CartServiceProvider::class,
        Customer\CustomerServiceProvider::class,
        Sms\SmsServiceProvider::class,
        RunySliderB5\SliderB5ServiceProvider::class,
        FilesManager\FilesServiceProvider::class,
        Employee\EmployeeServiceProvider::class,
        Rqsts\RqstsServiceProvider::class,
        RunySEO\RunySEOServiceProvider::class,
        SendMessages\SendMessagesServiceProvider::class,
        SiteLogs\SiteLogsServiceProvider::class,
        Poll\PollServiceProvider::class,
        Regions\RegionServiceProvider::class,
        RunyFormBuilder\RunyFormBuilderServiceProvider::class,
        RunyWarehousing\RunyWarehousingServiceProvider::class,


        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    'aliases' => Facade::defaultAliases()->merge([
        'SEO' => Artesaos\SEOTools\Facades\SEOTools::class,
    ])->toArray(),

];
