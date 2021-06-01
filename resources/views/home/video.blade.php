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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
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
		<section class="video_section">
			<div class="video_main">
				<div class="container-fluid">
                    <input type="hidden" name="roomName" id="room-name-test" data-name = "{{$response['roomName']}}">
                    <input type="hidden" name="token" id="token-access-test" data-token = "{{$response['accessToken']}}">
					<div class="row">
						<div class="col-md-4 d-flex align-items-center justify-content-center">
                            <div class="card-body">
                                <div id="media-div"></div>
                            </div>
						</div>
						<div class="col-md-4 d-flex align-items-center justify-content-center">
							<div class="call_img">
								<img src="assets/images/video2.png" class="img-fluid">
							</div>
						</div>
						<div class="col-md-4 d-flex align-items-center justify-content-center">
							<div class="call_img">
								<img src="assets/images/video5.png" class="img-fluid">
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-center justify-content-center">
							<div class="call_img teacher_img">
								<img src="assets/images/videoteacher.png" class="img-fluid">
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-center justify-content-center">
							<div class="row">
								<div class="col-md-6 d-flex align-items-center justify-content-center">
									<div class="call_img">
										<img src="assets/images/video4.png" class="img-fluid">
									</div>
								</div>
								<div class="col-md-6 d-flex align-items-center justify-content-center">
									<div class="call_img">
										<img src="assets/images/video5.png" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="left_fixed">
					<div class="fixed_icons">
						<p><i class='bx bxs-video'></i></p>
						<p><i class='bx bxs-microphone' ></i></p>
						<p><i class='bx bxs-user-plus' ></i>Invites</p>
						<p><i class='bx bxs-user-detail'></i>Participant</p>
						<p><i class='bx bx-upload'></i>Screen share</p>
						<p><i class='bx bx-message-detail' ></i>Chat</p>
						<p><i class='bx bxs-video-recording' ></i>Record</p>
						<p><i class='bx bx-smile' ></i>Reaction</p>
						<p><i class="fa fa-sign-out" aria-hidden="true"></i><i class='bx bx-log-in' ></i></p>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
