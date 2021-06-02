<?php
namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\class_session;
use App\Models\CoordinatorTeacher;
use App\Models\Interest;
use App\Models\studenEducation;
use App\Models\teacherexp;
use App\Models\teacherModel;
use App\Models\User;
use App\Models\user_interest;
use App\Models\userLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Services\VideoStreamingService;
use function GuzzleHttp\Promise\all;

class teacherController extends Controller
{

    protected VideoStreamingService $videoStreamingService;


    public function __construct(VideoStreamingService $videoStreamingService)
    {
        $this->videoStreamingService = $videoStreamingService;
    }

    public function TeacherIndex()
    {
        $user=Auth::user();
        $interests = Interest::where('type', 'interest')->get();
        $Hobbies = Interest::where('type', 'hobbies')->get();
        $hobbyUser = user_interest::where(['user_id'=>Auth::id(),'type'=>'hobby'])->get();
        $interestUser = user_interest::where(['user_id'=>Auth::id(),'type'=>'interest'])->get();
        $userEducation = teacherModel::where('user_id',$user->id)->get();
        $userExp = teacherexp::where('user_id',$user->id)->get();
        $userLanuage   = userLanguage::where('user_id',$user->id)->get();
        $teacherSessions = class_session::where('teacher_id',Auth::id())->where('status','pending')->get();
        return view('home.teacher_profile',compact('user','userEducation','userLanuage','userExp','Hobbies','interests','hobbyUser','interestUser','teacherSessions'));
    }

    public function edit_user_about(Request $re)
    {
        $user = Auth::user();
        $user->about = $re->about;
        $user->save();
        return redirect('/teacher');
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

    public function addEducation(Request $re)
    {
        $teacherEducation = teacherModel::create([
            'user_id'=>Auth::id(),
            'institute'=>$re->institute,
            'degree'=>$re->degree,
        ]);
        return redirect('/teacher');
    }

    public function addExpe(Request $re)
    {
        $teacherEducation = teacherexp::create([
            'user_id'=>Auth::id(),
            'school'=>$re->school,
            'designation'=>$re->designation,
            'status'=>'Present'
        ]);
        return redirect('/teacher');
    }

    public function community()
    {
        $userId = Auth::id();
        $userCords = User::where('id',Auth::user()->coordinator_id)->get();
        $teachers = User::where('id','!=',$userId)->where('type','2')->get();

        if($userCords == Null)
        {
            $userCords = [];
        };
        $classId = DB::table('student_classes')->where('teacher_id',Auth::id())->distinct()->get();
        $array = [];
        foreach($classId  as $class)
        {
            array_push($array,$class->id);
//            $array.push($class->id);
        }
        $users = [];
        if(isset($classId[0]->id)) {
            $users = DB::table('student_class_students')
                ->whereIn('class_id', ['' . $classId[0]->id.''])
                ->join('users', 'users.id', '=', 'student_class_students.student_id')
                ->get();

        }

        return  view('home.community',compact('userCords','users','teachers'));

    }

    public function session_create(Request $re)
    {
//        dd();
        $data = $re->all();
        $data['status'] = 'pending';
        $data['teacher_id']=/var/www/html Auth::id();
     $dd =  class_session::create($data);
        return redirect('/teacher');

    }

    public function session_start(Request $re)
    {
        $session = class_session::find($re->session_id);
        $session->status = 'start';
        $session->save();
        $response = $this->videoStreamingService->createRoom('bilal');
        $response = $this->videoStreamingService->joinRoom('bilal');
        return view('videoStreaming.room',compact('response'));
    }
}
