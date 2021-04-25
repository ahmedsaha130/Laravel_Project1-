<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ip_check2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         if ( $request->ip() == '127.0.0.5') {
            return $next($request);

         }else {

            abort(403,"The Page Not Fond ");
         }
    }
}
