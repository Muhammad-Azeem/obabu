@extends('layouts.main')
@section('title','Obabu Home')
@section('maincontent')
<section class="banner_header">
    <div class="header_main">
        <header class="header">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="main_img">
                    <img src="assets/images/bcha1.png" class="img-fluid banner_image">
                    <img src="assets/images/cover_img.png" class="cover_img">
                </div>
            </div>
            <div class="col-md-6">
                <div class="main_banner">
                    <h1><span>$</span>6.50</h1>
                    <p>PER SESSION FOR THE</p>
                    <h2>Littlest Learners <br>
                    Prek Live Chat <br>
                    Small Group</h2>
                    <p class="bottom_p">Prelaunch sale price.</p>
                    <button type="button" class="banner_btn">LIMITED TIME ONLY !</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="timline_section">
    <div class="container-fluid">
        <div class="main_timline">
            <section id="conference-timeline">
                <div class="timeline-start">WHY US</div>
                <div class="conference-center-line"></div>
                <div class="conference-timeline-content">
                    <!-- Article -->
                    <div class="timeline-article">
                        <div class="content-left-container">
                            <div class="content-left col-md-12">
                                <div class="col-md-12 date-details">
                                    <div class="no-padding">
                                        <div class="left_section_timeline yellow">
                                            <h3>Heading 1</h3>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita </p>
                                            <button type="button" class="shadow">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-right-container">
                            <div class="content-right col-md-12">
                                <div class="col-md-12 date-details">
                                    <div class="no-padding">
                                        <div class="time_line_img">
                                            <img src="assets/images/timeline_1.png" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="meta-date"></div>
                    </div>
                    <div class="timeline-article">
                        <div class="content-right-container">
                            <div class="content-right col-md-12">
                                <div class="col-md-12 date-details">
                                    <div class="no-padding">
                                        <div class="left_section_timeline pink">
                                            <h3>Heading 2</h3>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita </p>
                                            <button type="button" class="shadow">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-left-container">
                            <div class="content-left col-md-12">
                                <div class="col-md-12 date-details">
                                    <div class="time_line_img">
                                        <img src="assets/images/timeline_2.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="meta-date pink"></div>
                    </div>
                    <div class="timeline-article mb-0">
                        <div class="content-left-container">
                            <div class="content-left col-md-12">
                                <div class="col-md-12 date-details">
                                    <div class="no-padding">
                                        <div class="left_section_timeline purple">
                                            <h3>Heading 3</h3>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita </p>
                                            <button type="button" class="shadow">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-right-container">
                            <div class="content-right col-md-12">
                                <div class="col-md-12 date-details">
                                    <div class="no-padding">
                                        <div class="time_line_img">
                                            <img src="assets/images/timeline_3.png" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="meta-date purple"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<section class="team_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 pl-0">
                <div class="team_img">
                    <img src="assets/images/team1.png" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="team_text">
                    <h2>OUR TEAM</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="team_text pl-5 pink">
                    <h2>JOIN OUR <br> PROGRAM</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                    <button type="button">GET STARTED</button>
                </div>
            </div>
            <div class="col-md-6 pr-0">
                <div class="team_img text-right">
                    <img src="assets/images/team2.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="membership">
    <div class="member_head text-center">
        <h2>MEMBERSHIP PLANS</h2>
    </div>
    <div class="container-fluid">
        <div class="main_tables_spc">
            <div class="container-fluid">
                <div class="row m-0">
                    <div class="col-md-4">
                        <div class="mem_table">
                            <div class="mem_t_head">
                                <img src="assets/images/yellow_top.png" class="img-fluid">
                                <div class="price_mem">
                                    <div class="price_main">
                                        <h4>20 <span>$</span></h4>
                                        <p> Per Week </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mem_t_data">
                                <div class="name_mem text-center">
                                    <h3>PATHFINDER</h3>
                                </div>
                                <div class="check_p">
                                    <p> <i class="bx bx-check"></i> 3 Days Per Week </p>
                                    <p> <i class="bx bx-check"></i> Select Classes Per Day : </p>
                                </div>
                                <div class="list_radio_btn">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios1" value="option1" checked="">
                                        <label class="form-check-label" for="exampleRadios1">
                                            2 Classes per day
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            3 Classes per day
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">
                                            4 Classes per day
                                        </label>
                                    </div>
                                </div>
                                <div class="pack_btn text-center">
                                    <button type="button" class="btn">GET PACKAGE</button>
                                </div>
                            </div>
                            <div class="ribbon ribbon-top-left"><span>15% Off</span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mem_table pink_">
                            <div class="mem_t_head">
                                <img src="assets/images/blue_top.png" class="img-fluid">
                                <div class="price_mem">
                                    <div class="price_main">
                                        <h4>40 <span>$</span></h4>
                                        <p> Per Week </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mem_t_data">
                                <div class="name_mem text-center">
                                    <h3>EXPLORER</h3>
                                </div>
                                <div class="check_p">
                                    <p> <i class="bx bx-check"></i> 4 Days Per Week </p>
                                    <p> <i class="bx bx-check"></i> Select Classes Per Day : </p>
                                </div>
                                <div class="list_radio_btn">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios9" value="option1" checked="">
                                        <label class="form-check-label" for="exampleRadios9">
                                            2 Classes per day
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios4" value="option2">
                                        <label class="form-check-label" for="exampleRadios4">
                                            3 Classes per day
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios5" value="option3">
                                        <label class="form-check-label" for="exampleRadios5">
                                            4 Classes per day
                                        </label>
                                    </div>
                                </div>
                                <div class="pack_btn text-center">
                                    <button type="button" class="btn">GET PACKAGE</button>
                                </div>
                            </div>
                            <div class="ribbon ribbon-top-left"><span>15% Off</span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mem_table green_">
                            <div class="mem_t_head">
                                <img src="assets/images/pink_top.png" class="img-fluid">
                                <div class="price_mem">
                                    <div class="price_main">
                                        <h4>50 <span>$</span></h4>
                                        <p> Per Week </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mem_t_data">
                                <div class="name_mem text-center">
                                    <h3>ADVENTURER</h3>
                                </div>
                                <div class="check_p">
                                    <p> <i class="bx bx-check"></i> 5 Days Per Week </p>
                                    <p> <i class="bx bx-check"></i> Select Classes Per Day : </p>
                                </div>
                                <div class="list_radio_btn">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios10" value="option1" checked="">
                                        <label class="form-check-label" for="exampleRadios10">
                                            2 Classes per day
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios20" value="option2">
                                        <label class="form-check-label" for="exampleRadios20">
                                            3 Classes per day
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios30" value="option3">
                                        <label class="form-check-label" for="exampleRadios30">
                                            4 Classes per day
                                        </label>
                                    </div>
                                </div>
                                <div class="pack_btn text-center">
                                    <button type="button" class="btn">GET PACKAGE</button>
                                </div>
                            </div>
                            <div class="ribbon ribbon-top-left"><span>15% Off</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact_us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div class="main_contact_form">
                    <div class="contac_head text-center">
                        <h2>CONTACT US</h2>
                        <p>Get in touch and let us know  how we can help</p>
                    </div>
                    <div class="contact_form">
                        <form action="{{route('contactus')}}" method="POST">
                            @csrf
                            <div class="contact_form">
                                <div class="cntcn_inp">
                                    <input type="text" class="form-control" name="email" placeholder="Program Director Email">
                                </div>
                                <div class="cntcn_inp">
                                    <input type="text" class="form-control" name="location" placeholder="Program Director Email">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cntcn_inp">
                                            <select class="form-control" name="city">
                                                <option value="NY">New York</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cntcn_inp">
                                            <select class="form-control" name="state">
                                                <option value="DC">DC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cntcn_inp">
                                            <input type="number" class="form-control" name="number" placeholder="Program Director Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cntcn_inp">
                                            <select class="form-control" name="enrollie">
                                                <option value="Potential">Potential Enrollees</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="cntct_btn">
                                    <button type="submit" class="btn">SEND</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pr-0">
                <div class="cntct_img text-right">
                    <img src="assets/images/contact.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@stop
