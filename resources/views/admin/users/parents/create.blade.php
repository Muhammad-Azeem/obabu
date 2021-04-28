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
								<form class="kt-form kt-form--label-right" action="{{ route('page.store')}}" method="post" enctype="multipart/form-data" id="kt_form_1">
								@csrf	
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
                                                <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                                                <div class="col-md-6">
                                                    <input id="profile_pic" type="file" class="form-control" name="profile_pic">
                                                    @error('profile_pic')
													<div class="alert alert-danger mt-2"> {{ $message }} </div>
													@enderror
                                                </div>
                                            </div>
										<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12 @error('name') text-danger @enderror">Name *</label>
											<div class="col-lg-4 col-md-9 col-sm-12">
												<div class='input-group'>
													<input type='text' class="form-control @error('name') border-danger @enderror" name="name" value="{{old('name')}}"/>													
												</div>
												@error('name')
												<div class="alert alert-danger mt-2"> {{ $message }} </div>
												@enderror
											</div>
										</div>

                                        <div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12 @error('email') text-danger @enderror">Email *</label>
											<div class="col-lg-9 col-md-9 col-sm-12">
												<input type="text" class="form-control @error('email') border-danger @enderror" name="email" value="{{old('email')}}" placeholder="Enter your email">
											@error('email')
											<span class="alert alert-danger mt-2"> {{ $message }} </span>
											@enderror
												<span class="form-text text-muted">We'll never share your email with anyone else.</span>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12 @error('type') text-danger @enderror">Type *</label>
											<div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
												<select class="form-control column_select @error('type') border-danger @enderror"  id="column_select" name="type" value="{{old('type')}}"> 
												<option selected value="none">Select data type</option>	
												<option value="coordinator">Coordinator</option>
													<option value="teacher">Teacher</option>
													<option value="parent">Parent</option>
													<option value="children">Children</option>
												</select>
												<span class="form-text text-muted">Please select an option.</span>
											</div>
										</div>

										<div class="form-group row box ">
											<label class="col-form-label col-lg-3 col-sm-12 @error('coordinator_name') text-danger @enderror">Coordinator Name *</label>
											<div class="col-lg-9 col-md-9 box col-sm-12 form-group-sub">
												<select class="form-control box  @error('coordinator_name') border-danger @enderror" id="coordinator_name" name="coordinator_name"> 
												<option selected value="">Select data type</option>
												<option disabled="disabled">Select Teacher type</option>	
												@foreach($users->whereNotNull('coordinator_name') as $user)	
												<option value="{{$user->coordinator_name}}" class=>{{$user->coordinator_name}}</option>
												@endforeach
												</select>
												
												<span class="form-text text-muted">Please select an option.</span>
											</div>
										

										</div>


                                        <div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12 @error('age') text-danger @enderror">Age *</label>
											<div class="col-lg-4 col-md-9 col-sm-12">
												<div class='input-group'>
													<input type='number' class="form-control @error('age') border-danger @enderror" name="age" value="{{old('age')}} " />													
												</div>
												@error('age')
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