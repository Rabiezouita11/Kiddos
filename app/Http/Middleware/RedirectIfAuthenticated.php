<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
           switch ($guard) {
               case 'admin':
                return redirect()->route('admin2');
                   break;
                   case 'bb':
                    return redirect()->route('prof.login');
                       break;
               default:
               return redirect('checkout');
                break;
           }

        }

        return $next($request);
    }
}
