@extends('layouts.app')
@section('content')
    <section class="teacher_section add_profile_bg_teacher">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="profile_section text-center">
                        @if(Illuminate\Support\Facades\Auth::id() == $user->id)
                            <i class='bx bxs-pencil' id="edit_user_profile_image"></i>
                        @endif
                        @if($user->profile_pic == '')
                            <img src="assets/images/teacher_profile.png" class="img-fluid">
                        @else
                            <img src="svg/{{$user->profile_pic}}" class="img-fluid">
                        @endif
                        <h3>{{$user->name}}</h3>
                        <a href="#">{{$user->email}}</a>
                        <button type="button" class="contact_btn">CONTACT ME !</button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="teacher_data">
                        <div class="about_teacher">
                            @if(Illuminate\Support\Facades\Auth::id() == $user->id)
                                <div class="edit_icon">
                                    <i class='bx bxs-pencil' id="edit_teacher_about"></i>
                                </div>
                            @endif
                            <h3>ABOUT ME</h3>
                            <div id="about_user">
                                <p class="m-0">{{$user->about}}</p>
                            </div>
                            <div id="edit_about">
                                <form action="{{route('edit_user_about')}}" method="POST">
                                    @csrf
                                    <div class="cntcn_inpp">
                            <textarea name="about" class="form-control">
                            {{$user->about}}
                            </textarea>
                                    </div>
                                    <button class="form-control btn btn-primary" type="submit" >Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="per_info">
                                <div class="per_info_head d-flex justify-content-between">
                                    <h3>PERSONAL INFORMATION</h3>
                                    @if(Illuminate\Support\Facades\Auth::id() == $user->id)
                                        <i class='bx bxs-pencil' id="edit_teacher_profile"></i>
                                    @endif
                                </div>
                                <div class="info_detail">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h3>NAME :</h3>
                                            <h3>AGE :</h3>
                                            <h3>ADDRESS :</h3>
                                            <h3>EMAIL :</h3>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="info_detail" id="edit_teacher_profile_data">
                                                <p>{{$user->name}}</p>
                                                <p>{{$user->age}}</p>
                                                <p>@if($user->address == Null)
                                                        XXXXXXXX-XXXX-XXXX
                                                    @else
                                                        {{$user->address}}
                                                    @endif
                                                </p>
                                                <p>{{$user->email}}</p>
                                                <p>{{$user->phone}}</p>

                                                <p>{{$user->gender}}</p>
                                            </div>
                                            <div class="info_detail" id="teacher_form_user">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intrest_info">
                                <div class="per_info_head pink_head d-flex justify-content-between">
                                    <h3>INTEREST & SKILLS</h3>
                                    @if(Illuminate\Support\Facades\Auth::id() == $user->id)
                                        <i class='bx bxs-pencil' onclick="add_inrest()"></i>
                                    @endif
                                </div>
                                <div class="row">
                                    @foreach($interestUser as $interest)
                                        <div class="col-md-3">
                                            <div class="intrst_img">
                                                <img src="assets/images/equation.png" class="img-fluid">
                                                <p>{{$interest->interest}}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="edu_sec">
                                <div class="main_edu">
                                    <div class="edu_img">
                                        <img src="assets/images/mortarboard.png" class="img-fluid">
                                    </div>
                                    <div class="edu_data">
                                        <h3>EDUCATION</h3>
                                        @foreach($userEducation as $useredu)
                                            <h5>{{$useredu->degree}}</h5>
                                            <p>{{$useredu->institute}}</p>
                                            <p>September 2015 - Present</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="main_edu add_edu_mrgin">
                                    <div class="edu_img">
                                        <img src="assets/images/experience.png" class="img-fluid">
                                    </div>
                                    <div class="edu_data">
                                        <h3>WORK EXPERIENCE</h3>
                                        @foreach($userExp as $exp)
                                            <h5>{{$exp->designation}} </h5>
                                            <p>{{$exp->school}}</p>
                                            <p>December 2015 - {{$exp->status}}</p>
                                        @endforeach
                                    </div>
                                </div>
                                @if(Illuminate\Support\Facades\Auth::id() == $user->id)
                                    <div class="edit_icon">
                                        <i class='bx bxs-pencil' id="edit_teacher_education"></i>
                                    </div>
                                    <div class="">
                                        <i class='bx bxs-pencil' id="edit_teacher_expernce"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="languag_sec">
                                <div class="per_info_head yellow_head d-flex justify-content-between">
                                    <h3>LANGUAGE PROFICIENCY</h3>
                                    @if(Illuminate\Support\Facades\Auth::id() == $user->id)
                                        <i class='bx bxs-pencil' onclick="add_language()"></i>
                                    @endif
                                </div>
                                <div class="row">
                                    @foreach($userLanuage as $userL)
                                        <div class="col-md-6">
                                            <div class="languag_main">
                                                <img src="assets/images/translator.png" class="img-fluid">
                                                <div class="languag_name">
                                                    <h4>{{$userL->language}}</h4>
                                                    <p>{{$userL->level}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="languag_sec">
                                <div class="per_info_head yellow_head d-flex justify-content-between">

                                    <button class="btn btn-primary" id="create_session">create Session</button>
                                    @foreach($teacherSessions as $userL)
                                        <div class="col-md-6">
                                            <div class="languag_main">
                                                <div class="languag_name">
                                                    <h4>{{$userL->time}}</h4>
                                                    <p>{{$userL->starting}}</p>
                                                    <form action="{{route('session_start')}}" method="POST">
                                                        <input type="hidden" name="session_id" value="{{$userL->id}}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary" id="start_seeeion">Start Session</button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="modal" tabindex="-1" role="dialog" id="edit_Modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal_content">

                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="session_add_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal_content">
                    <form action="{{route('session_create')}}" method="POST" >
                        <input type="hidden" value="true" name="teacher_check">
                        @csrf
                        <div class="cntcn_inp">
                       <input class="form-control" type="text" name="session_name" placeholder="unique name">

                        </div>
                        <div class="cntcn_inp">
                            <input class="form-control" type="date" name="starting" placeholder="starting date">

                        </div>
                        <div class="cntcn_inp">
                            <input class="form-control" type="date" name="ending" placeholder="unique name">

                        </div>
                        <div class="cntcn_inp">
                            <input class="form-control" type="time" name="time" placeholder="unique name">

                        </div>

                        <button type="submit" class="btn btn-primary" > save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="user_interest1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Hobbies/Interest</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal_content">
                    <form action="{{route('user_interest')}}" method="POST" >
                        <input type="hidden" value="true" name="teacher_check">
                        @csrf
                        <div class="cntcn_inp">
                            <select class="form-control" name="hobby">
                                <option value="">Hobby</option>
                                @foreach($Hobbies as $Hobby)
                                    <option value="{{$Hobby->name}}">{{$Hobby->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="cntcn_inp">
                            <select class="form-control" name="interest">
                                <option value="">Interest</option>
                                @foreach($interests as $interest)
                                    <option value="{{$interest->name}}">{{$interest->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <button type="" class="btn btn-primary" > save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="teacher_education">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal_content_expe">
                    <form action="{{route('teacher_education')}}" method="POST" >
                        @csrf
                        <div class="cntcn_inp">
                            <input name="institute" type="text" class="form-control" placeholder="Institute">

                        </div>
                        <div class="cntcn_inp">
                            <input name="degree" class="form-control" type="text" placeholder="Degree">

                        </div>
                        <button type="" class="btn btn-primary" > save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="teacher_education12">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal_content_expe">
                    <div class="cntcn_inp"><input type="file" class="form-control" name="p_image" id="profile-imgs" ></div>
                </div>
            </div>
        </div>
    </div>
@stop
