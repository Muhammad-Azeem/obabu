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
		<link rel="stylesheet" type="text/css" href="assets/css/calendar.css">
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">

		<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.css">


		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

		<script src="assets/js/calendar.js"></script>

	</head>
	<style>
		  .swiper-container {
      width: 100%;
      /*height: 100%;*/
    }

    .swiper-slide ,{
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
    .swiper-slide {
    	text-align: inherit !important;
    	display: initial !important;
    }
    .swiper-button-next, .swiper-container-rtl .swiper-button-prev , .swiper-button-prev, .swiper-container-rtl .swiper-button-next{
    	position: inherit !important;
    }
    .slider_arrows {
    	display: flex;
    	flex-direction: row-reverse;
    }
    .swiper-button-next:after, .swiper-container-rtl .swiper-button-prev:after , .swiper-button-prev:after, .swiper-container-rtl .swiper-button-next:after{
    	    font-size: 16px;
    color: #683586;
    font-weight: bold;
    }
    .swiper-container-links {
    	overflow: hidden;
    }
    .slider_icons .swiper-button-prev-link:after, .swiper-container-rtl .swiper-button-next-link:after {
	    font-size: 18px;
	    font-weight: 800;
	    color: #fac61a;
	    outline: none;
	}
	.slider_icons .swiper-button-next-link:after, .swiper-container-rtl .swiper-button-prev-link:after {
	    font-size: 18px;
	    font-weight: 800;
	    color: #fac61a;
	    outline: none;
	}
	.swiper-button-next-link:after, .swiper-container-rtl .swiper-button-prev-link:after {
	    content: 'next';
	    font-family: swiper-icons;
	}
	.swiper-button-prev-link:after, .swiper-container-rtl .swiper-button-next-link:after {
	    content: 'prev';
	    font-family: swiper-icons;
	}
	.swiper-button-next-link, .swiper-button-prev-link {
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
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarToggler">
									<ul class="navbar-nav ml-auto teacher_navbar">
										<li class="nav-item">
											<a class="nav-link text-white">HOME</a>
										</li>
										<li class="nav-item ">
											<a class="nav-link">ABOUT US</a>
										</li>
										<li class="nav-item active">
											<a class="nav-link">ACTIVITY</a>
										</li>
										<li class="nav-item">
											<a class="nav-link">SALES</a>
										</li>
										<li class="nav-item">
											<a class="nav-link">CHAT VIEW</a>
										</li>
										<li class="nav-item">
											<a class="nav-link">LOGIN</a>
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
			<section class="teacher_section teacher_booking_sec">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3">
							<div class="profile_section text-center">
								<img src="assets/images/teacher_profile.png" class="img-fluid">
								<h3>Bergstrom Eudora</h3>
								<a href="#">www.helloe@gmail.com</a>
								<button type="button" class="contact_btn">CONTACT ME !</button>
							</div>
						</div>
						<div class="col-md-9">
							<div class="card">
							    <div class="card-body p-0">
							      <div id="calendar"></div>
							      <div class="calendar_image">
							      	<img src="assets/images/tble_top.png" class="img-fluid right_calendar">
							      	<img src="assets/images/blue_cartoon.png" class="img-fluid left_calendar">
							      </div>
							      <div id="modal-view-event" class="modal modal-top fade calendar-modal">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-body">
													<h4 class="modal-title"><span class="event-icon"></span><span class="event-title"></span></h4>
													<div class="event-body"></div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
							    </div>
						  	</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="catergories_tech mt-3">
								<h2>CLASS CATEGORIES</h2>
							</div>
						</div>
						<div class="col-md-2">
							<div class="category_list text-center">
								<img src="assets/images/computer.png">
								<p>COMPUTER</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="category_list text-center">
								<img src="assets/images/arts.png">
								<p>ARTS & CRAFT</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="category_list text-center">
								<img src="assets/images/litrature.png">
								<p>PHYSICS</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="category_list text-center">
								<img src="assets/images/chemistry.png">
								<p>SCIENCE</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="category_list text-center">
								<img src="assets/images/english.png">
								<p>ENGLISH</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="category_list text-center">
								<img src="assets/images/Tools.png">
								<p>MATHEMATICS</p>
							</div>
						</div>
					</div>
					<div class="row m-0">
						<div class="col-md-6">
							<div class="tech_techer add_spc_top_tch left_more_tech">
								<div class="join_head">
									<h3>CURRENT WEEK CLASSES</h3>
									<!-- <img src="assets/images/tble_top.png" class="img-fluid"> -->
									<div class="slider_arrows">
										<div class="swiper-button-next"></div>
										<div class="swiper-button-prev"></div>
									</div>
									<div class="tch_bl_im">
										<img src="assets/images/blue_cartoon.png" class="img-fluid">
									</div>
								</div>
							</div>
							
							<div class="swiper-container">
								<div class="swiper-wrapper">
									
									
									
									<div class="swiper-slide">
										<div class="tech_techer">
											<div class="main_join_tble">
												
												<div class="jn_tbl">
													<table>
														<tbody><tr class="purple_fill">
															<th class="add_left_brdr">USER</th>
															<th>CLASS</th>
															<th>DATE/TIME</th>
															<th class="add_right_brdr">DAY</th>
														</tr>
														<tr class="blue_fill">
															<td class="td add_left_brdr fic_Width">
																<div class="stu_detail">
																	<img src="assets/images/tble_img.png" class="img-fluid">
																	<p>Hane Carmela</p>
																</div>
															</td>
															<td>ENGLISH</td>
															<td>
																<div class="time_date">
																	<p>14 - JAN - 2021</p>
																	<p>AT 4 pm to 4:50 pm</p>
																</div>
															</td>
															<td class="add_right_brdr">MONDAY</td>
														</tr>
														<tr class="pink_fill">
															<td class="td add_left_brdr fic_Width">
																<div class="stu_detail">
																	<img src="assets/images/tble_img.png" class="img-fluid">
																	<p>Hane Carmela</p>
																</div>
															</td>
															<td>ENGLISH</td>
															<td>
																<div class="time_date">
																	<p>14 - JAN - 2021</p>
																	<p>AT 4 pm to 4:50 pm</p>
																</div>
															</td>
															<td class="add_right_brdr">TUESDAY</td>
														</tr>
														<tr class="yellow_fill">
															<td class="td add_left_brdr fic_Width">
																<div class="stu_detail">
																	<img src="assets/images/tble_img.png" class="img-fluid">
																	<p>Hane Carmela</p>
																</div>
															</td>
															<td>ENGLISH</td>
															<td>
																<div class="time_date">
																	<p>14 - JAN - 2021</p>
																	<p>AT 4 pm to 4:50 pm</p>
																</div>
															</td>
															<td class="add_right_brdr">WEDNESDAY</td>
														</tr>
														<tr class="blue_fill">
															<td class="td add_left_brdr fic_Width">
																<div class="stu_detail">
																	<img src="assets/images/tble_img.png" class="img-fluid">
																	<p>Hane Carmela</p>
																</div>
															</td>
															<td>ENGLISH</td>
															<td>
																<div class="time_date">
																	<p>14 - JAN - 2021</p>
																	<p>AT 4 pm to 4:50 pm</p>
																</div>
															</td>
															<td class="add_right_brdr">THURSDAY</td>
														</tr>
														<tr class="purple_fill">
															<td class="td add_left_brdr fic_Width">
																<div class="stu_detail">
																	<img src="assets/images/tble_img.png" class="img-fluid">
																	<p>Hane Carmela</p>
																</div>
															</td>
															<td>ENGLISH</td>
															<td>
																<div class="time_date">
																	<p>14 - JAN - 2021</p>
																	<p>AT 4 pm to 4:50 pm</p>
																</div>
															</td>
															<td class="add_right_brdr">MONDAY</td>
														</tr>
														<tr class="pink_fill">
															<td class="td add_left_brdr fic_Width">
																<div class="stu_detail">
																	<img src="assets/images/tble_img.png" class="img-fluid">
																	<p>Hane Carmela</p>
																</div>
															</td>
															<td>ENGLISH</td>
															<td>
																<div class="time_date">
																	<p>14 - JAN - 2021</p>
																	<p>AT 4 pm to 4:50 pm</p>
																</div>
															</td>
															<td class="add_right_brdr">TUESDAY</td>
														</tr>
													</tbody></table>
												</div>
											</div>
										</div>
									</div>
									
									<div class="swiper-slide">
										<div class="tech_techer">
											<div class="main_join_tble">
												<div class="jn_tbl">
													<table>
														<tbody><tr class="purple_fill">
															<th class="add_left_brdr">USER</th>
															<th>CLASS</th>
															<th>DATE/TIME</th>
															<th class="add_right_brdr">DAY</th>
														</tr>
														<tr class="blue_fill">
															<td class="td add_left_brdr fic_Width">
																<div class="stu_detail">
																	<img src="assets/images/tble_img.png" class="img-fluid">
																	<p>Hane Carmela</p>
																</div>
															</td>
															<td>ENGLISH</td>
															<td>
																<div class="time_date">
																	<p>14 - JAN - 2021</p>
																	<p>AT 4 pm to 4:50 pm</p>
																</div>
															</td>
															<td class="add_right_brdr">MONDAY</td>
														</tr>
														<tr class="pink_fill">
															<td class="td add_left_brdr fic_Width">
																<div class="stu_detail">
																	<img src="assets/images/tble_img.png" class="img-fluid">
																	<p>Hane Carmela</p>
																</div>
															</td>
															<td>ENGLISH</td>
															<td>
																<div class="time_date">
																	<p>14 - JAN - 2021</p>
																	<p>AT 4 pm to 4:50 pm</p>
																</div>
															</td>
															<td class="add_right_brdr">TUESDAY</td>
														</tr>
														<tr class="yellow_fill">
															<td class="td add_left_brdr fic_Width">
																<div class="stu_detail">
																	<img src="assets/images/tble_img.png" class="img-fluid">
																	<p>Hane Carmela</p>
																</div>
															</td>
															<td>ENGLISH</td>
															<td>
																<div class="time_date">
																	<p>14 - JAN - 2021</p>
																	<p>AT 4 pm to 4:50 pm</p>
																</div>
															</td>
															<td class="add_right_brdr">WEDNESDAY</td>
														</tr>
														<tr class="blue_fill">
															<td class="td add_left_brdr fic_Width">
																<div class="stu_detail">
																	<img src="assets/images/tble_img.png" class="img-fluid">
																	<p>Hane Carmela</p>
																</div>
															</td>
															<td>ENGLISH</td>
															<td>
																<div class="time_date">
																	<p>14 - JAN - 2021</p>
																	<p>AT 4 pm to 4:50 pm</p>
																</div>
															</td>
															<td class="add_right_brdr">THURSDAY</td>
														</tr>
														<tr class="purple_fill">
															<td class="td add_left_brdr fic_Width">
																<div class="stu_detail">
																	<img src="assets/images/tble_img.png" class="img-fluid">
																	<p>Hane Carmela</p>
																</div>
															</td>
															<td>ENGLISH</td>
															<td>
																<div class="time_date">
																	<p>14 - JAN - 2021</p>
																	<p>AT 4 pm to 4:50 pm</p>
																</div>
															</td>
															<td class="add_right_brdr">MONDAY</td>
														</tr>
														<tr class="pink_fill">
															<td class="td add_left_brdr fic_Width">
																<div class="stu_detail">
																	<img src="assets/images/tble_img.png" class="img-fluid">
																	<p>Hane Carmela</p>
																</div>
															</td>
															<td>ENGLISH</td>
															<td>
																<div class="time_date">
																	<p>14 - JAN - 2021</p>
																	<p>AT 4 pm to 4:50 pm</p>
																</div>
															</td>
															<td class="add_right_brdr">TUESDAY</td>
														</tr>
													</tbody></table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Add Arrows -->
							
						</div>
						<div class="col-md-6">
							<div class="tech_techer link_tech add_spc_top_tch">
								<div class="join_head">
									<h3>LINKS</h3>
									<!-- <img src="assets/images/tble_top.png" class="img-fluid"> -->
									<div class="slider_arrows">
										<div class="swiper-button-next-link"></div>
										<div class="swiper-button-prev-link"></div>
									</div>
									<div class="tech_top_image">
										<img src="assets/images/tble_top.png" class="img-fluid">
									</div>
								</div>
							</div>
							
							<div class="swiper-container-links">
								<div class="swiper-wrapper">
									
									
									
									<div class="swiper-slide">
										<div class="yellow_fill">
											<div class="main_fil_link">
												<img src="assets/images/slider_dog.png" class="img-fluid">
												<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
											</div>
										</div>
										<div class="pink_fill">
											<div class="main_fil_link">
												<img src="assets/images/slider_dog.png" class="img-fluid">
												<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
											</div>
										</div>
										<div class="purple_fill">
											<div class="main_fil_link">
												<img src="assets/images/slider_dog.png" class="img-fluid">
												<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
											</div>
										</div>
									</div>
									
									<div class="swiper-slide">
										
									</div>
								</div>
							</div>
							<!-- Add Arrows -->
						</div>
						<div class="col-md-6">
							
						</div>
					</div>
				</div>
			</section>
		</main>
	  <script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>	
  <script>
    var swiper = new Swiper('.swiper-container-links', {
      navigation: {
        nextEl: '.swiper-button-next-link',
        prevEl: '.swiper-button-prev-link',
      },
    });
  </script>	
</body>
</html>