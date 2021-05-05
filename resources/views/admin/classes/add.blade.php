@extends('layouts.master.master-admin')
@section('header')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        .kt-badge--success {
            background: #1BB580 !important;
        }
    </style>
@stop
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@section('content')


    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Class Create
                    </h3>
                </div>
            </div>
            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
           @endif
            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" action="{{ route('page.classes-store')}}" method="post" id="kt_form_1">
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
                        <label class="col-form-label col-lg-3 col-sm-12 @error('name') text-danger @enderror">Class Name *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group'>
{{--                                <input type="hidden" name="type" value="2">--}}
                                <input type='text' class="form-control @error('name') border-danger @enderror" name="name" value="{{old('name')}}"/>
                            </div>
                            @error('name')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>




                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 @error('teacher_id') text-danger @enderror">Teacher *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control column_select @error('teacher_id') border-danger @enderror"   id="column_select" name="teacher_id" value="{{old('teacher_id)')}}">
                                <option selected value="">Select teacher</option>
                                @foreach($teachers as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach

                            </select>
                            <span class="form-text text-muted">Please select an option.</span>
                            @error('teacher_id')
                               <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row " id="clone">
                        <label class="col-form-label col-lg-3 col-sm-12">Default Time</label>
                        <div class="col-lg-4 col-md-9 col-sm-12 ">
                            <div class="input-group timepicker ">
                                <input class="form-control date_picker " required readonly="" name="date_time[]" placeholder="Select Date" type="text">
                                <input class="form-control" required  name="time[]" placeholder="Select time" type="time">
                            </div>
                        </div>
                    </div>
                    <div class="input_fields_wrap"></div>

                    <a class="add_field_button btn">Add another class</a>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
{{--    <div class="input_fields_wrap">--}}
{{--        <button class="add_field_button">Add More Fields</button>--}}
{{--        <div><input type="text" name="mytext[]"></div>--}}
{{--    </div>--}}


@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                // $(wrapper).append('<input class="form-control date_picker"  readonly="" name="date_time[]" placeholder="Select time" type="text"> <input   type="time" name="time[]">'); //add input box
                $(wrapper).append(' <div class="form-group row " id="clone">\n' +
                    '                        <label class="col-form-label col-lg-3 col-sm-12">Default Time</label>\n' +
                    '                        <div class="col-lg-4 col-md-9 col-sm-12 ">\n' +
                    '                            <div class="input-group timepicker ">\n' +
                    '                                <input class="form-control date_picker " required  readonly="" name="date_time[]" placeholder="Select Date" type="text">\n' +
                    '                                <input class="form-control" required  name="time[]" placeholder="Select time" type="time">\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                    </div>');
                $( function() {
                    $( ".date_picker" ).datepicker();
                } );
            }
        });

        // $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        //     e.preventDefault(); $(this).parent('div').remove(); x--;
        // })
    });
</script>

<script>
    $( function() {
        $( ".date_picker" ).datepicker();
    } );
</script>
{{--@push('scripts')--}}
{{--    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}

{{--    <script>--}}
{{--        // $(document).ready(function(){--}}
{{--        //     $(".column_select").change(function(){--}}
{{--        //         $(this).find("option:selected").each(function(){--}}
{{--        //             var optionValue = $(this).attr("value");--}}
{{--        //             if(optionValue){--}}
{{--        //                 $(".box").not("." + optionValue).hide();--}}
{{--        //                 $("." + optionValue).show();--}}
{{--        //             } else{--}}
{{--        //                 $(".box").hide();--}}
{{--        //             }--}}
{{--        //         });--}}
{{--        //     }).change();--}}
{{--        // });--}}

{{--        $(document).ready(function() {--}}
{{--            var optarray = $("#coordinator_name").children('option').map(function() {--}}
{{--                return {--}}
{{--                    "value": this.value,--}}
{{--                    "option": "<option value='" + this.value + "'>" + this.text + "</option>"--}}
{{--                }--}}
{{--            })--}}

{{--            $("#column_select").change(function() {--}}
{{--                $("#coordinator_name").children('option').remove();--}}
{{--                var addoptarr = [];--}}
{{--                for (i = 0; i < optarray.length; i++) {--}}
{{--                    if (optarray[i].value.indexOf($(this).val()) > -1) {--}}
{{--                        addoptarr.push(optarray[i].option);--}}
{{--                    }--}}
{{--                }--}}
{{--                $("#coordinator_name").html(addoptarr.join(''))--}}
{{--            }).change();--}}
{{--        })--}}
{{--    </script>--}}
