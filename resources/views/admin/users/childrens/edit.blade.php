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
								<form class="kt-form kt-form--label-right" action="{{ route('page.update', $user->id) }}" method="post" id="kt_form_1">
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
											<label class="col-form-label col-lg-3 col-sm-12">Name *</label>
											<div class="col-lg-4 col-md-9 col-sm-12">
												<div class='input-group'>
													<input type='hidden' class="form-control" name="id" value="{{$user->id}}"/>
													<input type='text' class="form-control" name="name" value="{{$user->name}}"/>
												</div>
											</div>
										</div>

                                        <div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12">Email *</label>
											<div class="col-lg-9 col-md-9 col-sm-12">
												<input type="text" class="form-control" name="email" value="{{$user->email}}" placeholder="Enter your email">
												<span class="form-text text-muted">We'll never share your email with anyone else.</span>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12 ">Type *</label>
											<div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
												<select class="form-control column_select "  id="column_select" name="type" value="{{$user->type}}">
												<option selected value="none">Select data type</option>
												<option value="coordinator" {{ ($user->type) == 'coordinator' ? 'selected' : '' }} >Coordinator</option>
													<option value="teacher" {{ ($user->type) == 'teacher' ? 'selected' : '' }}>Teacher</option>
													<option value="parent" {{ ($user->type) == 'parent' ? 'selected' : '' }}>Parent</option>
													<option value="children" {{ ($user->type) == 'children' ? 'selected' : '' }}>Children</option>
												</select>
												<span class="form-text text-muted">Please select an option.</span>
											</div>
										</div>

										<div class="form-group row box ">
											<label class="col-form-label col-lg-3 col-sm-12 ">Coordinator Name *</label>
											<div class="col-lg-9 col-md-9 box col-sm-12 form-group-sub">
												<select class="form-control box  " id="coordinator_name" name="coordinator_name " value="{{$user->coordinator_name}}">
												<option selected value="">Select data type</option>
												<option disabled="disabled">Select Teacher type</option>
												<option value="{{$user->coordinator_name}}" {{ ($user->coordinator_name) == 'children' ? 'selected' : '' }}>{{$user->coordinator_name}}</option>
												</select>

												<span class="form-text text-muted">Please select an option.</span>
											</div>


										</div>


                                        <div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12">Age *</label>
											<div class="col-lg-4 col-md-9 col-sm-12">
												<div class='input-group'>
													<input type='number' class="form-control" name="age" value="{{$user->age}}" />
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12 ">Password *</label>
											<div class="col-lg-4 col-md-9 col-sm-12">
												<div class='input-group'>
													<input type='text' class="form-control " name="password"   />
												</div>

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
