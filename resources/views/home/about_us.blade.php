@extends('layouts.main')
@section('title','Obabu Home')
@section('maincontent')

<main id="app">
    <section class="about_us_main">
        <div class="header_main">
            <header class="header ot_headers ot_padding">
                <nav class="navbar navbar-light navbar-expand-lg bg-transparent">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="assets/images/logo.png" class="img-fluid mx-auto" height="114" width="139" alt="logo">
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
            <div class="main_banner_data">
                <div class="left_banner_data">
                    <div class="main_banner about_text">
                        <h2>Welcome Friends</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed <br> diam n et </p>
                        <div class="banner_btns">
                            <button type="button" class="btn learn_more_btn">LEARN MORE</button>
                            <button type="button" class="btn sign_up">CONTACT US</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right_banner_data">
            <div class="main_img text-right">
                <img src="assets/images/bcha_grp_bg.png" class="img-fluid">
                <!-- <img src="assets/images/cover_img.png" class="cover_img"> -->
            </div>
        </div>
    </section>
    <section class="about_us_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 pl-0">
                    <div class="team_img">
                        <img src="assets/images/about_us.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="team_text">
                        <h2>ABOUT US</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
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
    <section class="team_section">
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
        <div class="contact_us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 pl-0">
                        <div class="cntct_img text-left">
                            <img src="assets/images/contact_op.png" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="main_contact_form">
                            <div class="contac_head text-center">
                                <h2>CONTACT US</h2>
                                <p>Get in touch and let us know  how we can help</p>
                            </div>
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
            </div>
        </div>
    </section>
</main>
@stop
