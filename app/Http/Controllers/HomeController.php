<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }
    public function sales()
    {
        return view('home.sales');
    }
    public function about_us()
    {
        return view('home.about_us');
    }
    public function membership()
    {
        return view('home.membership');
    } public function discount_membership()
    {
        return view('home.membership_discount');
    }
}
