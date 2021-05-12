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
			<section class="teacher_section teacher_booking_sec student_calendar_img">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3">
							<div class="profile_section text-center student_profile_cal">
								<div class="img_stu_with_tag">
									<img src="assets/images/teacher2.png" class="img-fluid">
									<p>3B</p>
								</div>
								<h3>Bergstrom Eudora</h3>
								<a href="#">www.helloe@gmail.com</a>
								<div class="student_related_data">
									<p>MEMBERSHIP PACKAGE : <span>Pathfinder</span></p>
									<p>CLASSES PER DAY : <span>4 Classes per day</span></p>
									<p>DAY PER WEEK : <span>4 days per week</span></p>
									<p>REMAINING SESSIONS : <span>4 Sessions</span></p>
								</div>
								<button type="button" class="contact_btn">View Profile</button>
							</div>
						</div>
						<div class="col-md-9">
							<div class="card student_calendar_space">
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
				</div>
			</section>
		</main>
</body>
</html>