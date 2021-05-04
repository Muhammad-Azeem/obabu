<!DOCTYPE html>
<html>
	<head>
		<title>Obabu || New</title>
		<meta charset="utf-8">
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
		<!-- Swiper Slider -->
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

		<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	</head>
	<style>

    .swiper-container {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    .swiper-container-android .swiper-slide, .swiper-wrapper , .swiper-slide {
    	height: 250px;
    	background: transparent !important;
    }
    .slider_icons div {
    	position: inherit !important;
    }
    .slider_icons {
    	display: flex;
    	flex-direction: row-reverse;
    }
    .slider_icons .swiper-button-next:after, .swiper-container-rtl .swiper-button-prev:after{
	    font-size: 18px;
	    font-weight: 800;
	    color: #fc22b6;
	    outline: none;
    }
    .slider_icons .swiper-button-prev:after, .swiper-container-rtl .swiper-button-next:after {
    	font-size: 18px;
	    font-weight: 800;
	    color: #fc22b6;
	    outline: none;
    }



    .swiper-container-teacher , .swiper-container-cordinator {
    	overflow: hidden;
    }
    .swiper-button-next-teacher, .swiper-button-prev-teacher , .swiper-button-next-cordinator, .swiper-button-prev-cordinator {
	    position: absolute;
	    top: 50%;
	    width: calc(var(--swiper-navigation-size)/ 44 * 27);
	    height: var(--swiper-navigation-size);
	    margin-top: calc(0px - (var(--swiper-navigation-size)/ 2));
	    z-index: 10;
	    cursor: pointer;
	    display: flex;
	    align-items: center;
	    justify-content: center;
	    color: var(--swiper-navigation-color,var(--swiper-theme-color));
	}
	.swiper-button-next-teacher, .swiper-container-rtl .swiper-button-prev-teacher {
	    right: 10px;
	    left: auto;
	}
	.swiper-button-next-teacher.swiper-button-disabled, .swiper-container-rtl .swiper-button-prev-teacher.swiper-button-disabled {
	    right: 10px;
	    left: auto;
	}

	.slider_icons .swiper-button-prev-teacher:after, .swiper-container-rtl .swiper-button-next-teacher:after {
	    font-size: 18px;
	    font-weight: 800;
	    color: #fc22b6;
	    outline: none;
	}
	.slider_icons .swiper-button-next-teacher:after, .swiper-container-rtl .swiper-button-prev-teacher:after {
	    font-size: 18px;
	    font-weight: 800;
	    color: #fc22b6;
	    outline: none;
	}
	.swiper-button-next-teacher:after, .swiper-container-rtl .swiper-button-prev-teacher:after {
	    content: 'next';
	    font-family: swiper-icons;
	}
	.swiper-button-prev-teacher:after, .swiper-container-rtl .swiper-button-next-teacher:after {
    content: 'prev';
    font-family: swiper-icons;
}
.slider_icons .swiper-button-prev-cordinator:after, .swiper-container-rtl .swiper-button-next-cordinator:after {
	    font-size: 18px;
	    font-weight: 800;
	    color: #fac61a;
	    outline: none;
	}
	.slider_icons .swiper-button-next-cordinator:after, .swiper-container-rtl .swiper-button-prev-cordinator:after {
	    font-size: 18px;
	    font-weight: 800;
	    color: #fac61a;
	    outline: none;
	}
	.swiper-button-next-cordinator:after, .swiper-container-rtl .swiper-button-prev-cordinator:after {
	    content: 'next';
	    font-family: swiper-icons;
	}
	.swiper-button-prev-cordinator:after, .swiper-container-rtl .swiper-button-next-cordinator:after {
    content: 'prev';
    font-family: swiper-icons;
}
.slider_icons .swiper-button-next:after, .swiper-container-rtl .swiper-button-prev:after , .slider_icons .swiper-button-prev:after, .swiper-container-rtl .swiper-button-next:after{
	    color: #20bcc9;
}
.main_teacher , .main_teacher {
	margin-top: 2.4rem;
}
.show_more_slider button {
	font-size: 14px;
    font-weight: 500;
    border-radius: 35px;
    padding: 8px 20px;
    color: #fff;
    background: #fac61a;
filter: drop-shadow(3px 3px 6px rgba(0, 0, 0, 0.15));
}
.slider_yellow_carton {
	position: absolute;
    top: -26px;
    right: 0px;
}
.slider_yellow_carton img {
	    width: 61%;
}
	</style>
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
			</section>
			<section class="community_main">
				<div class="container-fluid">
					<div class="main_heading_comm">
						<h2><span>My</span> Community</h2>

					</div>
					<div class="row">
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-6">
									<div class="main_teacher">
										<div class="main_slider_text">
											<h3>MY TEACHER</h3>
											<div class="slider_icons">
												<div class="swiper-button-next-teacher"></div>
												<div class="swiper-button-prev-teacher"></div>
											</div>
										</div>
										<div class="swiper-container-teacher">
											<div class="swiper-wrapper">
                                                @foreach($userst as $userst)
												<div class="swiper-slide">
													<div class="main_slider_comm text-center blu_slider_color">
														<div class="img_section">
															<img src="assets/images/slider_1.png" class="img-fluid">
															<h3>{{$userst->name}}</h3>
															<a href="#">{{$userst->email}}</a>
															<div class="img_icon">
																<a href="#"><i class='bx bxs-message-detail' ></i></a>
																<a href="#"><i class='bx bxs-hand-up ml-1' ></i></a>
															</div>
														</div>
														<div class="img_buttons">
															<button type="button" class="btn yellow_btn">Profile</button>
															<button type="button" class="btn pink_btn ml-1">Contact</button>
														</div>
														<div class="cross_slider">
															<i class='bx bx-x'></i>
														</div>
													</div>
												</div>
                                                @endforeach

											</div>
										</div>
										<div class="show_more_slider text-right w-100">
											<button type="button" class="btn">Show More!</button>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="main_teacher">
										<div class="main_slider_text yello_main_slider">
											<h3>NEW MEMBER</h3>
											<div class="slider_icons">
												<div class="swiper-button-next-cordinator"></div>
												<div class="swiper-button-prev-cordinator"></div>
											</div>
											<div class="slider_yellow_carton">
											<img src="assets/images/tble_top.png">
										</div>
										</div>
										<div class="swiper-container-cordinator">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<div class="main_slider_comm text-center blu_slider_color">
														<div class="img_section">
															<img src="assets/images/slider_1.png" class="img-fluid">
															<h3>Grant Nyasia </h3>
															<a href="#">www.sunny@gmail,com</a>
															<div class="img_icon">
																<a href="#"><i class='bx bxs-message-detail' ></i></a>
																<a href="#"><i class='bx bxs-hand-up ml-1' ></i></a>
															</div>
														</div>
														<div class="img_buttons">
															<button type="button" class="btn yellow_btn">Profile</button>
															<button type="button" class="btn pink_btn ml-1">Contact</button>
														</div>
														<div class="cross_slider">
															<i class='bx bx-x'></i>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="main_slider_comm text-center yel_slider_color">
														<div class="img_section">
															<img src="assets/images/slider_1.png" class="img-fluid">
															<h3>Grant Nyasia </h3>
															<a href="#">www.sunny@gmail,com</a>
															<div class="img_icon">
																<a href="#"><i class='bx bxs-message-detail' ></i></a>
																<a href="#"><i class='bx bxs-hand-up ml-1' ></i></a>
															</div>
														</div>
														<div class="img_buttons">
															<button type="button" class="btn blue_btn">Profile</button>
															<button type="button" class="btn purple_btn ml-1">Contact</button>
														</div>
														<div class="cross_slider">
															<i class='bx bx-x'></i>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="main_slider_comm text-center purple_slider_color">
														<div class="img_section">
															<img src="assets/images/slider_1.png" class="img-fluid">
															<h3>Grant Nyasia </h3>
															<a href="#">www.sunny@gmail,com</a>
															<div class="img_icon">
																<a href="#"><i class='bx bxs-message-detail' ></i></a>
																<a href="#"><i class='bx bxs-hand-up ml-1' ></i></a>
															</div>
														</div>
														<div class="img_buttons">
															<button type="button" class="btn blue_btn">Profile</button>
															<button type="button" class="btn pink_btn ml-1">Contact</button>
														</div>
														<div class="cross_slider">
															<i class='bx bx-x'></i>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="main_slider_comm text-center pink_slider_color">
														<div class="img_section">
															<img src="assets/images/slider_1.png" class="img-fluid">
															<h3>Grant Nyasia </h3>
															<a href="#">www.sunny@gmail,com</a>
															<div class="img_icon">
																<a href="#"><i class='bx bxs-message-detail' ></i></a>
																<a href="#"><i class='bx bxs-hand-up ml-1' ></i></a>
															</div>
														</div>
														<div class="img_buttons">
															<button type="button" class="btn yellow_btn">Profile</button>
															<button type="button" class="btn blue_btn ml-1">Contact</button>
														</div>
														<div class="cross_slider">
															<i class='bx bx-x'></i>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="main_slider_comm text-center pink_slider_color">
														<div class="img_section">
															<img src="assets/images/slider_1.png" class="img-fluid">
															<h3>Grant Nyasia </h3>
															<a href="#">www.sunny@gmail,com</a>
															<div class="img_icon">
																<a href="#"><i class='bx bxs-message-detail' ></i></a>
																<a href="#"><i class='bx bxs-hand-up ml-1' ></i></a>
															</div>
														</div>
														<div class="img_buttons">
															<button type="button" class="btn yellow_btn">Profile</button>
															<button type="button" class="btn blue_btn ml-1">Contact</button>
														</div>
														<div class="cross_slider">
															<i class='bx bx-x'></i>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="main_slider_comm text-center pink_slider_color">
														<div class="img_section">
															<img src="assets/images/slider_1.png" class="img-fluid">
															<h3>Grant Nyasia </h3>
															<a href="#">www.sunny@gmail,com</a>
															<div class="img_icon">
																<a href="#"><i class='bx bxs-message-detail' ></i></a>
																<a href="#"><i class='bx bxs-hand-up ml-1' ></i></a>
															</div>
														</div>
														<div class="img_buttons">
															<button type="button" class="btn yellow_btn">Profile</button>
															<button type="button" class="btn blue_btn ml-1">Contact</button>
														</div>
														<div class="cross_slider">
															<i class='bx bx-x'></i>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="show_more_slider text-right w-100">
											<button type="button" class="btn">Show More!</button>
										</div>

									</div>
								</div>
							</div>
							<div class="main_slider_text blue_slider_text">
								<h3>STUDENT IN MY CLASS</h3>
								<div class="slider_icons">
									<div class="swiper-button-next"></div>
									<div class="swiper-button-prev"></div>
								</div>
							</div>
							<div class="row add_padding_sli">
								<div class="swiper-container">
									<div class="swiper-wrapper">
                                        @foreach($users as $user)
                                            @if($user->id !=Illuminate\Support\Facades\Auth::id())
										<div class="swiper-slide">
											<div class="main_slider_comm text-center blu_slider_color">
												<div class="img_section">
													<img src="assets/images/slider_1.png" class="img-fluid">
													<h3>{{$user->name}} </h3>
													<a href="#">{{$user->email}}</a>
													<div class="img_icon">
														<a href="#"><i class='bx bxs-message-detail' ></i></a>
														<a href="#"><i class='bx bxs-hand-up ml-1' ></i></a>
													</div>
												</div>
												<div class="img_buttons">
													<button type="button" class="btn yellow_btn">Profile</button>
													<button type="button" class="btn pink_btn ml-1">Contact</button>
												</div>
												<div class="cross_slider">
													<i class='bx bx-x'></i>
												</div>
											</div>
										</div>
                                            @endif
                                        @endforeach

									</div>
								</div>
								<div class="show_more_slider text-right w-100">
									<button type="button" class="btn">Show More!</button>
								</div>
								<div class="top_slider_cartoon">
									<img src="assets/images/blue_cartoon.png">
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="profile_section community_pf text-center student_color">
								<img src="assets/images/student_acti.png" class="img-fluid">
								<h3>{{$authUser->name}}</h3>
								<a href="#">{{$authUser->email}}</a>
								<button type="button" class="contact_btn">View Profile</button>
							</div>
							<div class="comm_bottom_image">
								<img src="assets/images/cartooons.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		  <script>
		    var swiper = new Swiper('.swiper-container', {
		      slidesPerView: 6,
		      spaceBetween: 30,
		      pagination: {
		        el: '.swiper-pagination',
		        clickable: true,
		      },
		         navigation: {
			        nextEl: '.swiper-button-next',
			        prevEl: '.swiper-button-prev',
			      },
		    });
		  </script>
		  <script>
		    var swiper = new Swiper('.swiper-container-teacher', {
		      slidesPerView: 3,
		      spaceBetween: 1,
		      pagination: {
		        el: '.swiper-pagination',
		        clickable: true,
		      },
		         navigation: {
			        nextEl: '.swiper-button-next-teacher',
			        prevEl: '.swiper-button-prev-teacher',
			      },
		    });
		  </script>
		  <script>
		    var swiper = new Swiper('.swiper-container-cordinator', {
		      slidesPerView: 3,
		      spaceBetween: 1,
		      pagination: {
		        el: '.swiper-pagination',
		        clickable: true,
		      },
		         navigation: {
			        nextEl: '.swiper-button-next-cordinator',
			        prevEl: '.swiper-button-prev-cordinator',
			      },
		    });
		  </script>
	</body>
</html>
