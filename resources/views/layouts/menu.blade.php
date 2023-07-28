<header class="header">
    <div class="container">
        <div class="header-top d-flex align-items-center w-100">
            <div class="header-left">
                <p class="top-message ls-0 text-uppercase text-white d-none d-sm-block">
                    Welcome to Blessing Light Services Co.,Ltd
                </p>
            </div>
            <div class="header-right header-dropdowns w-sm-100">
                <div class="header-dropdown dropdown-expanded d-none d-lg-block mr-2">
                    <div class="header-menu">
                        <ul>
                            <li>
                                <a href="mailto:blessinglight83@gmail.com">
                                    <i class="fa fa-envelope"></i>
                                    blessinglight83@gmail.com
                                </a>
                            </li>

                            <li>
                                <a href="tel:09 789 755 733">
                                    <i class="fa fa-mobile"></i>
                                    09 789 755 733
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <span class="separator"></span>
                <div class="header-dropdown">
                    <a href="#">
                        <i class="flag-us flag"></i>
                        English
                    </a>
                    <div class="header-menu">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="flag-us flag mr-2"></i>
                                    English
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flag-cn flag mr-2"></i>
                                    China
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <span class="separator"></span>
                <div class="social-icons">
                    <a href="https://www.facebook.com/myozinwin83" class="social-icon social-facebook icon-facebook"
                        target="_blank"></a>
                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                    <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>


    <div class="header-middle text-dark" style="background-color: white; padding-top: 1rem; padding-bottom: 1rem;">
        <div class="container">
            <div class="col-lg-12 w-auto pl-0">
                <center>
                    <a href="{{ route('home') }}" class="logo">
                        <style>
                            .logowidth {
                                width: 90%;
                            }

                            @media only screen and (max-width: 600px) {
                                .logowidth {
                                    width: 90%;
                                }
                            }
                        </style>
                        <img src="{{ asset('data/weblogo.png') }}" alt="Blessing Light Services Co.,Ltd"
                            class="logowidth">
                    </a>
                </center>
            </div>
        </div>
    </div>

    <div class="header-bottom sticky-header d-lg-block d-none" data-sticky-options="{'mobile': false}"
        style="background-color: #003201">
        <div class="container">

            {{-- <div class="header-left">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('data/logo.png') }}" alt="Porto Logo">
                </a>
            </div> --}}

            <div class="header-center">
                <nav class="main-nav w-100">
                    <ul class="menu">

                        <li class="{{ Route::is('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}" style="color: white;">
                                <i class="fa fa-home" style="color: #FE0000;"></i>
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="javascript::void(0)" style="color: white;">
                                <i class="fa-solid fa-ranking-star" style="color: #FE0000;"></i>
                                About Us
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('about.index') }}">
                                        <i class="fa-solid fa-chart-line" style="color: #FE0000;"></i>
                                        Our Company
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('ceo_message') }}">
                                        <i class="fa-solid fa-user-pen" style="color: #FE0000;"></i>
                                        President's Message
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('team') }}">
                                        <i class="fa-solid fa-users" style="color: #FE0000;"></i>
                                        Professional Team
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="{{ Route::is('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}" style="color: white;">
                                <i class="fa-solid fa-file-circle-plus" style="color: #FE0000;"></i>
                                Profile
                            </a>
                        </li>

                        <li>
                            <a href="#" style="color: white;">
                                <i class="fa-solid fa-flag-checkered" style="color: #FE0000;"></i>
                                Manpower Services
                            </a>
                            <ul>
                                @foreach ($countries as $country)
                                    <li>
                                        <a href="{{ route('job.show', $country->id) }}">
                                            <i class="fa-solid fa-flag" style="color: #FE0000;"></i>
                                            {{ $country->country ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a href="#" style="color: white;">
                                <i class="fa-solid fa-photo-film" style="color: #FE0000;"></i>
                                Gallery & Activities
                            </a>
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('activities.show', $category->id) }}">
                                            <i class="fa-solid fa-images" style="color: #FE0000;"></i>
                                            {{ $category->title ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('cv.index') }}" style="color: white;">
                                <i class="fa-solid fa-user-pen" style="color: #FE0000;"></i>
                                Job Application
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('employer.index') }}" style="color: white;">
                                <i class="fa-solid fa-pencil" style="color: #FE0000;"></i>
                                Employers
                            </a>
                        </li>

                        <li class="{{ Route::is('contact.index') ? 'active' : '' }}">
                            <a href="{{ route('contact.index') }}" style="color: white;">
                                <i class="fa-solid fa-phone-volume" style="color: #FE0000;"></i>
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
