<header id="header" class="fixed-top {{ url()->current() != '/' ? 'nav-bg-on' : '' }}">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('/') }}" class="logo"><img src="{{ asset('img/logo/footer-logo.png') }}" alt="" class="img-fluid"></a>
        <!-- <h1 class="logo"><a href="index.html">Better Bound House</a></h1> -->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="/#video">Home</a></li>
                <li><a class="nav-link scrollto" href="/#about">About</a></li>
                <li class="dropdown"><a class="nav-link scrollto" href="jasvascript::void(0);"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach($service_nav_data as $snd)
                            <li {!! check_service_child($snd->serviceID) == 1 ? 'class="dropdown"' : '' !!}><a href="{{ url('services/'.$snd->serviceID) }}"><span>{{ $snd->service_name }}</span>  {!! check_service_child($snd->serviceID) == 1 ? '<i class="bi bi-chevron-right"></i>' : '' !!} </a>
                                @if(check_service_child($snd->serviceID) == 1)
                                    <ul>
                                        @foreach(get_service_child($snd->serviceID) as $sc)
                                            <li><a href="{{ url('service-child/'.$sc->service_childID) }}">{{ $sc->service_child_name }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
                <!-- <li><a class="nav-link scrollto" href="/#portfolio">Portfolio</a></li> -->
                <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
                @auth
                <li class="dropdown">
                    <a class="nav-link scrollto">
                    <img src="{{ !empty(auth()->user()->profile_picture) ? asset('storage/'.auth()->user()->profile_picture) : 'https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp' }}" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 30px;"> 
                        {{ auth()->user()->firstname.' '.auth()->user()->lastname }}
                    </a>
                    <ul>
                        <li><a href="{{ url('/u/dashboard') }}"><span>Profile</span></a></li>
                        <hr>
                        <li><a wire:click="logout"><span>Logout</span></a></li>
                    </ul>
                </li>
                @endauth
                @guest
                <li><a class="getstarted scrollto" href="{{ url('/login') }}">Login</a></li>
                <li><a class="getstarted scrollto" href="{{ url('/register') }}">Register</a></li>
                @endguest
            </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->