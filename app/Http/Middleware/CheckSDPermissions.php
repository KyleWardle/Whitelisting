<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\SDPermissions;

class CheckSDPermissions
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
            $SDPermissions = SDPermissions::where('user_id', Auth::id())->first();

            if ($SDPermissions && $SDPermissions->permission_level == 2) {
                return $next($request);
            } else {
                $request->session()->flash('status', 'You have no permissions!');
                $request->session()->flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }

    }
}
