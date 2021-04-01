<!DOCTYPE html>
<html>
<head>
    <title>Angular || Html</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Font and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}">
</head>
<body>
<section class="login-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8 col-xl-8 login-left">
                <!-- Just an image -->
                <nav>
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('public/assets/images/logo.png')}}" class="img-fluid mx-auto" height="118" width="144" alt="logo">
                    </a>
                </nav>
                <div class="text-center login-main">
                    <h1>Log In</h1>
                    <form class="d-flex flex-column align-items-center justify-content-center mt-4" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3 w-50 shadow-sm ">
                            <div class="input-group-prepend">
										<span class="input-group-text">
											<i class='bx bxs-envelope' ></i>
										</span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        {{--                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                        {{--                        <label class="form-check-label" for="remember">--}}
                        {{--                            {{ __('Remember Me') }}--}}
                        {{--                        </label>--}}
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        <button class="shadow-lg btn btn-primary mt-2 py-2 px-5" type="submit"> {{ __('Login') }}</button>

                    </form>


                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 login-right p-0 d-flex flex-column align-items-center justify-content-center">
                <div class="text-center">
                    <h2>Hello , Friend!</h2>
                    <p class="font-weight-bold">Don't have an Account?</p>
                    <a class="shadow-lg btn btn-secondary mt-2 py-2 px-4" href="{{route('register')}}">Create Account</a>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
