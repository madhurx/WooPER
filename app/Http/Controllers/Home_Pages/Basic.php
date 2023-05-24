<?php

namespace App\Http\Controllers\Home_Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Basic extends Controller
{
    public function index()
    {
        // dd(session('plan_id'));

        $title = "HOME";
        $plan_id = session('plan_id') ?? 0;
        return view('home_pages.home')->with(compact('plan_id','title'));
    }
    public function contact()
    {
        $title = "CONTACT";
        $plan_id = session('plan_id') ?? 0;
        return view('home_pages.contact')->with(compact('plan_id','title'));
    }
    public function about()
    {
        $title = "ABOUT";
        $plan_id = session('plan_id') ?? 0;
        return view('home_pages.about')->with(compact('plan_id','title'));
    }
}
