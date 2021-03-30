@extends('layouts.main')
@section('title','Obabu Home')
@section('maincontent')
    <section class="fun-happen-here">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="text-center">FUN HAPPENS HERE</h1>
                    <p class="text-white text-center">Play dates will never be the same</p>
                    <div class="mt-4 pt-2 text-center">
                        <a href="{{route('register')}}" class="btn btn-primary mr-3 shadow">SIGN UP</a>
                        <a class="btn btn-secondary ml-3 shadow">CONTACT US</a>
                    </div>
                    <img src="{{asset('public/assets/images/home-top.png')}}" class="img-fluid"  width="450" height="400">
                    <div class="info-box text-center pt-3 pb-3">
                        <p class="mt-5 mb-0 pt-2 font-weight-bold">Fun Happen OBABU Connects Your Child To Friends To All Over</p>
                        <p class="mb-5 pt-2 font-weight-bold"> The World. Play Dates Will
                            Never Be The Same Here
                        </p>
                    </div>
                    <div class="text-right">
                        <img src="{{asset('public/assets/images/info-box-after.png')}}" alt="Info" class="img-fluid" width="200" height="150"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-us">
        <div class="container">
            <h2 class="text-center mb-5">WHY US</h2>
            <div class="row justify-content-center mt-5 pt-5 pb-5">
                <div class="why-us-image d-xs-none d-sm-none d-md-none d-lg-none d-xl-block">
                    <img src="{{asset('public/assets/images/why-us-4.png')}}" class="img-fluid" alt="why us image 4" width="200" height="300"/>
                </div>
                <div class="col-md-10 mt-5 mb-5">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <div class="card shadow-lg">
                                <img class="card-img-top img-fluid" src="{{asset('public/assets/images/why-us-1.png')}}" alt="Why Us 1">
                                <div class="card-body">
                                    <p class="card-text p-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    <a href="#" class="btn btn-custom font-weight-bold mt-2 mb-2">READ MORE</a>
                                    <div class="card-footer mt-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="card shadow-lg">
                                <img class="card-img-top img-fluid" src="{{asset('public/assets/images/why-us-2.png')}}" alt="Why Us 2">
                                <div class="card-body">
                                    <p class="card-text p-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    <a href="#" class="btn btn-custom font-weight-bold mt-2 mb-2">READ MORE</a>
                                    <div class="card-footer mt-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="card shadow-lg">
                                <img class="card-img-top img-fluid" src="{{asset('public/assets/images/why-us-3.png')}}" alt="Why Us 3">
                                <div class="card-body">
                                    <p class="card-text p-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    <a href="#" class="btn btn-custom font-weight-bold mt-2 mb-2">READ MORE</a>
                                    <div class="card-footer mt-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-team">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col">
                    <img src="{{asset('public/assets/images/our-team-1.png')}}" class="img-fluid" alt="image" width="200" height="150" />
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <h2>OUR TEAM</h2>
                    <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam, aliquam quos esse odit eius ipsam? Recusandae, aliquid odio ipsam voluptatem incidunt exercitationem maiores provident quae quaerat atque repellat culpa.</p>
                </div>
            </div>
            <section class="explore-the-fun">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <img src="{{asset('public/assets/images/our-team-1.png')}}" class="img-fluid" alt="image" width="200" height="150" />
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <h2>EXPLORE THE FUN</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5 pb-5">
                        <div class="col-md-4">
                            <img src="{{asset('public/assets/images/explore-fun-bg.png')}}" class="img-fluid" alt="explore image"/>
                        </div>
                        <div class="col-md-4 pt-4">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo modi optio harum incidunt porro expedita dicta error rem, ab perferendis ea, sed nulla soluta, ipsa accusantium nemo minus magnam consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo modi optio harum incidunt porro expedita dicta error rem, ab perferendis ea, sed nulla soluta, ipsa accusantium nemo minus magnam consectetur.</p>
                            <button class="btn btn-primary shadow-lg font-weight-bold mt-4">EXPLORE!</button>
                        </div>
                    </div>
                </div>
            </section>

@stop
