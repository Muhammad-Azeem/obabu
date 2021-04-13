@extends('layouts.main')
@section('title','Obabu Home')
@section('maincontent')
    <section class="about-us-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-details">
                        <h1>Welcome Friends</h1>
                        <p class="font-weight-bold ml-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                        <div class="pt-2 ml-3">
                            <button class="btn btn-secondary mr-3 mt-4 shadow font-weight-bold">LEARN MORE</button>
                            <button class="btn btn-primary ml-0 ml-md-3 mt-4 shadow font-weight-bold">CONTACT US</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-image mt-4">
                        <img src="assets/images/about-us-1.png" class="img-fluid" alt="about us image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us-section">
        <div class="container-fluid">
            <h2 class="text-center mb-5">ABOUT US</h2>
            <div class="row">
                <div class="col-md-5">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="600" height="500"
                         viewBox="0 0 667.864 748" class="img-fluid">
                        <defs>
                            <pattern id="pattern" width="1" height="1" patternTransform="matrix(-1, 0, 0, 1, 1223.127, 0)"
                                     viewBox="0 0 611.563 658">
                                <image preserveAspectRatio="none" width="611.563" height="658"
                            </pattern>
                        </defs>
                        <g id="Group_163" data-name="Group 163" transform="translate(-224.437 -1352)">
                            <path id="Path_51" data-name="Path 51" d="M18684.848,7321.212v387.879l559.453,127.272V7193.939Z"
                                  transform="translate(-18352 -5841.939)" fill="#a1ee9b" />
                            <rect id="children_PNG18038" width="611.563" height="658" transform="translate(224.437 1442)"
                                  fill="url(#pattern)" />
                        </g>
                    </svg>

                </div>
                <div class="col-md-4">
                    <p class="mt-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, accusantium! Placeat, qui sequi, hic quo
                        sit, dolorum quasi expedita voluptas aspernatur eos voluptatum asperiores delectus minus natus corporis!
                        Vero, commodi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="our-services">
        <div class="container">
            <div class="text-right">
                <img src="assets/images/info-box-after.png" alt="Info" class="img-fluid" width="200" height="150" />
            </div>
            <h2 class="text-center mb-5">OUR SERVICES</h2>
            <div class="row justify-content-center mt-5 pt-5 pb-5">

                <div class="our-services-image d-xs-none d-sm-none d-md-none d-lg-none d-xl-block">
                    <img src="assets/images/why-us-4.png" class="img-fluid" alt="why us image 4" width="200" height="300" />
                </div>
                <div class="col-md-10 mt-5 mb-5">

                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <div class="card shadow-lg">
                                <img class="card-img-top img-fluid" src="assets/images/why-us-1.png" alt="Why Us 1">
                                <div class="card-body">
                                    <p class="card-text p-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                        eirmod tempor invidunt ut labore et dolore</p>
                                    <a href="#" class="btn btn-custom font-weight-bold mt-2 mb-2">READ MORE</a>
                                    <div class="card-footer mt-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="card shadow-lg">
                                <img class="card-img-top img-fluid" src="assets/images/why-us-2.png" alt="Why Us 2">
                                <div class="card-body">
                                    <p class="card-text p-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                        eirmod tempor invidunt ut labore et dolore</p>
                                    <a href="#" class="btn btn-custom font-weight-bold mt-2 mb-2">READ MORE</a>
                                    <div class="card-footer mt-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="card shadow-lg">
                                <img class="card-img-top img-fluid" src="assets/images/why-us-3.png" alt="Why Us 3">
                                <div class="card-body">
                                    <p class="card-text p-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                        eirmod tempor invidunt ut labore et dolore</p>
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

    <hr />

    <section class="our-team">
        <div class="container-fluid">
            <div class="row text-right">
                <div class="col">
                    <img src="assets/images/our-team-1.png" class="img-fluid" alt="image" width="200" height="150" />
                </div>
            </div>
            <div class="row justify-content-center pt-5 pb-5">
                <div class="col-md-6 text-center">
                    <h2>JOIN OUR TEAM</h2>
                    <p class="mt-3 pt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo modi optio harum incidunt
                        porro expedita dicta error rem, ab perferendis ea, sed nulla soluta, ipsa accusantium nemo minus magnam
                        consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo modi optio harum incidunt porro
                        expedita dicta error rem, ab perferendis ea, sed nulla soluta, ipsa accusantium nemo minus magnam
                        consectetur.</p>
                    <button class="btn btn-secondary mt-5">GET STARTED</button>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="assets/images/our-team-1.png" class="img-fluid" alt="image" width="200" height="150" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="info-box text-center pt-3 pb-3 m-auto w-75">
                        <p class="font-weight-bold contact-us-details">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. In quas sit id? Ut, suscipit incidunt nihil praesentium officiis autem quas consequatur nemo ipsa maxime illum vero vel! Deleniti, voluptas id.
                        </p>
                        <div class="info-text-img">
                            <img src="assets/images/contact-us.png" class="img-fluid" alt="image" width="200" height="150" >
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">CONTACT US</h2>
                    <p class="text-center p-right">Get in touch and let us know how we can help</p>
                    <form class="d-flex flex-column align-items-center justify-content-center mt-4">
                        <div class="input-group mb-3 w-50 shadow-sm ">
                            <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class='bx bxs-envelope' ></i>
                    </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Name" required>
                        </div>

                        <div class="input-group mb-3 w-50 shadow-sm mt-2">
                            <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class='bx bxs-user' ></i>
                    </span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="form-group w-50">
                            <label for="detail">Detail:</label>
                            <textarea class="form-control custom-control" rows="6"></textarea>
                        </div>
                        <button class="shadow-lg btn btn-primary" type="submit">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop