@extends('layouts.main')
@section('title','Obabu Home')
@section('maincontent')
<header class="header ot_headers">
    <nav class="navbar navbar-light navbar-expand-lg bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" class="img-fluid mx-auto" height="114" width="139" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            @php
            $segment = \Illuminate\Support\Facades\Request::segment(1);
            @endphp
            <div class="collapse navbar-collapse" id="navbarToggler">
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
                @auth
                <div class="my-2 my-lg-0">
                    <img src="{{asset('public/assets/images/profile.png')}}" alt="User Image" class="img-fluid" width="124" height="124"/>
                </div>
                @endauth
            </div>
        </div>
    </nav>
</header>
<section class="membership_main">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="banner-details">
                    <h1>Our <span>Membership Program</span></h1>
                    <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, odit. Eligendi autem quaerat quisquam aperiam perspiciatis ipsum odit exercitationem at amet eum velit vel possimus consectetur officia, maiores aut molestiae!</p>
                    <div class="mt-4 pt-2 banner_btns">
                        <a href="{{route('register')}}" class="btn btn-primary mr-3 shadow signup">SIGN UP</a>
                        <button class="btn btn-secondary ml-3 shadow">CONTACT US</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pr-0">
                <div class="banner_position_img">
                    <img src="{{asset('public/assets/images/member_right.png')}}" class="img-fluid banner-image" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="table_membership">
    <div class="tblr_head">
        <div class="heading_sec">
            <h1><span class="text-color-secondary">Membership</span> Purchase </h1>
            <p>Select Your Right Plan !</p>
        </div>
        <div class="sessions">
            <button type="button" onclick="changePrice('monthly')" class="btn btn-secondary shadow">Monthly Session</button>
            <p class="or">OR</p>
            <button type="button" onclick="changePrice('weekly')" class="btn btn-primary shadow">Weekly Session</button>
        </div>
    </div>
    <div class="membership">
        <div class="container-fluid">
            <div class="main_tables_spc">
                <div class="container-fluid">
                    <div class="row m-0">
                        <form action="{{route('payment')}}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" name="type" id="type" value="monthly">
                            <input type="hidden" name="total_price" id="total_amount" value="">
                            <input type="hidden" name="package_id" id="package_id" value="">
                            <input type="hidden" name="option_id" id="option_id" value="">
                            <input type="hidden" name="is_session" id="is_session" value="0">
                            <button type="submit" id="sub_btn" style="display: none"></button>
                        </form>
                        @foreach($membership as $key => $m)
                        <div class="col-md-4">
                            <div class="mem_table">
                                <div class="mem_t_head">
                                    @if($key == 0)
                                    <img src="{{asset('public/assets/images/yellow_top.png')}}" class="img-fluid">
                                    @elseif($key == 1)
                                    <img src="{{asset('public/assets/images/blue_top.png')}}" class="img-fluid">
                                    @else
                                    <img src="{{asset('public/assets/images/pink_top.png')}}" class="img-fluid">
                                    @endif
                                    <div class="price_mem">
                                        <div class="price_main monthly_price">
                                            <h4 class="total_price {{$key}}-total_price">{{$m->monthly_price}} <span>$</span></h4>
                                            <p> Per Month </p>
                                        </div>
                                        <div class="price_main weekly_price" style="display: none">
                                            <h4 class="total_price1 {{$key}}-total_price1">{{$m->weekly_price}} <span>$</span></h4>
                                            <p> Per Week </p>
                                        </div>
                                        <input type="hidden" name="type" id="type" value="monthly">
                                    </div>
                                </div>
                                
                                <div class="mem_t_data">
                                    <div class="name_mem text-center">
                                        <h3>{{strtoupper($m->name)}}</h3>
                                    </div>
                                    <div class="check_p">
                                        <p> <i class='bx bx-check'></i> {{$m->days_per_week}} Days Per Week </p>
                                        <p> <i class='bx bx-check'></i> Select Classes Per Day : </p>
                                    </div>
                                    <div class="list_radio_btn">
                                        @foreach($m->options as $key1 => $o)
                                        {{--                                    @dd($key1,$m, $o->number)--}}
                                        <div class="form-check">
                                            {{--                                        @if($key1 == 0)--}}
                                            <input class="form-check-input" type="radio" name="exampleRadios2"  id="exampleRadios-{{$key1}}" value="{{$o->id}}" onclick="changePriceDay('{{$key}}','{{$m->per_day_price}}','{{$o->number}}','{{$key1}}','{{$m->monthly_price}}','{{$m->weekly_price}}',null)" >
                                            <label class="form-check-label" for="exampleRadios-{{$key1}}">
                                                {{$o->number}} Classes per day
                                            </label>
                                            {{--                                        @else--}}
                                            {{--                                            <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios-{{$key1+1}}" value="{{$o->number}}" onclick="changePriceDay('{{$key}}','{{$m->per_day_price}}','{{$o->number}}','{{$key1}}','{{$m->monthly_price}}','{{$m->weekly_price}}')">--}}
                                            {{--                                                    <label class="form-check-label" for="exampleRadios-{{$key1+1}}">--}}
                                                {{--                                                        {{$o->number}} Classes per day--}}
                                            {{--                                                    </label>--}}
                                            {{--                                        @endif--}}
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="pack_btn text-center">
                                        <button type="button" class="btn" onclick="buyPackage('{{$m->id}}','package')">GET PACKAGE</button>
                                    </div>
                                </div>
                                @if(isset($m->discount))<div class="ribbon ribbon-top-left"><span>{{$m->discount}}% Off</span></div>@endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <section class="session_card">
        <div class="session_head text-center">
            <h4>Single Sessions Also Available</h4>
        </div>
        <div class="custom_radio_main">
            <div class="custom_radio">
                @foreach($session as $s)
                <label class="label_container blue_radio">{{$s->is_session_count}} Sessions
                    <input type="radio" checked="checked" name="radio" onclick="buyPackage('{{$s->id}}','session')">
                    <span class="checkmark"></span>
                    <h4>{{$s->is_session_count * $s->per_day_price}} $</h4>
                </label>
                @endforeach
            </div>
            <div class="bottom_main_img">
                <img src="{{asset('public/assets/images/info-box-after.png')}}" class="img-fluid cr_img">
                <img src="{{asset('public/assets/images/left_group.png')}}" class="img-fluid left_img">
                <img src="{{asset('public/assets/images/right_group.png')}}" class="img-fluid right_img">
            </div>
        </div>
    </section>
</div>
@stop

