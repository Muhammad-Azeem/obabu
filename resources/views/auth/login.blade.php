<!DOCTYPE html>
<html>
<head>
    <title>Obabu || New</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Font and icons -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
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
                    <div class="social_login">
                        {{--                        <i class='bx bxl-facebook'></i>--}}
                        {{--                        <i class='bx bxl-google mx-lg-3' ></i>--}}
                        {{--                        <i class='bx bxl-linkedin' ></i>--}}
                        {{--                        <p>Or use your email account:</p>--}}
                    </div>
                    <form class="d-flex flex-column align-items-center justify-content-center mt-4" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3 w-50 ">
                            <div class="input-group-prepend">
										<span class="input-group-text">
											<i class='bx bxs-envelope' ></i>
										</span>
                            </div>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="input-group mb-3 w-50 mt-2">
                            <div class="input-group-prepend">
										<span class="input-group-text">
											<i class='bx bxs-lock-alt' ></i>
										</span>
                            </div>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" >
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        {{--                    <p class="text-dark h6 mt-2 forgot_link">Forgot your Password ?</p>--}}
                        @if (Route::has('password.request'))
                            <a class="text-dark h6 mt-2 forgot_link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <hr class="text-center"/>
                        <button class="shadow-lg btn btn-primary mt-2 py-2 px-5 login_btn" type="submit">{{ __('Submit') }}</button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 login-right p-0 d-flex flex-column align-items-center justify-content-center">
                <div class="text-center">
                    <h2>Hello , Friend!</h2>
                    <p class="font-weight-bold">Don't have an Account?</p>
                    <a class="shadow-lg btn btn-secondary mt-2 py-2 px-4" href="{{route('register')}}" routerLink="/auth/signup">Create Account</a>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
