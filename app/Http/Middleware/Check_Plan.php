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
        // $path = $request->path();{{ {{   }}
        // if (($path == "" || $path == "login" || $path == "plans" || $path == "register") && session()->get('plan_id')) {
        //     // dd (session());
        //     // session()->flush();
        //     // session()->save();
        //     return redirect('https://goog2le.com');
        // } else {

        //     return $next($request);
        // }

        $path = $request->path();
        // echo $path;
        if (($path == "/" || $path == "login" || $path == "plans" || $path == "register") && session()->has('plan_id')) {
            // dd(session()->all());

            return redirect()->route('homepage_index');
        } elseif (($path != "/" && $path != "login" && $path != "plans" && (strpos($path, 'register'))) && !(session()->get('plan_id'))) {
            // dd(session()->all());

            return redirect()->route('get_login');
        } else if ((session('plan_id') == 1) && (($path == "notes") || ($path == "podcasts") || ($path == "videos"))) {

            return redirect()->route('homepage_index');
        } else if ((session('plan_id') == 2) && (($path == "podcasts") || ($path == "videos"))) {

            return redirect()->route('homepage_index');
        } else if ((session('plan_id') == 3) && (($path == "videos"))) {

            return redirect()->route('homepage_index');
        } else {

            return $next($request);
        }
    }
}
