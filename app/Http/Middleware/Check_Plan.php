<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Check_Plan
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
        // echo("abc");
        // $path = $request->path();
        // if (($path == "" || $path == "login" || $path == "plans" || $path == "register") && session()->get('plan_id')) {
        //     // dd (session());
        //     // session()->flush();
        //     // session()->save();
        //     return redirect('https://goog2le.com');
        // } else {

        //     return $next($request);
        // }
        return $next($request);
    }
}
