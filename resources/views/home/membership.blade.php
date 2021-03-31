@extends('layouts.main')
@section('title','Obabu Home')
@section('maincontent')
    <section class="membership_main">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="banner-details">
                        <h1><span class="text-color-secondary">Our</span> Membership Program</h1>
                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, odit. Eligendi autem quaerat quisquam aperiam perspiciatis ipsum odit exercitationem at amet eum velit vel possimus consectetur officia, maiores aut molestiae!</p>
                        <div class="mt-4 pt-2">
                            <a href="{{route('register')}}"> <button class="btn btn-primary mr-3 shadow signup">SIGN UP</button></a>
                            <button class="btn btn-secondary ml-3 shadow">CONTACT US</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner_position_img">
                        <img src="{{asset('public/assets/images/right_side.png')}}" class="img-fluid banner-image" alt="Laptop Image">
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
                <button type="button" class="btn btn-secondary shadow">Monthly Session</button>
                <p class="or">OR</p>
                <button type="button" class="btn btn-primary shadow">Weekly Session</button>
            </div>
        </div>
        <div class="main_tables_spc">
            <div class="container-fluid">
                <div class="row m-0">
                    <div class="col-md-4">
                        <div class="mem_table shadow">
                            <div class="mem_t_head">
                                <img src="{{asset('public/assets/images/blue.png')}}" class="img-fluid">
                                <div class="price_mem">
                                    <div class="price_main">
                                        <h4>20 <span>$</span></h4>
                                        <p> Per Monthly </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mem_t_data">
                                <div class="name_mem text-center">
                                    <h3>PATHFINDER</h3>
                                </div>
                                <div class="check_p">
                                    <p> <i class='bx bx-check'></i> 3 Days Per Week </p>
                                    <p> <i class='bx bx-check'></i> Select Classes Per Day : </p>
                                </div>
                                <div class="list_radio_btn">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios1" value="option1" checked>
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
                            <div class="position_img">
                                <img src="{{asset('public/assets/images/contact-us.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mem_table shadow pink_">
                            <div class="mem_t_head">
                                <img src="{{asset('public/assets/images/pink.png')}}" class="img-fluid">
                                <div class="price_mem">
                                    <div class="price_main">
                                        <h4>40 <span>$</span></h4>
                                        <p> Per Monthly </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mem_t_data">
                                <div class="name_mem text-center">
                                    <h3>EXPLORER</h3>
                                </div>
                                <div class="check_p">
                                    <p> <i class='bx bx-check'></i> 4 Days Per Week </p>
                                    <p> <i class='bx bx-check'></i> Select Classes Per Day : </p>
                                </div>
                                <div class="list_radio_btn">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios9" value="option1" checked>
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
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mem_table shadow green_">
                            <div class="mem_t_head">
                                <img src="{{asset('public/assets/images/green.png')}}" class="img-fluid">
                                <div class="price_mem">
                                    <div class="price_main">
                                        <h4>50 <span>$</span></h4>
                                        <p> Per Monthly </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mem_t_data">
                                <div class="name_mem text-center">
                                    <h3>ADVENTURER</h3>
                                </div>
                                <div class="check_p">
                                    <p> <i class='bx bx-check'></i> 5 Days Per Week </p>
                                    <p> <i class='bx bx-check'></i> Select Classes Per Day : </p>
                                </div>
                                <div class="list_radio_btn">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios10" value="option1" checked>
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
                            <div class="rotate_img">
                                <img src="{{asset('public/assets/images/blue_cartoon.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="session_card shadow">

            <div class="session_head text-center">
                <h4>Single Sessions Also Available</h4>
            </div>
            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="session_inp">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadiossession" id="exampleRadiossession" value="option2">
                          <label class="form-check-label" for="exampleRadiossession">
                            5 Sessions
                          </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="session_inp">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadiossession" id="exampleRadiossession2" value="option2">
                          <label class="form-check-label" for="exampleRadiossession2">
                            10 Sessions
                          </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="session_inp">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadiossession" id="exampleRadiossession4" value="option2">
                          <label class="form-check-label" for="exampleRadiossession4">
                            20 Sessions
                          </label>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="custom_radio_main">
                <div class="custom_radio">
                    <label class="label_container green_color">5 Sessions
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                        <h4>12 $</h4>
                    </label>
                    <label class="label_container purple_color">10 Sessions
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                        <h4>15 $</h4>
                    </label>
                    <label class="label_container last_checkbox blue_color">20 Sessions
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                        <h4>20 $</h4>
                    </label>
                </div>
                <div class="bottom_main_img">
                    <img src="{{asset('public/assets/images/info-box-after.png')}}" class="img-fluid">
                </div>
            </div>
        </section>
@stop
