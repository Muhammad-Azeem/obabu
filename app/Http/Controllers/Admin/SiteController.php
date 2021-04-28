<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function dashboard(){
        $teachercount = User::where('type', 'teacher')->count();
        $childrencount = User::where('type', 'children')->count();
        $parentcount = User::where('type', 'parent')->count();
        $subscribercount = Package::whereNotNull('is_session_count')->count();
        $packagecount = Package::whereNull('is_session_count')->count();

        return view('admin.dashboard', compact('packagecount','subscribercount','parentcount','childrencount','teachercount',));
    }
}
