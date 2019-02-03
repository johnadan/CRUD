<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('layouts.admindashboard');
        // if(Auth::user()->isAdmin === 1){
        //     return view('layouts.admindashboard');
        // }
        // else{
            //return view('layouts.dashboard');
        //}
        
    }
    
}
