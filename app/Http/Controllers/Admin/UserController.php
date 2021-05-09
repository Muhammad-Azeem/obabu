<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoordinatorTeacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function edit_user($role = '' , $type = '', $id=0 ){
            $user = User::find($id);
        $parent_user = [];
        $parent_user_type = '';
//            $parents = User::where('type' , 3);
            if($type == 2){
                $parent_user = User::where('type' ,1)->get();
                $parent_user_type = 'coordinator';
            }
            if($type == 4){
                $parent_user = User::where('type' ,2)->get();
                $parent_user_type = 'teacher';
            }
            if($type == 3){
                $parent_user = User::where('type' ,4)->where( function($query) use ($id) {
                    return $query
                        ->where('parent_id', '=', null)
                        ->orWhere('parent_id', '=', $id);
                       })->get();
                $parent_user_type = 'Children';
            }


//            dd($parent_user_type.'_id' , $parent_user);

        return view('admin.users.edit' , compact('user' , 'parent_user' ,'parent_user_type' ,'type' , 'id' , 'role'));


    }
    public function update_user(Request $request){
//        dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required',
//            'type' => 'required',
//            'parent_id' => 'required_if:type,4',
//            'teacher_id' => 'required_if:type,4',
//            'coordinator_id' => 'required_if:type,2',
            'age' => 'required',
//            'gender' => 'required',
            'phone' => 'required',
            'password' => 'sometimes|confirmed',
//            'password_confirmation' => 'required_with:password|same:password|min:8'
        ]);


        $user = User::find($request->id);
        $user->name = $request->name ?? $user->name;
        $user->email = $request->email ?? $user->email;
        $user->age = $request->age ?? $user->age;
        $user->type = $request->type ?? $user->type;
        $user->phone = $request->phone ?? $user->phone;
        if($request->type == 2){
            if($request->coordinator_id != null) {
                $user->coordinator_id = $request->coordinator_id;
                $user->coordinator_name = User::where('id', $request->coordinator_id)->pluck('name')->first();
                CoordinatorTeacher::where('teacher_id', $user->id)->update(['coordinator_id' => $request->coordinator_idm,]);
                }
            }
        if($request->type == 3){
            User::where('type' , 4)->where('parent_id' , $user->id)->update(['parent_id' => NULL]);
            if(isset($request->childrens)){
                foreach ($request->childrens as $children_id){
                        User::where('id' , $children_id)->update(['parent_id' => $user->id]);
                }
            }
        }
        if($request->type == 4){
              if($request->teacher_id != null){
                  $user->teacher_id = $request->teacher_id;
              }
        }

        $user->password = isset($request->password)?Hash::make($request->password):$user->password;
        $user->save();
        return redirect()->back()->with('success','User has been updated successfully');
    }
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
