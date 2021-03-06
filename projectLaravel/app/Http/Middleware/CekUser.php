<?php

namespace App\Http\Middleware;

use Closure;

class CekUser
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
       $value = $request->session()->get('user');
       if($value != "true")
       {
        return redirect('/login');
       }
       return $next($request);
    }
}
