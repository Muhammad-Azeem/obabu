<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function postregister(Request $request){

        dd($request->all());
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->createAsStripeCustomer();
        $user->save();
//        return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }
}
