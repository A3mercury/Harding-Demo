<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
{
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Minimum-App-Version, Origin, Content-Type, X-Auth-Token, authorization, X-Requested-With')
            ->header('Access-Control-Expose-Headers', 'Minimum-App-Version, Origin, Content-Type, X-Auth-Token, authorization, X-Requested-With');
    }
}
