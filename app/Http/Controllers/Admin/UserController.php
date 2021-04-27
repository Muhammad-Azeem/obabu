<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function teacherIndex(){
        $teacherUsers = User::where('type' , 'teacher')->get();
        return view('admin.users.teachers.index', compact('teacherUsers'));
    }
    
    public function teacherCreate(User $user){
        $users = User::all();
        return view('admin.users.teachers.create' , compact('users'));
    }

    public function childrenIndex(){
        $childrenUsers = User::where('type' , 'children')->get();
        return view('admin.users.childrens.index', compact('childrenUsers'));
    }
    
    public function childrenCreate(User $user){
        $users = User::all();
        return view('admin.users.childrens.create' , compact('users'));
    }
    
    public function parentIndex(){
        $parentUsers = User::where('type' , 'parent')->get();
        return view('admin.users.parents.index', compact('parentUsers'));
    }

    
    public function parentCreate(User $user){
        $users = User::all();
        return view('admin.users.parents.create' , compact('users'));
    }


    public function store(Request $request){
        
       $request->validate([
            'name' => ['required'],
            'email' => 'required|email|unique:users',
            'type' => ['required'],
            'coordinator_name' => ['nullable'],
            'age' => ['required'],
            'password' => 'required|min:6',
            ]);

           
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->age = $request->age;
            $user->type = $request->type;
            $user->coordinator_name = $request->coordinator_name;
            $user->password = Hash::make($request->password);
            // $user->createAsStripeCustomer();

            $user->save();

            
            return redirect()->back()->with('success','User has been added successfully');
    }

    public function edit(User $user, $id){ 
        $user = $user::find($id);
        return view('admin.users.childrens.edit' , compact('user'));

    }

    public function update(Request $request, $id){
        
        $request->validate([
             'name' => ['required'],
             'email' => 'required|email|unique:users',
             'type' => ['required'],
             'coordinator_name' => ['nullable'],
             'age' => ['required'],
             'password' => 'required|min:6',
             ]);
 
             $user = new User();
             $user->name = $request->name;
             $user->email = $request->email;
             $user->age = $request->age;
             $user->type = $request->type;
             $user->coordinator_name = $request->coordinator_name;
             $user->password = Hash::make($request->password);
             // $user->createAsStripeCustomer();
             $user->save();
             return redirect()->back()->with('success','User has been upated successfully');
     }


}
