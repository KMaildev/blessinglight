<header class="header">
    <div class="container">
        <div class="header-top d-flex align-items-center w-100">
            <div class="header-left">
                <p class="top-message ls-0 text-uppercase text-white d-none d-sm-block">
                    FREE Returns. Standard
                    Shipping Orders $99+
                </p>
            </div>
            <div class="header-right header-dropdowns w-sm-100">
                <div class="header-dropdown dropdown-expanded d-none d-lg-block mr-2">
                    <a href="#">Links</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="login.html">My Account</a></li>
                            <li><a href="demo2-contact.html">Contact Us</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="wishlist.html">My Wishlist</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="#" class="login-link">Log In</a></li>
                        </ul>
                    </div>
                </div>
                <span class="separator"></span>
                <div class="header-dropdown">
                    <a href="#"><i class="flag-us flag"></i>ENG</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                            </li>
                            <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                        </ul>
                    </div>
                </div>

                <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                    <a href="#">USD</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">USD</a></li>
                        </ul>
                    </div>
                </div>

                <span class="separator"></span>
                <div class="social-icons">
                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                    <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}" style="background-color: black">
        <div class="container">

            <div class="header-left col-lg-2 w-auto pl-0">
                <button class="mobile-menu-toggler mr-2" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('data/logo.png') }}" alt="Porto Logo">
                </a>
            </div>

            <div class="header-right w-lg-max ml-0">
                <div
                    class="header-icon mb-0 header-search header-search-inline header-search-category w-lg-max pl-3 pr-1">
                </div>

                <div class="header-contact d-none d-lg-flex pl-4 ml-3 mr-xl-5">
                    <img alt="phone" src="{{ asset('assets/images/phone-white.png') }}" width="30" height="30"
                        class="pb-1">
                    <h6>
                        Call us now
                        <a href="tel:#" class="font1">
                            +959 789 755 722
                        </a>
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom sticky-header d-lg-block d-none" data-sticky-options="{'mobile': false}">
        <div class="container">

            <div class="header-left">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('data/logo.png') }}" alt="Porto Logo">
                </a>
            </div>

            <div class="header-center">
                <nav class="main-nav w-100">
                    <ul class="menu">

                        <li class="{{ Route::is('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">
                                <i class="fa fa-home"></i>
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="javascript::void(0)">
                                <i class="fa fa-bookmark"></i>
                                About Us
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('about.index') }}">
                                        <i class="fa fa-bookmark"></i>
                                        Our Company
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('ceo_message') }}">
                                        <i class="fa fa-bookmark"></i>
                                        President's Message
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('team') }}">
                                        <i class="fa fa-bookmark"></i>
                                        Professional Team
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-bookmark"></i>
                                Manpower Services
                            </a>
                            <ul>
                                @foreach ($countries as $country)
                                    <li>
                                        <a href="{{ route('job.show', $country->id) }}">
                                            <i class="fa fa-bookmark"></i>
                                            {{ $country->country ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-bookmark"></i>
                                Gallery & Activities
                            </a>
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('activities.show', $category->id) }}">
                                            <i class="fa fa-bookmark"></i>
                                            {{ $category->title ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('cv.index') }}">
                                <i class="fa fa-bookmark"></i>
                                Job Application
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('employer.index') }}">
                                <i class="fa fa-bookmark"></i>
                                Employers
                            </a>
                        </li>

                        <li class="{{ Route::is('contact.index') ? 'active' : '' }}">
                            <a href="{{ route('contact.index') }}">
                                <i class="fa fa-mobile"></i>
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
