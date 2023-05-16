<?php

namespace App\Http\Controllers\Subscribed_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Basic extends Controller
{
    //
    public function logout()
    {
        session()->forget('plan_id');
        return redirect()->action('Landing_Page\Basic@view_login_page');
    }
    public function blogs()
    {
        $title = "BLOGS";
        $plan_id = session('plan_id') ?? 0;
        return view('subscribed_pages.blogs')->with(compact('plan_id','title'));
    }
    public function notes()
    {
        $title = "NOTES";
        $plan_id = session('plan_id') ?? 0;
        return view('subscribed_pages.notes')->with(compact('plan_id','title'));
    }
    public function podcasts()
    {
        $title = "PODCASTS";
        $plan_id = session('plan_id') ?? 0;
        return view('subscribed_pages.podcasts')->with(compact('plan_id','title'));
    }
    public function videos()
    {
        $title = "VIDEOS";
        $plan_id = session('plan_id') ?? 0;
        return view('subscribed_pages.videos')->with(compact('plan_id','title'));
    }

}
