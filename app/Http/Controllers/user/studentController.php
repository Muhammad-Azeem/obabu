<?php

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Interest;
use App\Models\studenEducation;
use App\Models\StudentClassStudents;
use App\Models\User;
use App\Models\user_interest;
use App\Models\userLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class studentController extends Controller
{

    public function studentProfile()
    {
        $user=Auth::user();
        $interests = Interest::where('type', 'interest')->get();
        $Hobbies = Interest::where('type', 'hobbies')->get();
        $hobbyUser = user_interest::where(['user_id'=>Auth::id(),'type'=>'hobby'])->get();
        $interestUser = user_interest::where(['user_id'=>Auth::id(),'type'=>'interest'])->get();
        $userEducation = studenEducation::where('user_id',$user->id)->first();
        $userLanuage   = userLanguage::where('user_id',$user->id)->get();
        return view('home.student_profile',compact('user','userEducation','userLanuage','Hobbies','interests','hobbyUser','interestUser'));
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
        if($re->id == "")
        {
            $userEducation = studenEducation::create([
                'user_id'=>Auth::id(),
                'school'=>$re->school_student,
                'class'=>$re->class_student
            ]);
        }else{
            $userEducation = studenEducation::find($re->id);
            $userEducation->school = $re->school_student;
            $userEducation->class  = $re->class_student;
            $userEducation->save();
        }
       return redirect('/student');
    }

    public function studentCommunity()
    {
        $authUser = User::with('student_classes','student_classes.student','student_classes.class','teacher')->where('id',Auth::id())->first();
        $classId = StudentClassStudents::where('student_id',Auth::id())->distinct('class_id')->pluck('class_id');
        $users = User::with('student_classes','student_classes.student','student_classes.class')->where('id',Auth::id())->get();

        $user_ids = StudentClassStudents::whereIn('class_id',$classId)->where('student_id','!=',Auth::id())->distinct('student_id')->pluck('student_id');
        $userst =  User::with('student_classes','student_classes.student','student_classes.class')->whereIn('id',$user_ids)->get();
//        $users = DB::table('student_class_students')
//            ->whereIn('class_id', [''.$classId[0]->class_id.''])
//            ->join('users', 'users.id', '=', 'student_class_students.student_id')
//            ->get();
//        $userst = DB::table('student_classes')
//            ->where('student_classes.id', $classId[0]->class_id)
//            ->join('users', 'users.id', '=', 'student_classes.teacher_id')
//            ->distinct()
//            ->get();
//        dd($authUser->teacher);

        return view('home.community_student',compact('users','userst','authUser'));
    }


}
