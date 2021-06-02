<section class="banner_header">
    <div class="header_main">
        <header class="header">
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
