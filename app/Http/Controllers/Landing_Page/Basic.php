<?php

namespace App\Http\Controllers\Landing_Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Basic extends Controller
{
    public function get_started(){
        // $title = "WOOPER";
        session(['plan_id'=> '0']);
        $plan_id = session('plan_id');
        // dd($plan_id);
        if($plan_id == '0'){
            return view('landing_pages.get_started')->with('title','WOOPER');
        }

    }
}
