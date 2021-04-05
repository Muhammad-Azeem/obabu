<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function teacherListing(){
        $teacherUsers = User::get();
        return view('admin.users.teacher-listing', compact('teacherUsers'));
    }
    public function childrenListing(){
        $childrenUsers = User::get();
        return view('admin.users.children-listing', compact('childrenUsers'));
    }
    public function parentListing(){
        $parentUsers = User::get();
        return view('admin.users.parent-listing', compact('parentUsers'));
    }
}
