@extends('layouts.main')
@section('title','Obabu Home')
@section('maincontent')
<main id="app">
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
                                    @endguest
                                </li>
                            </ul>
                            <div class="my-2 my-lg-0">
                                <img src="assets/images/profile.png" alt="User Image" class="img-fluid" width="124" height="124"/>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="main_banner sales_text">
                        <h2> <span> Instant</span> Video Chat</h2>
                        <h6>Fun Happpen Here !</h6>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</p>
                        <div class="join_field">
                            <input type="text" name="" class="form-control">
                            <button type="button" class="btn">Join Website</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_img_slaes">
                        <img src="assets/images/dsd.png" class="img-fluid banner_image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner_card">
        <div class="container">
            <section class="session_card">
                
                <div class="session_head text-center">
                    <h4>Fun Happen OBABU Connects Your Child To Friends To All Over
                    The World . Play Dates Will Never Be The SameHere</h4>
                </div>
                <div class="custom_radio_main">
                    <div class="bottom_main_img">
                        <img src="assets/images/info-box-after.png" class="img-fluid cr_img">
                        <img src="assets/images/left_group.png" class="img-fluid left_img">
                        <img src="assets/images/right_group.png" class="img-fluid right_img">
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="mem_programe">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="programe_text">
                        <h2>Our Membership <br> Program</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea </p>
                        <div class="banner_btns mt-4 pt-2">
                            <button class="btn mr-3 sign_up">SIGN UP</button>
                            <button class="btn btn-secondary ml-3">CONTACT US</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pr-0">
                    <div class="mem_image text-right">
                        <img src="assets/images/mem_program.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="vide_img">
                        <img src="assets/images/video.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <div class="vide_text">
                        <div class="main_video text-center">
                            <h2><span>Chat With</span> <br> Any One You Want </h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eir </p>
                            <button type="button" class="btn pink_btn">MAKE FRIENDS !</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="timline_section">
        <div class="container-fluid">
            <div class="main_timline">
                <section id="conference-timeline">
                    <div class="timeline-start adjust_margin">OUR SERVICES</div>
                    <div class="conference-center-line op_height"></div>
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
                                                <img src="assets/images/about1.png" class="img-fluid">
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
                                            <img src="assets/images/about2.png" class="img-fluid">
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
                                                <img src="assets/images/about3.png" class="img-fluid">
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
    <section class="team_section team_add_spc">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="team_text pl-5 pink">
                        <h2>JOIN OUR TEAM</h2>
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
</main>
@stop
