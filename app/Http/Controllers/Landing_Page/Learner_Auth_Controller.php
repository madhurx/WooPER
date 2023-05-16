<?php

namespace App\Http\Controllers\Landing_Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Learners;

class Learner_Auth_Controller extends Controller
{
    //
    public function register(Request $request)
    {
        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'username' => 'required|email',
                'password' => 'required',
                'plan_id' => 'required'
            ]
        );
        $table_learner = new Learners;
        $table_learner->first_name = $request->first_name;
        $table_learner->last_name = $request->last_name;
        $table_learner->gender = $request->gender;
        $table_learner->country = $request->country;
        $table_learner->username = $request->username;
        $table_learner->password = $request->password;
        $table_learner->plan_id = $request->plan_id;
        if ($table_learner->save()) {
            return redirect()->action('Landing_Page\Basic@view_login_page');
        } else {
            return redirect()->route('pricing_plans');
        }
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if ($user = Learners::where('username', $username)->first()) {

            if ($user->password == $password) {

                session(['plan_id' => $user->plan_id]);
                
                return redirect()->action('Home_Pages\Basic@index');
            } else {
                // session()->flush();
                // session()->save();
                // dd(session());
                // $request->session()->put("incorrect_password","Incorrect Passworddd");
                // return redirect()->back()->with(compact('title','incorrect_pass'));
                session(['incorrect_msg' => 'Incorrect Password',]);
                return back()->withInput();
            }
        } else {
            session(['incorrect_msg' => 'Incorrect Username',]);
            return back();
        }
    }
}
