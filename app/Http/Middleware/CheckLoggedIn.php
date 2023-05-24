<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoggedIn
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
        $path = $request->path();

        if (($path == "/" || $path == "login" || $path == "plans" || $path == "reset" || $path == "register") && session()->has('plan_id')) {
            // dd(session('plan_id')); 
            return redirect()->route('homepage_index');
        } else if (
            $path != "/" && $path != "login" && $path != "plans" && $path != "reset"
            && (!preg_match("/\b(register\w*)\b/", $path))
            && !(session()->has('plan_id'))
        ) {
            // dd(session()->has('plan_id'));
        // dd(session('plan_id')); 
        // dd(session('plan_id')); 


            return redirect()->route('get_login');
        }else{
        return $next($request);
        }
    }
}
