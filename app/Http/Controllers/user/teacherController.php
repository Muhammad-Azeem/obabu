<?php
namespace App\Http\Controllers\user;


use App\Http\Controllers\Controller;
use App\Models\Interest;
use App\Models\studenEducation;
use App\Models\User;
use App\Models\user_interest;
use App\Models\userLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class teacherController extends Controller
{
    public function TeacherIndex()
    {
        $user=Auth::user();
        $interests = Interest::where('type', 'interest')->get();
        $Hobbies = Interest::where('type', 'hobbies')->get();
        $hobbyUser = user_interest::where(['user_id'=>Auth::id(),'type'=>'hobby'])->get();
        $interestUser = user_interest::where(['user_id'=>Auth::id(),'type'=>'interest'])->get();
        $userEducation = studenEducation::where('user_id',$user->id)->first();
        $userLanuage   = userLanguage::where('user_id',$user->id)->get();
        return view('home.teacher_profile',compact('user','userEducation','userLanuage','Hobbies','interests','hobbyUser','interestUser'));
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
        return redirect('/teacher');
    }
}
