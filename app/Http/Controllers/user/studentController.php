<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\studenEducation;
use App\Models\User;
use App\Models\userLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class studentController extends Controller
{

    public function studentProfile()
    {
        $user=Auth::user();
        $userEducation = studenEducation::where('user_id',$user->id)->first();
        $userLanuage   = userLanguage::where('user_id',$user->id)->get();
        return view('home.student_profile',compact('user','userEducation','userLanuage'));
    }

    public function updateProfile(Request $re)
    {
        $user = User::find(Auth::id());
        $user->name = $re->name;
        $user->address = $re->address;
        $user->phone   = $re->phone;
        $user->email = $re->email;
        $user->age   = $re->age;
        $user->gender = $re->gender;
        $user->save();
        return redirect('/student');
    }

    public function updateEducation(Request $re)
    {
       $userEducation = studenEducation::find($re->id);
       $userEducation->school = $re->school_student;
       $userEducation->class  = $re->class_student;
       $userEducation->save();
       return redirect('/student');
    }
}
