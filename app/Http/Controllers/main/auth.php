<?php
namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;

class auth extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    // function for register user
    public function register()
    {
        return view('auth.signup');
    }
}
