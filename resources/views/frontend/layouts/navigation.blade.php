<!-- Start Main Top -->
<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

            </div> --}}
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="float-right">
                    <div class="our-link">
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="about.html">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>


                            <li>
                                <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                                    @if (Route::has('login'))
                                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                            @auth
                                            <a href="{{ url('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                                                </a>
                                                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                {{-- <a href="{{ url('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><i class="fas fa-user mr-2"></i>My Account</a> --}}
                                            @else
                                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><i class="fas fa-lock mr-2"></i>Log in</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->

<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="{{route('index')}}">
                    <img src="images/logo.png" class="logo"  style="height:100px; width:auto;">
                </a>
            </div>
            <!-- End Header Navigation -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                    {{-- <li class="nav-item active"><a class="nav-link" href="">Blogs</a></li> --}}
                    {{-- <li class="nav-item active"><a class="nav-link" href="index.html">Vegetables </a></li> --}}
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown"> Shop</a>
                        <ul class="dropdown-menu">
                            {{-- <li><a href="shop-detail.html">My Order</a></li> --}}
                            <li><a href="{{route('cart')}}">Cart</a></li>
                            <li><a href="{{route('login')}}">Checkout</a></li>

                        </ul>
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu">
                        <a href="{{route('cart')}}">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
                            <p>My Cart</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        {{-- <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Agam facilisis</a></h6>
                        <p>1x - <span class="price">$40.00</span></p>
                    </li>
                    <li class="total">
                        <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        <span class="float-right"><strong>Total</strong>: $180.00</span>
                    </li>
                </ul>
            </li>
        </div> --}}
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
