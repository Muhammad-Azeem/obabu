<!DOCTYPE html>
<html>
<head>
    <title>Angular || Html</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Font and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/activity.css')}}">
</head>
<body>
<main class="activity">
    <header class="header">
        <nav class="navbar navbar-light navbar-expand-lg bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('public/assets/images/logo.png')}}" class="img-fluid mx-auto" height="114" width="139" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link text-white">HOME</a>
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
                        <img src="{{asset('public/assets/images/profile.png')}}" alt="User Image" class="img-fluid" width="124" height="124"/>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="activity-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="activity-box">
                        <div class="card shadow-sm pb-4">
                            <div class="card-body">
                                <h5 class="card-title">MEETING</h5>
                                <hr class="mt-0"/>
                                <div class="list-box d-flex justify-content-between shadow-sm">
                                    <img src="{{asset('public/assets/images/girl.png')}}" class="img-fluid" alt="Image User">
                                    <div>
                                        <h5>Hane Carmela</h5>
                                        <p>Lorem ipsum, dolo.</p>
                                    </div>
                                    <div>
                                        <h6>14 - JAN - 2021</h6>
                                        <p>Some text here</p>
                                    </div>
                                </div>
                                <div class="list-box list-box-green d-flex justify-content-between shadow-sm mt-3">
                                    <img src="{{asset('public/assets/images/girl.png')}}" class="img-fluid" alt="Image User">
                                    <div>
                                        <h5>Hane Carmela</h5>
                                        <p>Lorem ipsum, dolo.</p>
                                    </div>
                                    <div>
                                        <h6>14 - JAN - 2021</h6>
                                        <p>Some text here</p>
                                    </div>
                                </div>
                                <div class="list-box d-flex justify-content-between shadow-sm mt-3">
                                    <img src="{{asset('public/assets/images/girl.png')}}" class="img-fluid" alt="Image User">
                                    <div>
                                        <h5>Hane Carmela</h5>
                                        <p>Lorem ipsum, dolo.</p>
                                    </div>
                                    <div>
                                        <h6>14 - JAN - 2021</h6>
                                        <p>Some text here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="activity-box mt-4">
                        <div class="card shadow-sm pb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">MY POD</h5>
                                    <h6>View More</h6>
                                </div>
                                <hr class="mt-0"/>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="list-box d-flex flex-column justify-content-center align-items-center shadow-sm">
                                            <img src="{{asset('public/assets/images/girl.png')}}" class="img-fluid mb-1" width="100" height="100" alt="Image User">
                                            <h6>Hane Carmela</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="list-box list-box-g1 d-flex flex-column justify-content-center align-items-center shadow-sm">
                                            <img src="assets/images/boy.png" class="img-fluid mb-1" width="100" height="100" alt="Image User">
                                            <h6>Hane Carmela</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="list-box list-box-g2 d-flex flex-column justify-content-center align-items-center shadow-sm">
                                            <img src="assets/images/child.png" class="img-fluid mb-1" width="100" height="100" alt="Image User">
                                            <h6>Hane Carmela</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="list-box list-box-trans d-flex flex-column justify-content-center align-items-center mt-3">
                                            <img src="assets/images/plus.png" class="img-fluid" width="100" height="100" alt="Image User">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="activity-box">
                        <div class="card bg-card shadow-sm pb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">SEND A HIGH FIVE</h5>
                                    <h6>View More</h6>
                                </div>
                                <hr class="mt-0"/>
                                <table class="table table-borderless">
                                    <thead>
                                    <tr class="bg-thead shadow-lg">
                                        <th scope="col">USER</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">DATE</th>
                                        <th scope="col">HIGH FIVE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="tr-accepted">
                                        <td class="d-flex align-items-center">
                                            <img src="{{asset('public/assets/images/girl.png')}}" class="img-fluid mb-1" width="50" height="50" alt="Image User">
                                            <h6 class="ml-2 color-accepted">Hane Carmela</h6>
                                        </td>
                                        <td class="pt-3">
                                            <button class="btn btn-primary btn-sm btn-accepted">ACCEPTED</button>
                                        </td>
                                        <td class="pt-4">
                                            <h6 class="color-accepted">12 - JAN - 2020</h6>
                                        </td>
                                        <td class="pt-3">
                                            <button class="btn btn-primary btn-sm btn-accepted">SEND</button>
                                        </td>
                                    </tr>
                                    <tr class="tr-pending">
                                        <td class="d-flex align-items-center">
                                            <img src="{{asset('public/assets/images/girl.png')}}" class="img-fluid mb-1" width="50" height="50" alt="Image User">
                                            <h6 class="ml-2 color-pending">Hane Carmela</h6>
                                        </td>
                                        <td class="pt-3">
                                            <button class="btn btn-primary btn-sm btn-pending">PENDING</button>
                                        </td>
                                        <td class="pt-4">
                                            <h6 class="color-pending">12 - JAN - 2020</h6>
                                        </td>
                                        <td class="pt-3">
                                            <button class="btn btn-primary btn-sm btn-pending">SEND</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="activity-box mt-5">
                        <div class="card shadow-sm pb-4 border-color">
                            <div class="card-body p-0">
                                <ul class="list-group border-radius">
                                    <li class="list-group-item active">ANNOUNCEMENT</li>
                                    <li class="list-group-item d-flex bg-list-item1">
                                        <img src="{{asset('public/assets/images/announcement.png')}}" class="img-fluid" height="50" width="100" alt="Announcement">
                                        <div>
                                            <h4>Recently created a group</h4>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi blanditiis quidem.</p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex bg-list-item2">
                                        <img src="{{asset('public/assets/images/announcement.png')}}" class="img-fluid" height="50" width="100" alt="Announcement">
                                        <div>
                                            <h4>Recently created a group</h4>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi blanditiis quidem.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer p-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('public/assets/images/footer-logo.png')}}" class="img-fluid" alt="footer logo">
                    <div class="social-icons mt-3">
                        <!-- <i class="fa fa-facebook"></i> -->
                        <i class='bx bxl-facebook-circle' ></i>
                        <i class='bx bxl-google' ></i>
                        <i class='bx bxl-linkedin-square' ></i>
                        <i class='bx bxl-twitter' ></i>
                        <!-- <fa-icon [icon]="faFacebook" class="fa-facebook p-2"></fa-icon>
                        <fa-icon [icon]="faGoogle" class="fa-google p-2"></fa-icon>
                        <fa-icon [icon]="faLinkedin" class="fa-linkedin p-2"></fa-icon>
                        <fa-icon [icon]="faTwitter" class="fa-twitter p-2"></fa-icon> -->
                    </div>
                </div>
                <div class="col-md-9 mt-5">
                    <div class="row mt-5">
                        <div class="col-md-4 text-center mt-4">
                            <h3>SUPPORT</h3>
                            <ul class="nav flex-column mt-4">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Downloads</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Locate A Dealer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Product Registration</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Spare Parts </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 text-center mt-4">
                            <h3>OBABU</h3>
                            <ul class="nav flex-column mt-4">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">ABOUT US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">ACTIVITY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">SALES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">CHAT VIEW</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 mt-4">
                            <h3>CONNECT WITH US</h3>
                            <form class="d-flex flex-column align-items-start justify-content-start mt-4">
                                <div class="input-group mb-3 w-100 shadow-sm ">
                                    <div class="input-group-prepend">
											<span class="input-group-text">
												<!-- <fa-icon [icon]="faEnvelope"></fa-icon> -->
												<i class='bx bxs-envelope'></i>
											</span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <button class="btn btn-primary shadow-lg mt-3">CONNECT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <img src="assets/images/footer.png" class="img-fluid footer-image" alt="footer image"  width="250" height="250">
                </div>
            </div>
        </div>
    </footer>
</main>

</body>
</html>
