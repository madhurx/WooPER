<?php

namespace App\Http\Controllers\Home_Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Basic extends Controller
{
    public function index()
    {
        return view('home_pages.home');
    }
}
