<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PatientUser
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


        if ($role == 3) {

            return $next($request);
        } elseif ($role === 1) {

            return redirect('/admin-home');
        } else {
            return redirect('/doctor-home');
        }
    }
}
