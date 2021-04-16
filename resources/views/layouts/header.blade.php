<header class="header">
    <nav class="navbar navbar-light navbar-expand-lg bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('public/assets/images/logo.png')}}" class="img-fluid mx-auto" height="114" width="139" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @php
            $segment = \Illuminate\Support\Facades\Request::segment(1);
            @endphp
            <div class="collapse navbar-collapse" id="navbarToggler">
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
                @auth
                <div class="my-2 my-lg-0">
                    <img src="{{asset('public/assets/images/profile.png')}}" alt="User Image" class="img-fluid" width="124" height="124"/>
                </div>
                @endauth
            </div>
        </div>
    </nav>
</header>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="main_img">
                <img src="{{asset('assets/images/bcha1.png')}}" class="img-fluid banner_image">
                <img src="{{asset('assets/images/cover_img.png')}}" class="cover_img">
            </div>
        </div>
        <div class="col-md-6">
            <div class="main_banner">
                <h1><span>$</span>6.50</h1>
                <p>PER SESSION FOR THE</p>
                <h2>Littlest Learners <br>
                    Prek Live Chat <br>
                    Small Group</h2>
                <p class="bottom_p">Prelaunch sale price.</p>
                <button type="button" class="banner_btn">LIMITED TIME ONLY !</button>
            </div>
        </div>
    </div>
</div>

</section>
