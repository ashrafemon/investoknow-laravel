<!-- ==================== 
	     Header Section
	========================= -->
{{-- <div class="preloader">
    <div class="wrapper">
        <div class="pre-logo">
            <img src="{{asset('assets/image/logo.png')}}" alt="image" />
        </div>
        <div class="loader">Loading...</div>
    </div>
</div> --}}
<header class="header-section bg-black">
    <nav class="header-topbar">
        <div class="container">
            {{-- <ul class="topbar-flag">
                <li>
                    <a href="#"><img src="{{asset('assets/image/flag-icon.png')}}" alt="image" /></a>
                </li>
                <li>
                    <a href="#"><img src="{{asset('assets/image/flag-icon.png')}}" alt="image" /></a>
                </li>
            </ul> --}}
            <div class="topbar-menu">
                @if(Auth::check())
                <a href="{{route('client.affiliate.dashboard')}}">Affiliate</a>|
                <a href="{{route('client.member.dashboard')}}">Membership</a>|
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                <a href="{{route('client.member.register.view')}}">Membership Register</a>|
                <a href="{{route('client.member.login.view')}}">Membership Login</a>
                @endif
            </div>
        </div>
    </nav>
    <nav class="header-navbar navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand navbar-small" href="{{route('client.home')}}"><img
                    src="{{asset('assets/image/logo-navbar.png')}}" alt="logo" /></a>
            <a class="navbar-brand navbar-big" href="{{route('client.home')}}"><img
                    src="{{asset('assets/image/logo-navbar.png')}}" alt="logo" /></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->segment(1) == '' ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('client.home')}}">Home</a>
                    </li>
                    <li class="nav-item {{ request()->segment(1) == 'about-us' ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('client.about')}}">ABOUT US</a>
                    </li>
                    <li class="nav-item {{ request()->segment(1) == 'forex-masterclass' ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('client.forex')}}">FOREX MASTERCLASS</a>
                    </li>
                    <li class="nav-item {{ request()->segment(1) == 'vip-package' ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('client.vip')}}">VIP PACKAGE</a>
                    </li>
                    <li class="nav-item {{ request()->segment(1) == 'support' ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('client.support')}}">SUPPORT</a>
                    </li>
                    <li class="nav-item {{ request()->segment(1) == 'inkblog' ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('client.blog')}}">INKBLOG</a>
                    </li>

                    @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link shopping-cart dropdown-toggle" data-toggle="dropdown" href="#"><i
                                class="fa fa-shopping-cart" aria-hidden="true"></i><abbr>{{count(Auth::user()->carts)}}</abbr></a>
                        <div class="dropdown-menu">
                            @if(count(Auth::user()->carts) > 0)
                                @foreach(Auth::user()->carts as $cart)
                                <a class="dropdown-item" href="#">
                                    <div class="dropdown-cart">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <img src="{{asset($cart->package->image)}}" alt="title" />
                                            </div>
                                            <div>
                                                <span>{{$cart->package->name}}</span> <br>
                                                <span>{{$cart->quantity}} &times; {{$cart->package->price}}</span>
                                            </div>
                                            <div>
                                                <form action="{{route('client.cart.delete', $cart->id)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm mr-2">
                                                        <i class="fa fa-times" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </a>

                                <hr class="mb-0">
                                <div class="p-1">
                                    <a href="{{route('client.cart.index')}}" class="btn btn-dark btn-block text-white">Checkout</a>
                                </div>
                                
                                @endforeach
                            @else
                                <a class="dropdown-item" href="#">
                                    <div class="dropdown-cart">
                                        <span>No Cart Item</span>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header>
