@extends('layouts.app')
@section('maincontent')
    <section class="teacher_section" style="margin-bottom: 50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="profile_section profile_section2 text-center">
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
                        <!-- <button type="button" class="contact_btn">CONTACT ME !</button> -->
                    </div>
                    @if($user->type == 2)
                        <div class="profile_section change_profie_clr text-center">
                            <img src="assets/images/teacher3.png" class="img-fluid">
                            <h3>{{isset($user->parent)??$user->parent->name}}</h3>
                            <a href="#">{{isset($user->parent)??$user->parent->name}}</a>

                            {{--                    <button type="button" class="contact_btn">Acount Setting</button>--}}
                        </div>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="teacher_info">
                        <div class="tch_info_head d-flex justify-content-between">
                            <h3>PERSONAL INFORMATION</h3>
                            @if(Illuminate\Support\Facades\Auth::id() == $user->id)
                                <i class='bx bxs-pencil' id="edit_user_profile"></i>
                            @endif
                        </div>
                        <div class="tch_details">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="info_detail">
                                        <h3>NAME :</h3>
                                        <h3>FATHER NAME :</h3>
                                        <h3>MOTHER NAME :</h3>
                                        <h3>ADDRESS :</h3>
                                        <h3>EMAIL :</h3>
                                        <h3>MOBILE NUMBER:</h3>
                                        <h3>AGE :</h3>
                                        <h3>GENDER :</h3>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="info_detail" id="edit_user_profile_data">
                                        <p>{{$user->name}}</p>
                                        <p>N/A</p>
                                        <p>N/A</p>
                                        <p>@if($user->address == Null)
                                                XXXXXXXX-XXXX-XXXX
                                            @else
                                                {{$user->address}}
                                            @endif
                                        </p>
                                        <p>{{$user->email}}</p>
                                        <p>{{$user->phone}}</p>
                                        <p>{{$user->age}}</p>
                                        <p>{{$user->gender}}</p>
                                    </div>
                                    <div class="info_detail" id="profile_form_user">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intrest_info2">
                        <div class="per_info_head _main_image_haed_ad d-flex justify-content-between">
                            <h3>INTEREST & SKILLS</h3>
                            @if(Illuminate\Support\Facades\Auth::id() == $user->id)
                                <i class='bx bxs-pencil' onclick="add_inrest()"></i>
                            @endif
                            <img src="assets/images/tble_top.png" class="intrest_poision">
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
                <div class="col-md-5">
                    <div class="hobbies_sections">
                        <div class="hobbies">
                            <h3>HOBBIES     @if(Illuminate\Support\Facades\Auth::id() == $user->id)
                                    <i class='bx bxs-pencil' onclick="add_inrest()"></i>
                                @endif</h3>
                            <div class="main_hobbies_images">

                                <div class="images_hobby">
                                    @foreach($hobbyUser as $hobby)
                                        <div class="img_hobby text-center blue_color">
                                            <img src="assets/images/hobby1.png" class="img-fluid">
                                            <p>{{$hobby->interest}}</p>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="edu_sec edu_sec2">
                        <div class="main_edu">
                            <div class="edu_img">
                                <img src="assets/images/mortarboard.png" class="img-fluid">
                            </div>
                            <div class="edu_data">

                                <h3>EDUCATION
                                    @if(Illuminate\Support\Facades\Auth::id() == $user->id)
                                        <i class='bx bxs-pencil' id="edit_education_student"></i>
                                    @endif
                                </h3>
                                <div id="update_student_data">
                                    @foreach($userEducation as $userEdu)
                                        @if(isset($userEdu->school))
                                            <h5>School : {{$userEdu->school}}</h5>
                                            <h5> Class : {{$userEdu->class}}</h5>
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="languag_sec languag_sec2">
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
                </div>
            </div>
        </div>
    </section>

    <div class="modal" tabindex="-1" role="dialog" id="edit_Modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal_content">

                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="user_interest1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Interest/Hobbies</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal_content">
                    <form action="{{route('user_interest')}}" method="POST" >
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

    <div class="modal" tabindex="-1" role="dialog" id="edit_education">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal_content">
                    <div id="modeling"><form action="{{route('update_student_education')}}" method="POST" >
                            @csrf
                            <input name="id" value="" type="hidden">
                            <div class="cntcn_inp">
                                <input type="text" name="school_student" class="form-control" placeholder="Education">
                            </div>
                            <div class="cntcn_inp">
                                <input type="text" name="class_student" class="form-control" placeholder="standard">
                            </div>
                            <button type="" class="btn btn-primary" > save</button>
                        </form>
                    </div>
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

