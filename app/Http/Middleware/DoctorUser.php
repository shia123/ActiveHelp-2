<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DoctorUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $role = $request->user()->role;
        if ($role == 2) {

            return $next($request);
        } elseif ($role === 3) {

            return redirect('/home');
        } else {
            return redirect('/admin-home');
        }
    }
}
