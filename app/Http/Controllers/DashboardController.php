<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use DB;
use App\tes;

class DashboardController extends Controller
{
    public function index(request $request)
    {
    	$email=$request->session()->get('email');
    	$KTP=$request->session()->get('KTP');
    	return view('dashboards.index',['KTP' => $KTP,'email' => $email]);
        //  $tes = DB::connection('mysql_test')->select("SELECT * FROM hari where id='1'");
        // // $tes = tes::find(1);
        // dd($tes);
    }

    public function admin(request $request)
    {
    	$email=$request->session()->get('email');
    	$KTP=$request->session()->get('KTP');
    	return view('dashboards.admin',['KTP' => $KTP,'email' => $email]);
    }
}
