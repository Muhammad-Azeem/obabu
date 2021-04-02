@extends('layouts.main')
@section('title','Obabu Home')
@section('maincontent')
    <section class="payment_cards">
        <div class="container-fluid">
            <div class="card_main">
                <div class="card_title">
                    <h3>Personal Detail</h3>
                </div>
                <div class="card_fields">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="text" name="" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="text" name="" placeholder="Last Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="custom_input green_inp">
                                <input type="email" name="" placeholder="Email Address" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="number" name="" placeholder="Phone Number" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="text" name="" placeholder="Country" class="form-control">
                            </div>
                        </div>
                        <div class="payment_top_cartoon">
                            <img src="{{asset('public/assets/images/blue_cartoon.png')}}" class="img-fluid">
                        </div>
                        <div class="payment_bottom_cartoon">
                            <img src="{{asset('public/assets/images/info-box-after.png')}}" class="img-fluid">
                        </div>
                    </div>
                    <div class="radio_img">
                        <img src="{{asset('public/assets/images/red_radio.png')}}">
                    </div>
                </div>
            </div>
            <div class="card_main chocolate">
                <div class="card_title">
                    <h3>Payment Detail</h3>
                </div>
                <div class="card_fields">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="text" name="" placeholder="Name On Card" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="number" name="" placeholder="Card Number" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="number" name="" placeholder="Pin code" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="number" name="" placeholder="CVV Number" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp align_imgs_inp">
                                <div class="accept_payment">
                                    <h4>Accepted payments</h4>
                                </div>
                                <div class="accept_imgs">
{{--                                    <img src="assets/images/Icon awesome-paypal.png">--}}
                                    <img src="{{asset('public/assets/images/Icon awesome-cc-visa.png')}}">
                                    <img src="{{asset('public/assets/images/Icon awesome-credit-card.png')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom_input green_inp">
                                <input type="number" name="" placeholder="Total Amount " class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="checkout_btn">
                       <a href="{{url('/')}}"> <button type="button" class="btn">CHECKOUT</button></a>
                    </div>
                </div>
                <div class="radio_img">
                    <img src="{{asset('public/assets/images/yellow_radio.png')}}">
                </div>
            </div>
            <div class="card_main blue_card">
                <div class="card_title">
                    <h3>Order Conformation</h3>
                </div>
                <div class="card_fields">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info_titles">
                                <h5>User Name : </h5>
                                <p>Jhonny Kate</p>
                            </div>
                            <div class="info_titles">
                                <h5>Order Number :</h5>
                                <p>1236k54</p>
                            </div>
                            <div class="info_titles">
                                <h5>Package Name : </h5>
                                <p>PATHFINDER <span class="blur_color">Per Month</span></p>
                            </div>
                            <div class="manage_order">
                                <button type="button" class="btn">View or Manage Order</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info_titles mb-3">
                                <h5>Total Before Tax :</h5>
                                <p>$799</p>
                            </div>
                            <div class="info_titles mb-3">
                                <h5>Estimated Tax :</h5>
                                <p>$199</p>
                            </div>
                            <div class="total">
                                <h5>Order Total           :</h5>
                                <p>$899</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="radio_img">
                    <img src="{{asset('public/assets/images/blue_radio.png')}}">
                </div>
                <div class="payment_bottom_cartoon_lst">
                    <img src="{{asset('public/assets/images/blue_cartoon.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="horizontal_line">
            <hr>
        </div>
    </section>

@stop

