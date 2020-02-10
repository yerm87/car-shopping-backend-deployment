<?php

namespace App\Http\Middleware;

use Closure;

class CheckAuth
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
        if($request->session()->get('key')){
            return $next($request);
            
        } else {

            return response()->json([
                'auth' => false
            ])->header('Access-Control-Allow-Origin', '*');
        }
    }
}
