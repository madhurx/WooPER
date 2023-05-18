<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Learners;
use PDF;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\all_customers_xls;


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
        return view('admin.portal.view_plans');
    }
    public function create_plans()
    {
        return view('admin.portal.create_plans');
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
