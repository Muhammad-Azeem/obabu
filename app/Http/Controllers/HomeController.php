<?php

namespace App\Http\Controllers;

use App\Models\Package;
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
    public function payment()
    {
        return view('home.payment');
    }
    public function membership()
    {
        $membership = Package::with('options')->whereNull('is_session_count')->get();
        $session = Package::whereNotNull('is_session_count')->get();
        return view('home.membership',compact('membership','session'));
    } public function discount_membership()
{
    $membership = Package::with('options')->whereNull('is_session_count')->get();
    $session = Package::whereNotNull('is_session_count')->get();

    return view('home.membership_discount',compact('membership','session'));
}
}
