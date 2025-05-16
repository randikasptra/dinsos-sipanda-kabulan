<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAdmin
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
