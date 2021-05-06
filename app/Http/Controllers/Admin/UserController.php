<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoordinatorTeacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function parentChilds($parent_id){
        $childrenUsers = User::where('parent_id' , $parent_id)->where('type' , 4)->get();
//        dd($childrenUsers);
        return view('admin.users.childrens.index', compact('childrenUsers'));
    }
    public function teacherIndex(){
        $teacherUsers = User::with('coordinator')->where('type' , 2)->get();
        return view('admin.users.teachers.index', compact('teacherUsers'));
    }
    public function teacher_student($teacher_id){
        $childrenUsers = User::where('teacher_id' , $teacher_id)->where('type' , 4)->get();
        return view('admin.users.childrens.index', compact('childrenUsers'));
    }
    public function teacherCreate(User $user){
        $users = User::where('type',1)->get();
        return view('admin.users.teachers.create' , compact('users'));
    }

    public function childrenIndex(){
        $childrenUsers = User::with('teacher')->where('type' , 4)->get();
        return view('admin.users.childrens.index', compact('childrenUsers'));
    }

    public function childrenCreate(User $user){
        $users = User::where('type',2)->get();
        $parents = User::where('type' , 3)->get();
        return view('admin.users.childrens.create' , compact('users','parents'));
    }

    public function parentIndex(){
        $parentUsers = User::where('type' , 3)->get();
        return view('admin.users.parents.index', compact('parentUsers'));
    }
    public function coordinatorIndex(){
        $coordinators = User::where('type' , 1)->get();
//        dd($coordinators);

        return view('admin.users.coordinators.index', compact('coordinators'));
    }


    public function parentCreate(User $user){
        $users = User::all();
        return view('admin.users.parents.create' , compact('users'));
    }
    public function coordinatorCreate(User $user){
        $users = User::all();
        return view('admin.users.coordinators.create' , compact('users'));
    }
    public function coordinateTeachers($coordinate_id){
        $teacherUsers = User::where('coordinator_id' , $coordinate_id)->where('type' , 2)->get();
//        $teacherUsers = User::with('coordinator')->where('type' , 2)->get();
        return view('admin.users.teachers.index', compact('teacherUsers'));
    }


    public function store(Request $request){
//    dd($request->all());
       $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'type' => 'required',
            'parent_id' => 'required_if:type,4',
            'teacher_id' => 'required_if:type,4',
            'coordinator_id' => 'required_if:type,2',
            'age' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'password' => 'required|min:6',
            ]);


            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->age = $request->age;
            $user->gender = $request->gender;
            $user->type = $request->type;
            $user->phone = $request->phone;
           if($request->type == 2) {
               $user->coordinator_id = $request->coordinator_id;
               $user->coordinator_name = User::where('id', $request->coordinator_id)->pluck('name')->first();
           }
           if($request->type == 4){
               $user->parent_id = $request->parent_id;
           }
           if($request->type == 4){
               $user->teacher_id = $request->teacher_id;
           }
            $user->password = Hash::make($request->password);
//             $user->createAsStripeCustomer();
            $user->save();

            if($user && $request->type == 2){
               CoordinatorTeacher::create([
                   'coordinator_id' => $request->coordinator_id,
                   'teacher_id' =>$user->id,
               ]);
            }


            return redirect()->back()->with('success','User has been added successfully');
    }

    public function edit(User $user, $id){
        $user = $user::find($id);
        return view('admin.users.childrens.edit' , compact('user'));

    }

    public function update(Request $request, $id){
//        dd($request->all());
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required|email|unique:users',
//            'type' => 'required',
////            'coordinator_name' => ['nullable'],
//            'age' => 'required',
////            'password' => 'required|min:6',
//             ]);

             $user = User::find($request->id);
//             dd($user);
             $user->name = $request->name ?? $user->name;
             $user->email = $request->email ?? $user->email;
             $user->age = $request->age ?? $user->age;
             $user->type = $request->type ?? $user->type;
             $user->password = isset($request->password)?Hash::make($request->password):$user->password;
             $user->save();
             return redirect()->back()->with('success','User has been updated successfully');
     }


}
