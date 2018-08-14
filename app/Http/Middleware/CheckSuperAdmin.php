<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckSuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->is_super_admin) {
            return $next($request);
        } else {
            $request->session()->flash('status', 'You must be a Super Administrator!');
            $request->session()->flash('alert-class', 'alert-danger');
            return redirect()->back();
        }

    }
}
