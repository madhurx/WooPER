<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Learners;
use PDF;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\all_customers_xls;
use App\Models\Plans;


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
        return view('admin.portal.customers_view_all')->with(compact('users', 'title'));
    }
    public function view_plans()
    {
        $plans = new Plans;
        $plans = $plans->get();
        $title = "Plans";
        return view('admin.portal.view_plans')->with(compact('plans','title'));
    }
    public function create_plans(Request $req)
    {
        $req->validate([
            'planname' => 'required',
            'price' => 'required',
            'required_feature' => 'required',
            'plan_id' =>'required|digits_between:1,4|integer'
        ]);
        $features = $req->features;
        $required_feature = $req->required_feature;
        array_unshift($features, $required_feature);
        $req->is_active ? $is_active = 1 : $is_active = 0;

        $plans = new Plans;
        $plans->planname = $req->planname;
        $plans->price = $req->price;
        $plans->plan_id = $req->plan_id;
        $plans->features = json_encode($features);
        $plans->is_active = $is_active;

        $plans->save(); 
        return redirect()->route('view_plans');   
    }
    public function customers_pdf()
    {
        $table = new Learners;
        $learners = $table->get();
        $users = ['users' => $learners];
        $pdf = PDF::loadView('admin.portal.customers_view_all_pdf', $users);
        $pdf->download('All Learners.pdf');
        return $pdf->stream('All learners.pdf');
    }

    public function customers_xls()
    {
        return Excel::download(new all_customers_xls, 'customers.xlsx');
    }
}
