<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\EMSPermissions;

class CheckEMSPermissions
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
            $EMSPermissions = EMSPermissions::where('user_id', Auth::id())->first();

            if ($EMSPermissions && $EMSPermissions->permission_level == 2) {
                return $next($request);
            } else {
                $request->session()->flash('status', 'You have no permissions!');
                $request->session()->flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }

    }
}
