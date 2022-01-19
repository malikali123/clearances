<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next)
    {
        if (auth('web')->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        if (auth('student')->check()) {
            return redirect(RouteServiceProvider::STUDENT);
        }

        if (auth('clearance')->check()) {
            return redirect(RouteServiceProvider::CLEARANCE);
        }

        if (auth('parent')->check()) {
            return redirect(RouteServiceProvider::PARENT);
        }

        return $next($request);
    }
}
