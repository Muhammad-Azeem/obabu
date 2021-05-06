<?php
namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Interest;
use App\Models\studenEducation;
use App\Models\teacherexp;
use App\Models\teacherModel;
use App\Models\user_interest;
use App\Models\userLanguage;
use App\Models\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller{

    public function updateLanguage(Request $re)
    {

        if($re->id == "")
        {
            $userLang = userLanguage::create([
                'user_id'=>Auth::id(),
                'language'=>$re->language,
                'level'=>$re->level
            ]);
        }else{
            $userLang = userLanguage::find($re->id);
            $userLang->language = $re->language;
            $userLang->level    = $re->level;
            $userLang->save();
        }
        if(Auth::user()->type == 2)
        {
            return redirect('/teacher');
        }
        return redirect('/student');
    }
    public  function addInterest(Request $re)
    {
        if($re->hobby != "") {
            $interest = user_interest::create([
                'interest' => $re->hobby,
                'user_id' => Auth::id(),
                'type' => 'hobby'
            ]);
        }
        if($re->interest != "") {
            $hobby = user_interest::create([
                'interest' => $re->interest,
                'user_id' => Auth::id(),
                'type' => 'interest'
            ]);
        }
        if($re->teacher_check)
        {
            return redirect('/teacher');
        }
        return redirect('/student');
    }
public function updateProfile(Request $re)
{
    $user = User::find(Auth::user()->id);
    $path = public_path() . '/svg/';
    File::delete($path . $user->avatar);
    $image = $re->file('file');

    $filename = Auth::user()->name.Auth::user()->id. '.' . $image->getClientOriginalExtension();

    $image->move($path, $filename);
    $user->profile_pic = $filename;
    $user->save();


    return "done";
}

public function profile()
{
    $parts = explode('?id=', $_SERVER['REQUEST_URI']);
    $user= User::where('id',$parts[1])->first();

    if($user->type == '2') {
        $interests = Interest::where('type', 'interest')->get();
        $Hobbies = Interest::where('type', 'hobbies')->get();
        $hobbyUser = user_interest::where(['user_id' => Auth::id(), 'type' => 'hobby'])->get();
        $interestUser = user_interest::where(['user_id' => Auth::id(), 'type' => 'interest'])->get();
        $userEducation = teacherModel::where('user_id', $user->id)->get();
        $userExp = teacherexp::where('user_id', $user->id)->get();
        $userLanuage = userLanguage::where('user_id', $user->id)->get();
        return view('home.teacher_profile', compact('user', 'userEducation', 'userLanuage', 'userExp', 'Hobbies', 'interests', 'hobbyUser', 'interestUser'));
    }else{

        $interests = Interest::where('type', 'interest')->get();
        $Hobbies = Interest::where('type', 'hobbies')->get();
        $hobbyUser = user_interest::where(['user_id'=>Auth::id(),'type'=>'hobby'])->get();
        $interestUser = user_interest::where(['user_id'=>Auth::id(),'type'=>'interest'])->get();
        $userEducation = studenEducation::where('user_id',$user->id)->get();
        $userLanuage   = userLanguage::where('user_id',$user->id)->get();
        return view('home.student_profile',compact('user','userEducation','userLanuage','Hobbies','interests','hobbyUser','interestUser'));
    }
    }
}
