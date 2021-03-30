@extends('layouts.main')
@section('title','Obabu Sign Up')
@section('maincontent')
<section class="signup-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 signup-left p-0 d-flex flex-column align-items-center justify-content-center">
                <div class="text-center">
                    <h2>Welcome Back !</h2>
                    <p class="font-weight-bold">Stay Connected , Log in to your account</p>
                    <a href="{{route('login')}}" class="shadow-lg btn btn-secondary mt-2 py-2 px-5" >Login In</a>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-8 col-xl-8 signup-right">
                <!-- Just an image -->
                <div class="text-center signup-main">
                    <h1 class="mt-2 mt-sm-3 mt-md-3">Create Account</h1>

                    <form class="d-flex flex-column align-items-center justify-content-center mt-4" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="input-group mb-3 w-50 shadow-sm mt-2">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class='bx bxs-user'></i>
                            </span>
                            </div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        </div>
                        <div class="col-md-6">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3 w-50 shadow-sm mt-2">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class='bx bxs-envelope' ></i>
                              </span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        </div>
                        <div class="col-md-6">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3 w-50 shadow-sm mt-2">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class='bx bxs-lock-alt' ></i>
                              </span>
                            </div>
                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        </div>

                        <div class="col-md-6">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3 w-50 shadow-sm mt-2">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class='bx bxs-lock-alt' ></i>
                              </span>
                            </div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                        <button class="shadow-lg btn btn-primary mt-2 py-2 px-5" type="submit" style="margin-bottom: 20px">{{ __('Register') }}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@stop
