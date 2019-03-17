<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use function redirect;

class CheckUser
{

    public function handle($request, Closure $next, $role)
    {
        if(!Auth::check()){
            $request->session()->flash('message', 'Please login to use this resources!');
            return redirect()->route('login');
        }
        if (!$request->user()->hasRole($role)) {
            return abort(403 , 'Unauthorized Action.');
        } else {
            return $next($request);
        }

    }
}
