<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = session('app_locale', config('app.locale', 'fr'));
        App::setLocale(in_array($locale, ['fr','en']) ? $locale : 'fr');

        return $next($request);
    }
}