<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        app()->setLocale(session('my_locale', config('app.locale')));

        return $next($request);
    }
}
