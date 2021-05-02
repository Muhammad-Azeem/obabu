@extends('layouts.main')
@section('title','Obabu Home')
@section('maincontent')
    <section class="membership_main">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="banner-details">
                        <h5 class="offer_text">LIMITED OFFER</h5>
                        <h1> GET <span class="text-color-secondary">15%</span>OFF</h1>
                        <h5 class="memer_offer">ON MEMBERSHIP PACKAGES</h5>
                        <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna !</p>
                        <div class="mt-4 pt-2">
                            <a href="{{route('register')}}"> <button class="btn btn-primary mr-3 shadow signup">SIGN UP</button></a>
                            <button class="btn btn-secondary ml-3 shadow">CONTACT US</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <img src="{{asset('public/assets/images/frd.png')}}" class="img-fluid banner-image align_to_top" alt="Laptop Image">

                </div>
            </div>
        </div>
    </section>
    <div class="refer_friend">
        <div class="main_ad_pd">
            <div class="row m-0">
                <div class="col-md-7">
                    <div class="refer_img">
                        <img src="{{asset('public/assets/images/refer_friend.png')}}" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center justify-content-center">
                    <div class="refer_frnd_text">
                        <h2>REFER A FRIEND</h2>
                        <p>Select Your Right Plan !</p>
                        <button type="button" class="btn"><i class='bx bx-upload mr-1'></i>	Share</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="table_membership">
        <form action="{{route('payment')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <input type="hidden" name="type" id="type" value="weekly">
            <input type="hidden" name="total_price" id="total_amount" value="">
            <input type="hidden" name="package_id" id="package_id" value="">
            <input type="hidden" name="option_id" id="option_id" value="">
            <input type="hidden" name="is_session" id="is_session" value="0">
            <button type="submit" id="sub_btn" style="display: none"></button>
        </form>
        <div class="main_tables_spc">
            <div class="container-fluid">
                <div class="row m-0">
                    @foreach($membership as $key => $m)
                        <div class="col-md-4">
                            <div class="mem_table shadow">
                                <div class="mem_t_head">
                                    @if($key == 0)
                                        <img src="{{asset('public/assets/images/blue.png')}}" class="img-fluid">
                                    @elseif($key == 1)
                                        <img src="{{asset('public/assets/images/pink.png')}}" class="img-fluid">
                                    @else
                                        <img src="{{asset('public/assets/images/green.png')}}" class="img-fluid">
                                    @endif
                                    <div class="price_mem">
{{--                                        <div class="price_main monthly_price">--}}
{{--                                            <h4 class="total_price {{$key}}-total_price">{{$m->monthly_price}} <span>$</span></h4>--}}
{{--                                            <p> Per Month </p>--}}
{{--                                        </div>--}}
                                        <div class="price_main weekly_price" >
                                            <h4 class="total_price1 {{$key}}-total_price1">{{($m->weekly_price/100)*$m->discount}} <span>$</span></h4>
                                            <p> Per Week </p>
                                        </div>
                                        <input type="hidden" name="type" id="type" value="weekly">
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
                                                <input class="form-check-input" type="radio" name="exampleRadios2"  id="exampleRadios-{{$key1}}" value="{{$o->number}}" onclick="changePriceDay('{{$key}}','{{$m->per_day_price}}','{{$o->number}}','{{$key1}}','{{$m->monthly_price}}','{{$m->weekly_price}}','{{$m->discount}}')" >
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
                                <div class="ribbon ribbon-top-left"><span>{{$m->discount}}% Off</span></div>

{{--                                <div class="position_img">--}}
{{--                                    <img src="{{asset('public/assets/images/contact-us.png')}}">--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
{{--    <div class="container">--}}
{{--        <section class="session_card shadow">--}}

{{--            <div class="session_head text-center">--}}
{{--                <h4>Single Sessions Also Available</h4>--}}
{{--            </div>--}}
{{--            <!-- <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="session_inp">--}}
{{--                        <div class="form-check">--}}
{{--                          <input class="form-check-input" type="radio" name="exampleRadiossession" id="exampleRadiossession" value="option2">--}}
{{--                          <label class="form-check-label" for="exampleRadiossession">--}}
{{--                            5 Sessions--}}
{{--                          </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="session_inp">--}}
{{--                        <div class="form-check">--}}
{{--                          <input class="form-check-input" type="radio" name="exampleRadiossession" id="exampleRadiossession2" value="option2">--}}
{{--                          <label class="form-check-label" for="exampleRadiossession2">--}}
{{--                            10 Sessions--}}
{{--                          </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="session_inp">--}}
{{--                        <div class="form-check">--}}
{{--                          <input class="form-check-input" type="radio" name="exampleRadiossession" id="exampleRadiossession4" value="option2">--}}
{{--                          <label class="form-check-label" for="exampleRadiossession4">--}}
{{--                            20 Sessions--}}
{{--                          </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> -->--}}
{{--            <div class="custom_radio_main">--}}
{{--                <div class="custom_radio">--}}
{{--                    <label class="label_container green_color">5 Sessions--}}
{{--                        <input type="radio" checked="checked" name="radio">--}}
{{--                        <span class="checkmark"></span>--}}
{{--                        <h4>12 $</h4>--}}
{{--                    </label>--}}
{{--                    <label class="label_container purple_color">10 Sessions--}}
{{--                        <input type="radio" name="radio">--}}
{{--                        <span class="checkmark"></span>--}}
{{--                        <h4>15 $</h4>--}}
{{--                    </label>--}}
{{--                    <label class="label_container last_checkbox blue_color">20 Sessions--}}
{{--                        <input type="radio" name="radio">--}}
{{--                        <span class="checkmark"></span>--}}
{{--                        <h4>20 $</h4>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="bottom_main_img">--}}
{{--                    <img src="{{asset('public/assets/images/info-box-after.png')}}" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}
@stop
