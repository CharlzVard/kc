<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bouncer;

class HomeController extends Controller
{
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
				//Bouncer::assign('admin')->to(\Auth::user());
				//if(Bouncer::is(\Auth::user())->an('admin')) return "yre admin";
        return view('home');
    }
}
