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
								<form class="kt-form kt-form--label-right" action="{{ route('interest.store')}}" enctype="multipart/form-data" method="post" id="kt_form_1">
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
											<label class="col-form-label col-lg-3 col-sm-12 @error('image') text-danger @enderror">Image *</label>
											<div class="col-lg-4 col-md-9 col-sm-12">
												<div class='input-group'>
													<input type='file' class="form-control @error('image') border-danger @enderror" name="image" value="{{old('image')}}"/>													
												</div>
												@error('image')
												<div class="alert alert-danger mt-2"> {{ $message }} </div>
												@enderror
											</div>
										</div>
                                       
										<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12 @error('type') text-danger @enderror">Type *</label>
											<div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
												<select class="form-control column_select @error('type') border-danger @enderror"  id="column_select" name="type" value="{{old('type')}}"> 
												<option selected value="none">Select data type</option>	
												<option value="interest">Interest</option>
												<option value="hobbies">Hobbies</option>
												</select>
												<span class="form-text text-muted">Please select an option.</span>
											</div>
										</div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
                                        
@endsection

@push('scripts')

</script>