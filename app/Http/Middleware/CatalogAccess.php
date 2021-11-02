<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CatalogAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next, $role1, $role2) 
    { 
        if (empty($request->user()) || 
            !($request->user()->hasRole($role1) || 
            $request->user()->hasRole($role2)))
        {
            return redirect('login')->with('errmessage',
            'You do not have access to this functionality.');
        }

        return $next($request); 
    }
}
