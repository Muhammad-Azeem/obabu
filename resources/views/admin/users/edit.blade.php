@extends('layouts.master.master-admin')
@section('header')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <style>
        .kt-badge--success {
            background: #1BB580 !important;
        }

    </style>
@stop
<style>

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #53f54e;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #53f54e;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

</style>
@section('content')


    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Edit {{$role}} : {{ $user->name }}
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" action="{{ route('update_user', $user->id) }}" method="post" id="kt_form_1">
                @csrf
                <input type="hidden" value="{{$type}}" name="type" >
                <input type="hidden" value="{{$role}}" name="role" >
                <input type="hidden" value="{{$user->id}}" name="user_id" >

                <div class="kt-portlet__body">
                    <div class="kt-form__content">
                        <div class="kt-alert m-alert--icon alert alert-danger mt-2 kt-hidden" role="alert" id="kt_form_1_msg">
                            <div class="kt-alert__icon">
                                <i class="la la-warning"></i>
                            </div>
                            <div class="kt-alert__text">
                                Oh snap! Change a few things up and try submitting again.
                            </div>
                            <div class="kt-alert__close">
                                <button type="button" class="close" data-close="alert" aria-label="Close">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('name') border-danger @enderror" >Name *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group'>
                                <input type='hidden' class="form-control" name="id" value="{{$user->id}}"/>
                                <input type='text' class="form-control @error('name') border-danger @enderror"  name="name" value="{{$user->name}}"/>
                                @error('name')
                                <div class="alert alert-danger mt-2"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('email') border-danger @enderror">Email *</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control" name="email" value="{{$user->email}}" placeholder="Enter your email">
                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                            @error('email')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('type') border-danger @enderror">Type *</label>
                        <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                            <select class="form-control column_select " disabled id="column_select" name="type" >
                                <option selected value="none">Select data type</option>
                                <option value="1" {{ ($user->type) == '1' ? 'selected' : '' }} >Coordinator</option>
                                <option value="2" {{ ($user->type) == '2' ? 'selected' : '' }}>Teacher</option>
                                <option value="3" {{ ($user->type) == '3' ? 'selected' : '' }}>Parent</option>
                                <option value="4" {{ ($user->type) == '4' ? 'selected' : '' }}>Children</option>
                            </select>
                            @error('type')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                            <span class="form-text text-muted">Please select an option.</span>
                        </div>
                    </div>

                    @if($type == 2 || $type == 4 )
                    <div class="form-group row box ">
                        <label class="col-form-label col-lg-3 col-sm-12 @error($parent_user_type.'_id') border-danger @enderror ">Select {{$parent_user_type}}  *</label>
                        <div class="col-lg-9 col-md-9 box col-sm-12 form-group-sub">
                            <select class="form-control box " required id="" name="{{$parent_user_type}}_id" >

                                @foreach($parent_user as $data)
                                    <option @if(($parent_user_type.'_id') == $data->id) selected @endif  value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                            @error($parent_user_type.'_id')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                            <span class="form-text text-muted">Please select an {{$parent_user_type}}.</span>
                        </div>


                    </div>
                    @endif

                    @if($type == 3 )
                        <div class="form-group row box ">
                            <label class="col-form-label col-lg-3 col-sm-12 ">Add/Remove {{$parent_user_type}}  </label>
                            <div class="col-lg-9 col-md-9 box col-sm-12 form-group-sub">
                                <table class="table table-responsive table-sm table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>Child Name</th>
                                            <th>Child Email</th>
                                            <th>Add/Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($parent_user as $data)
                                    <tr>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->email}}</td>

                                        <td>
                                            <label class="switch">
                                                <input value="{{$data->id}}" type="checkbox" name="childrens[]" @if($data->parent_id == $id) checked @endif>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <span class="form-text text-muted">Please select an {{$parent_user_type}}.</span>
                            </div>


                        </div>
                    @endif



                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('age') border-danger @enderror ">Age *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group'>
                                <input type='number' class="form-control" name="age" value="{{$user->age}}" />
                            </div>
                            @error('age')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('phone') border-danger @enderror ">Phone *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group'>
                                <input type='number' class="form-control" name="phone" value="{{$user->phone}}" />
                            </div>
                            @error('phone')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>




                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12  @error('password') border-danger @enderror">Password </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group'>
                                <input type='text' class="form-control " name="password"   />
                            </div>
                            @error('password')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('password_confirmation') border-danger @enderror ">Confirm Password </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group'>
                                <input type='text' class="form-control " name="password_confirmation"   />
                            </div>
                            @error('password_confirmation')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            @endsection

            @push('scripts')
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script>
                    // $(document).ready(function(){
                    //     $(".column_select").change(function(){
                    //         $(this).find("option:selected").each(function(){
                    //             var optionValue = $(this).attr("value");
                    //             if(optionValue){
                    //                 $(".box").not("." + optionValue).hide();
                    //                 $("." + optionValue).show();
                    //             } else{
                    //                 $(".box").hide();
                    //             }
                    //         });
                    //     }).change();
                    // });
                    $(document).ready(function() {
                        var optarray = $("#coordinator_name").children('option').map(function() {
                            return {
                                "value": this.value,
                                "option": "<option value='" + this.value + "'>" + this.text + "</option>"
                            }
                        })

                        $("#column_select").change(function() {
                            $("#coordinator_name").children('option').remove();
                            var addoptarr = [];
                            for (i = 0; i < optarray.length; i++) {
                                if (optarray[i].value.indexOf($(this).val()) > -1) {
                                    addoptarr.push(optarray[i].option);
                                }
                            }
                            $("#coordinator_name").html(addoptarr.join(''))
                        }).change();
                    })
                </script>
