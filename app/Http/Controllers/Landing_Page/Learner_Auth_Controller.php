<?php

namespace App\Http\Controllers\Landing_Page;

use App\Http\Controllers\Controller;
use App\Models\Learners;
use Illuminate\Http\Request;
use App\Mail\Reset_OTP;
use App\Mail\new_Registration_mail;
use Illuminate\Support\Facades\Mail;
// use Mail;

class Learner_Auth_Controller extends Controller
{
    //
    public function register(Request $request)
    {
        $request->validate(
            [
                'first_name' => 'required|min:2|max:50',
                'last_name' => 'required|min:2|max:50',
                'username' => 'required|email|min:4|max:80',
                'password' => 'required|min:4|max:20',
                'plan_id' => 'required',
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
            $details = ['name' => ($request->first_name." ".$request->last_name),'username' =>$request->username ];
            $new_registration_mail = new new_Registration_mail($details);
            Mail::to($request->username)->send($new_registration_mail);
            
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

                

                $expiring_date = $user->created_at;
                date_add($expiring_date,date_interval_create_from_date_string("30 days"));
                if(date("Y-m-d H:i:s") <= $expiring_date)
                {
                    session(['plan_id' => $user->plan_id]);
                    session(['plan_validity' => "valid"]);
                    return redirect()->action('Home_Pages\Basic@index');
                }
                else
                {
                    session(['plan_validity' => "not valid"]);
                    session(['incorrect_msg' => 'Your Plan has expired']);
                    return redirect()->route('get_login');
                }
                

            // dd(session()->all());

                
            } else {
                // session()->flush();
                // session()->save();
                // dd(session());
                // $request->session()->put("incorrect_password","Incorrect Passworddd");
                // return redirect()->back()->with(compact('title','incorrect_pass'));
                session(['incorrect_msg' => 'Incorrect Password']);

                // dd(session()); 
                // echo("<pre>");
                // print_r(session());
                // echo("</pre>");
                
                return redirect()->route('get_login');
                
            }
        } else {
            session(['incorrect_msg' => 'Incorrect Username']);
            return redirect()->route('get_login');
        }
    }

    public function reset_otp(Request $req)
    {
        $req->validate(
            [
                'username' => 'required|email',
            ]
        );
        $table_learner = new Learners;
        $username = $req->username;
        $otp = rand(1000, 9999);
        if ($table_learner->where('username', $username)->first()) {
            $table_learner->where('username', $username)->update(['otp' => $otp]);

            $details = ['otp' => $otp];
            $reset_otp_obj = new Reset_OTP($details);
            Mail::to($username)->send($reset_otp_obj);

            $incorrect_msg = "OTP sent!";
            return redirect()->back()->withInput(['incorrect_msg'=>$incorrect_msg, 'username'=>$username]);
        } else {
            $incorrect_msg = "Username not found, Please enter registered Username";
            return redirect()->back()->withInput(['incorrect_msg'=>$incorrect_msg, 'username'=>$username]);
        }
    }

    public function reset_pass(Request $req)
    {
        $req->validate(
            [
                'otp' => 'required',
                'username' => 'required|email',
                'password' => 'required',
            ]
        );
        $table_learner = new Learners;
        $username = $req->username;
        $pass = $req->password;
        $otp = $req->otp;

        if ($row = $table_learner->where('username', $username)->first()) {
            if ($row->otp == $otp) {
                $table_learner->where('id', $row->id)->update(['password' => $pass]);
                $table_learner->where('id', $row->id)->update(['otp' => NULL]);
                return redirect()->back()->with(['incorrect_msg' => 'Password Updated, Please login!']);
            } else {
                return redirect()->back()->withInput(['incorrect_msg' => 'Incorrect OTP!']);
            }
        } else {
            return redirect()->route('get_reset')->withInput(['incorrect_msg' => 'Username not found, Please enter registered Username']);
        }
    }

    // public function send_mail()
    // {
    //     $details = ['otp' => 2545];
    //     $username = "madhurmawai@gmail.com";
    //     $reset_otp_obj = new Reset_OTP($details);
    //     Mail::to($username)->send($reset_otp_obj);
    //     echo ("Mail sent");
        //     Mail::send(' ', $data, function ($message) {
        //         $message->to('username');
        //         $message->subject("WOOPER account password reset OTP");
        //     });
    // }
}
