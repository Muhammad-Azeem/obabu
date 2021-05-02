<<<<<<< HEAD
@extends('layouts.app')
@section('maincontent')
<section class="teacher_section" style="margin-bottom: 50px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="profile_section profile_section2 text-center">
                    <img src="assets/images/teacher2.png" class="img-fluid">
                    <h3>{{$user->name}}</h3>
                    <a href="#">{{$user->email}}</a>
                    <!-- <button type="button" class="contact_btn">CONTACT ME !</button> -->
                </div>
                <div class="profile_section change_profie_clr text-center">
                    <img src="assets/images/teacher3.png" class="img-fluid">
                    <h3>Bergstrom Eudora</h3>
                    <a href="#">{{$user->email}}</a>
                    <button type="button" class="contact_btn">Acount Setting</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="teacher_info">
                    <div class="tch_info_head d-flex justify-content-between">
                        <h3>PERSONAL INFORMATION</h3>
                        <i class='bx bxs-pencil' id="edit_user_profile"></i>
                    </div>
                    <div class="tch_details">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="info_detail">
                                    <h3>NAME :</h3>
                                    <h3>FATHER NAME :</h3>
                                    <h3>FATHER NAME :</h3>
                                    <h3>ADDRESS :</h3>
                                    <h3>EMAIL :</h3>
                                    <h3>MOBILE NUMBER:</h3>
                                    <h3>AGE :</h3>
                                    <h3>GENDER :</h3>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="info_detail" id="edit_user_profile_data">
                                    <p>{{$user->name}}</p>
                                    <p>Bergstrom Eudora</p>
                                    <p>Bergstrom Eudora</p>
                                    <p>@if($user->address == Null)
                                    XXXXXXXX-XXXX-XXXX
                                        @else
                                            {{$user->address}}
                                           @endif
                                    </p>
                                    <p>{{$user->email}}</p>
                                    <p>{{$user->phone}}</p>
                                    <p>{{$user->age}}</p>
                                    <p>{{$user->gender}}</p>
                                </div>
                                <div class="info_detail" id="profile_form_user">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intrest_info2">
                    <div class="per_info_head _main_image_haed_ad d-flex justify-content-between">
                        <h3>INTEREST & SKILLS</h3>
                        <i class='bx bxs-pencil'></i>
                        <img src="assets/images/tble_top.png" class="intrest_poision">
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="intrst_img">
                                <img src="assets/images/equation.png" class="img-fluid">
                                <p>MATHEMATICS</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="intrst_img">
                                <img src="assets/images/Design.png" class="img-fluid">
                                <p>LOGIC</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="intrst_img">
                                <img src="assets/images/psychology.png" class="img-fluid">
                                <p>PSYCHOLOGY</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="intrst_img">
                                <img src="assets/images/contact-book.png" class="img-fluid">
                                <p>EDUCATION</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="hobbies_sections">
                    <div class="hobbies">
                        <h3>HOBBIES</h3>
                        <div class="main_hobbies_images">
                            <div class="images_hobby">
                                <div class="img_hobby text-center blue_color">
                                    <img src="assets/images/hobby1.png" class="img-fluid">
                                    <p>CREATIVE THINKING</p>
                                </div>
                                <div class="img_hobby text-center">
                                    <img src="assets/images/hobby2.png" class="img-fluid">
                                    <p>PUZZEL SOLVING</p>
                                </div>
                                <div class="img_hobby text-center yellow_color">
                                    <img src="assets/images/h_y.png" class="img-fluid">
                                    <p>ART & CRAFT</p>
                                </div>
                                <div class="img_hobby text-center pink_color">
                                    <img src="assets/images/hobby3.png" class="img-fluid">
                                    <p>CREATIVE THINKING</p>
                                </div>
                                <div class="img_hobby text-center">
                                    <img src="assets/images/hobby4.png" class="img-fluid">
                                    <p>CREATIVE THINKING</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="edu_sec edu_sec2">
                    <div class="main_edu">
                        <div class="edu_img">
                            <img src="assets/images/mortarboard.png" class="img-fluid">
                        </div>
                        <div class="edu_data">

                            <h3>EDUCATION <i class='bx bxs-pencil' id="edit_education_student"></i> </h3>
                         <div id="update_student_data">
                             <h5>{{$userEducation->school}}</h5>
                             <h5>Current Class : {{$userEducation->class}}</h5>
                         </div>
                           <div id="edit_student_education_form">

                           </div>
                        </div>
                    </div>
                </div>
                <div class="languag_sec languag_sec2">
                    <div class="per_info_head yellow_head d-flex justify-content-between">
                        <h3>LANGUAGE PROFICIENCY</h3>
                        <i class='bx bxs-pencil'></i>
                    </div>
                    <div class="row">
                        @foreach($userLanuage as $userL)
                        <div class="col-md-6">
                            <div class="languag_main">
                                <img src="assets/images/translator.png" class="img-fluid">
                                <div class="languag_name">
                                    <h4>{{$userL->language}}<i class='bx bxs-pencil'onclick="editLanguage({{$userL->id}})"></i></h4>
                                    <p>{{$userL->level}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal" tabindex="-1" role="dialog" id="edit_Modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal_content">
                <form action="{{route('edit_language')}}" method="POST">
                    @csrf
                    <label for="language">Language</label>
                    <div class="cntcn_inp">
                    <input class="form-control" type="text" value="" name="language">
                    </div>
                    <label for="level">Language</label>
                    <input type="text" value="" name="level">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@stop

=======
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
										<li class="nav-item ">
											<a class="nav-link">ACTIVITY</a>
										</li>
										<li class="nav-item active">
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
			<section class="teacher_section add_profile_bg_student">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3">
							<div class="profile_section profile_section2 text-center">
								<img src="assets/images/teacher2.png" class="img-fluid">
								<h3>Bergstrom Eudora</h3>
								<a href="#">www.helloe@gmail.com</a>
								<!-- <button type="button" class="contact_btn">CONTACT ME !</button> -->
							</div>
							<div class="profile_section change_profie_clr text-center">
								<img src="assets/images/teacher3.png" class="img-fluid">
								<h3>Bergstrom Eudora</h3>
								<a href="#">www.helloe@gmail.com</a>
								<button type="button" class="contact_btn">Acount Setting</button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="teacher_info">
								<div class="tch_info_head d-flex justify-content-between">
									<h3>PERSONAL INFORMATION</h3>
									<i class='bx bxs-pencil'></i>
								</div>
								<div class="tch_details">
									<div class="row">
										<div class="col-md-5">
											<div class="info_detail">
												<h3>NAME :</h3>
												<h3>FATHER NAME :</h3>
												<h3>FATHER NAME :</h3>
												<h3>ADDRESS :</h3>
												<h3>EMAIL :</h3>
												<h3>PASSWORD:</h3>
												<h3>MOBILE NUMBER:</h3>
												<h3>AGE :</h3>
												<h3>GENDER :</h3>
											</div>
										</div>
										<div class="col-md-7">
											<div class="info_detail">
												<p>Bergstrom Eudora</p>
												<p>Bergstrom Eudora</p>
												<p>Bergstrom Eudora</p>
												<p>Oklahoma Sierra Leone Malvinaville</p>
												<p>www.helloe@gmail.com</p>
												<p>XXXXXXXX</p>
												<p>123456789654</p>
												<p>36</p>
												<p>Female</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="intrest_info2">
								<div class="per_info_head _main_image_haed_ad d-flex justify-content-between">
									<h3>INTEREST & SKILLS</h3>
									<i class='bx bxs-pencil'></i>
									<img src="assets/images/tble_top.png" class="intrest_poision">
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="intrst_img">
											<img src="assets/images/equation.png" class="img-fluid">
											<p>MATHEMATICS</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="intrst_img">
											<img src="assets/images/Design.png" class="img-fluid">
											<p>LOGIC</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="intrst_img">
											<img src="assets/images/psychology.png" class="img-fluid">
											<p>PSYCHOLOGY</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="intrst_img">
											<img src="assets/images/contact-book.png" class="img-fluid">
											<p>EDUCATION</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="hobbies_sections">
								<div class="hobbies">
									<h3>HOBBIES</h3>
									<div class="main_hobbies_images">
										<div class="images_hobby">
											<div class="img_hobby text-center blue_color">
												<img src="assets/images/hobby1.png" class="img-fluid">
												<p>CREATIVE THINKING</p>
											</div>
											<div class="img_hobby text-center">
												<img src="assets/images/hobby2.png" class="img-fluid">
												<p>PUZZEL SOLVING</p>
											</div>
											<div class="img_hobby text-center yellow_color">
												<img src="assets/images/h_y.png" class="img-fluid">
												<p>ART & CRAFT</p>
											</div>
											<div class="img_hobby text-center pink_color">
												<img src="assets/images/hobby3.png" class="img-fluid">
												<p>CREATIVE THINKING</p>
											</div>
											<div class="img_hobby text-center">
												<img src="assets/images/hobby4.png" class="img-fluid">
												<p>CREATIVE THINKING</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="edu_sec edu_sec2">
								<div class="main_edu">
									<div class="edu_img">
										<img src="assets/images/mortarboard.png" class="img-fluid">
									</div>
									<div class="edu_data">
									
										<h3>EDUCATION <i class='bx bxs-pencil'></i> </h3>
										<h5> Arts In Culinary School</h5>
										<h5>Current Class : 4</h5>
									</div>
								</div>
							</div>
							<div class="languag_sec languag_sec2">
								<div class="per_info_head yellow_head d-flex justify-content-between">
									<h3>LANGUAGE PROFICIENCY</h3>
									<i class='bx bxs-pencil'></i>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="languag_main">
											<img src="assets/images/translator.png" class="img-fluid">
											<div class="languag_name">
												<h4>English</h4>
												<p>Native or Billingual</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="languag_main">
											<img src="assets/images/translator.png" class="img-fluid">
											<div class="languag_name">
												<h4>Spanish</h4>
												<p>Professional</p>
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
>>>>>>> e9cde1de793139c650d21ce96b5b5cf4a2aaf173
