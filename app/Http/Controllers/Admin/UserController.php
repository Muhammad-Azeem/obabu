<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function teacherListing(){
        $users = User::get();
        return view('admin.teacher-listing', compact('users'));
    }
    public function childrenListing(){
        $users = User::get();
        return view('admin.children-listing', compact('users'));
    }
    public function parentListing(){
        $users = User::get();
        return view('admin.parent-listing', compact('users'));
    }
}
