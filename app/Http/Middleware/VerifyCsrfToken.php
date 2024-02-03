<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     * برای مثتسنا کردن مسیری از تاییدیه گرفتن
     * @var array<int, string>
     */
    protected $except = [
        '/payed_invoice_callback_url'
    ];
}
