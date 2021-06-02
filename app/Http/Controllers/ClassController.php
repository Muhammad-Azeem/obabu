<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use App\Models\StudentClassDays;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClassController extends Controller
{

    public function studentViewClasses($teacher_id){
        $classes = StudentClass::where('teacher_id' , $teacher_id)->get();
        foreach ($classes as $class){
            $class->teacher_name = User::where('id' , $class->teacher_id)->pluck('name')->first();
            $class->days = StudentClassDays::where('class_id' , $class->id)->get();
        }
//        dd($classes);
        return view('admin.classes.index' ,compact('classes'));
    }
    public function index(){
//        $type = auth()->user()->type;
        $classes = StudentClass::all();
        foreach ($classes as $class){
            $class->teacher_name = User::where('id' , $class->teacher_id)->pluck('name')->first();
            $class->days = StudentClassDays::where('class_id' , $class->id)->get();
        }
//        dd($classes);
        return view('admin.classes.index' ,compact('classes'));
    }
    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'teacher_id' => 'required',
//            'date_time' => 'required'
        ],[
            'name.required' =>'Please provide class name to proceed',
            'teacher_id.required'=> 'please select an teacher to proceed',
//            'date_time.required' => 'please'

        ]);
        $date_time_array = [];
//dd($request->date_time);
        foreach ($request->date_time   as $key=>$date){

            if(!$date){
                return redirect()->back()->with('message' , 'Please provide date/time of class to proceed');
            }

            $dateStr = $date.' '.$request->time[$key];
//            dd($dateStr);
            $timestamp = \DateTime::createFromFormat('m/d/Y H:i', $dateStr);
            $day = strtotime($date);
            $day = date('l', $day);
            array_push($date_time_array , array(
                'day' => $day,
                'date_time' => $timestamp,
            ));
        }
//            dd($date_time_array);
//        dd($request->all());
        $student_class = StudentClass::where('id' , $request->class_id)->update([
            'name' => $request->name,
            'teacher_id' => $request->teacher_id,
//            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);
        if($student_class){
            StudentClassDays::where('class_id' , $request->class_id)->delete();
            foreach ($date_time_array as $key=> $date_time){
                StudentClassDays::create([
                    'date_time' => $date_time['date_time'],
                    'day' => $date_time['day'],
                    'class_id' => $request->class_id,
                    'created_at' => carbon::now(),
                    'updated' => carbon::now(),
                ]);
            }
            return redirect('classes/index')->with('message','Class Updated Successfully');
        }
        else{
            return redirect()->back()->with('message','Something went wrong please try again');

        }



    }
    public function edit($class_id){
        $class = StudentClass::find($class_id);
//        dd($class->timings);     not working because of column name
        $class->days = StudentClassDays::where('class_id' , $class->id)->get();
        $teachers = User::where('type' , 2)->get();

        return view('admin.classes.edit', compact('class' , 'teachers' , 'class_id'));
    }
    public function view_timings($class_id){
       $timings = StudentClassDays::where('class_id' , $class_id)->get();

    }

    public function create(){
        $teachers = User::where('type' , 2)->get();
        return view('admin.classes.add' , compact('teachers'));
    }
    public function store(Request $request){
//        dd($request->all());
        $request->validate([
            'name' => 'required',
            'teacher_id' => 'required',
//            'date_time' => 'required'
        ],[
            'name.required' =>'Please provide class name to proceed',
            'teacher_id.required'=> 'please select an teacher to proceed',
//            'date_time.required' => 'please'

        ]);
        $date_time_array = [];

        foreach ($request->date_time   as $key=>$date){

                if(!$date){
                    return redirect()->back()->with('message' , 'Please provide date/time of class to proceed');
                }
            $dateStr = $date.' '.$request->time[$key];
            $timestamp = \DateTime::createFromFormat('m/d/Y H:i', $dateStr);

            $day = strtotime($date);
            $day = date('l', $day);
             array_push($date_time_array , array(
                 'day' => $day,
                 'date_time' => $timestamp,
             ));
        }
    $student_class = StudentClass::create([
        'name' => $request->name,
         'teacher_id' => $request->teacher_id,
        'created_at' => carbon::now(),
        'updated_at' => carbon::now(),
    ]);
    if($student_class){
            foreach ($date_time_array as $key=> $date_time){
                StudentClassDays::create([
                    'date_time' => $date_time['date_time'],
                    'day' => $date_time['day'],
                    'class_id' => $student_class->id,
                    'created_at' => carbon::now(),
                    'updated' => carbon::now(),
                ]);
            }
        return redirect()->back()->with('message','Class Created Successfully');
    }
    else{
        return redirect()->back()->with('message','Something went wrong please try again');

    }


    }
}
