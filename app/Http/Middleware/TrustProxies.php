<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */
    protected $proxies = '*';

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */

    /*public function handle(Request $request, Closure $next)
    {
        $ips = $request->server('HTTP_X_FORWARDED_ALL');

        if ($ips) {
            $ip = explode(',', $ips)[0];
        } else {
            $ip = $request->ip();
        }

        // ...
    }*/
    //protected $headers = Request::HEADER_X_FORWARDED_ALL;
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;
}
