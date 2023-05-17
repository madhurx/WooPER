<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Learners;

class Basic extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function notes_view_all()
    {
        return view('admin.premium.notes_view_all');
    }
    public function customers_view_all()
    {

        $table = new Learners;
        $users = $table->get();
        $title = "LEARNERS";
        // dd($users);
        return view('admin.portal.customers_view_all')->with(compact('users','title'));
    }
    public function view_plans(){
        return view('admin.portal.view_plans');
    }
    public function create_plans(){
        return view('admin.portal.create_plans');
    }
}
