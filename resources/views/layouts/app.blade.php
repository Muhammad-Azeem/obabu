<!DOCTYPE html>
<html>
<head>
    <title>Obabu || New</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<main id="app">
    <section class="about_us_main">
        <div class="header_main">
            <header class="header ot_headers ot_padding">
                <nav class="navbar navbar-light navbar-expand-lg bg-transparent">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="assets/images/logo.png" class="img-fluid mx-auto" height="114" width="139" alt="logo">
                            <img src="assets/images/logo_bg.png" class="bg_logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarToggler">
                            @php
                                $segment = \Illuminate\Support\Facades\Request::segment(1);
                            @endphp
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item {{($segment == '') ? 'active' :''}}">
                                    <a class="nav-link text-white" href="{{url('/')}}">HOME</a>
                                </li>
                                <li class="nav-item {{($segment == 'about-us') ? 'active' :''}}">
                                    <a class="nav-link" href="{{route('about_us')}}">ABOUT US</a>
                                </li>
                                <li class="nav-item {{($segment == 'sales') ? 'active' :''}}">
                                    <a class="nav-link" href="{{route('sales')}}">SALES</a>
                                </li>
                                <li class="nav-item {{($segment == 'membership') ? 'active' :''}}">
                                    <a class="nav-link" href="{{route('membership')}}">MEMBERSHIPS</a>
                                </li>
                                <li class="nav-item {{($segment == 'chat_view') ? 'active' :''}}">
                                    <a class="nav-link">CHAT VIEW</a>
                                </li>
                                <li class="nav-item">
                                @guest

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            @if(\Illuminate\Support\Facades\Auth::user()->type == 4)
                                                <a class="dropdown-item" href="{{ url('student') }}">
                                                    {{ __('Edit Profile') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ url('community-student') }}">
                                                    {{ __('Community') }}
                                                </a>
                                            @elseif(\Illuminate\Support\Facades\Auth::user()->type == 2)
                                                <a class="dropdown-item" href="{{ url('teacher') }}">
                                                    {{ __('Edit Profile') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ url('community-teacher') }}">
                                                    {{ __('Community') }}
                                                </a>
                                            @endif


                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                        </div>
                                    </li>
                                    </li>
                            </ul>
                            <div class="my-2 my-lg-0">
                                @if(Illuminate\Support\Facades\Auth::user()->profile_pic == '')
                                    <img src="assets/images/profile.png" alt="User Image" class="img-fluid" width="124" height="124">
                                @else
                                    <img src="svg/{{Illuminate\Support\Facades\Auth::user()->profile_pic}}" alt="User Image" class="img-fluid" width="124" height="124">
                                @endif
                            </div>
                            @endguest
                        </div>
                    </div>
                </nav>
            </header>
        </div>
    </section>
    @section('maincontent')
    @show
    @include('layouts.footer')
    @include('layouts.userjs')
</main>
@section('customJs')
</body>
</html>
