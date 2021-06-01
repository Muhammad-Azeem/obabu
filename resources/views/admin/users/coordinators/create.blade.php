@extends('layouts.master.master-admin')
@section('header')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        .kt-badge--success {
            background: #1BB580 !important;
        }
    </style>
@stop
@section('content')


    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Form Widgets Validation Examples
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" action="{{ route('page.store')}}" method="post" id="kt_form_1">
                @csrf
                <div class="kt-portlet__body">
                    <div class="kt-form__content">
                        <div class="kt-alert m-alert--icon alert alert-danger mt-2 kt-hidden" role="alert" id="kt_form_1_msg">
                            <div class="kt-alert__icon">
                                <i class="la la-warning"></i>
                            </div>
                            <div class="kt-alert__text">
                                {{--													Oh snap! Change a few things up and try submitting again.--}}
                            </div>
                            <div class="kt-alert__close">
                                <button type="button" class="close" data-close="alert" aria-label="Close">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('name') text-danger @enderror">Name *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group'>
                                <input type="hidden" name="type" value="1">
                                <input type='text' class="form-control @error('name') border-danger @enderror" name="name" value="{{old('name')}}"/>
                            </div>
                            @error('name')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('email') text-danger @enderror">Email *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group'>
                                <input type='email' class="form-control @error('email') border-danger @enderror" name="email" value="{{old('email')}}"/>
                            </div>
                            @error('email')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('phone') text-danger @enderror">phone *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group'>
                                <input type='number' class="form-control @error('phone') border-danger @enderror" name="phone" value="{{old('phone')}}"/>
                            </div>
                            @error('phone')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('age') text-danger @enderror">age *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group'>
                                <input type='number' class="form-control @error('age') border-danger @enderror" name="age" value="{{old('age')}}"/>
                            </div>
                            @error('age')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-form-label col-lg-3 col-sm-12 @error('coordinator_id') text-danger @enderror">Co-ordinator *</label>--}}
{{--                        <div class="col-lg-4 col-md-9 col-sm-12">--}}
{{--                            <select class="form-control column_select @error('coordinator_id') border-danger @enderror"  id="column_select" name="coordinator_id" value="{{old('teacher')}}">--}}
{{--                                <option selected value="none">Select Co-ordinato</option>--}}
{{--                                @foreach($users as $user)--}}
{{--                                    <option value="{{$user->id}}">{{$user->name}}</option>--}}
{{--                                @endforeach--}}

{{--                            </select>--}}
{{--                            <span class="form-text text-muted">Please select an option.</span>--}}
{{--                            @error('coordinator_id')--}}
{{--                            <div class="alert alert-danger mt-2"> {{ $message }} </div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}









                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('gender') text-danger @enderror">Gender *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group'>
                                <input type='radio' class="form-control @error('gender') border-danger @enderror" name="gender" value="male" />Male
                                <input type='radio' class="form-control @error('gender') border-danger @enderror" name="gender" value="female" />Female
                            </div>
                            @error('gender')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('password') text-danger @enderror">Password *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group'>
                                <input type='text' class="form-control @error('password') border-danger @enderror" name="password"   />
                            </div>
                            @error('password')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


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
