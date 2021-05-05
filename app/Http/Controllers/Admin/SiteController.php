<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function dashboard(){
        $coordinatorcount = User::where('type', 1)->count();
        $teachercount = User::where('type', 2)->count();
        $childrencount = User::where('type', 4)->count();
        $parentcount = User::where('type', 3)->count();
        $subscribercount = Package::whereNotNull('is_session_count')->count();
        $packagecount = Package::whereNull('is_session_count')->count();

        return view('admin.dashboard', compact('packagecount','subscribercount','parentcount','childrencount','teachercount','coordinatorcount'));
    }
}
