<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.admin-login');
        }

        return $next($request);
    }
}
