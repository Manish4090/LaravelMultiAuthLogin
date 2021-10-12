<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{

    public function handle($request, Closure $next, $role, $permission = null)
    {
        if(!\Auth::guard('admin')->user()->hasRole($role)) {

             abort(404);

        }

        if($permission !== null && !\Auth::guard('admin')->user()->can($permission)) {

              abort(404);
        }

        return $next($request);

    }
}