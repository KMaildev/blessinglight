<div class="row">
    <div class="col-lg-3 mb-2 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200"
        data-animation-duration="1000">
        <div class="side-menu-wrapper">
            <h2 class="side-menu-title ls-10">Top Categories</h2>

            <div class="side-menu-body mb-2 px-3 mx-3">
                <ul class="side-menu pb-1">
                    <marquee scrollamount="3" direction="up" width="250" height="300" onmouseover="this.stop();"
                        onmouseout="this.start();">
                        <li class="{{ Route::is('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}" style="color: black">
                                <i class="fa fa-home" style="color: black"></i>
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('about.index') }}" style="color: black">
                                <i class="fa-solid fa-chart-line" style="color: black"></i>
                                Our Company
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('ceo_message') }}" style="color: black">
                                <i class="fa-solid fa-user-pen" style="color: black"></i>
                                President's Message
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('team') }}" style="color: black">
                                <i class="fa-solid fa-users" style="color: black"></i>
                                Professional Team
                            </a>
                        </li>

                        @foreach ($countries as $country)
                            <li>
                                <a href="{{ route('job.show', $country->id) }}" style="color: black">
                                    <i class="fa-solid fa-flag" style="color: black"></i>
                                    {{ $country->country ?? '' }}
                                </a>
                            </li>
                        @endforeach


                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('activities.show', $category->id) }}" style="color: black">
                                    <i class="fa-solid fa-images" style="color: black"></i>
                                    {{ $category->title ?? '' }}
                                </a>
                            </li>
                        @endforeach

                        <li>
                            <a href="{{ route('cv.index') }}" style="color: black">
                                <i class="fa-solid fa-user-pen" style="color: black"></i>
                                Job Application
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('employer.index') }}" style="color: black">
                                <i class="fa-solid fa-pencil" style="color: black"></i>
                                Employers
                            </a>
                        </li>

                        <li class="{{ Route::is('contact.index') ? 'active' : '' }}">
                            <a href="{{ route('contact.index') }}" style="color: black">
                                <i class="fa-solid fa-phone-volume" style="color: black"></i>
                                Contact Us
                            </a>
                        </li>
                    </marquee>
                </ul>

                <a href="tel:09 789 755 733"
                    class="btn btn-block btn-dark btn-lg px-0 ls-10 animate__animated animate__shakeX">
                    Call Now
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-9 mb-2 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="400"
        data-animation-duration="1000">
        <div class="home-slider owl-carousel owl-theme"
            data-owl-options="{
            'dots': true,
            'nav': false
        }">

            <div class="home-slide home-slide2 banner banner-md-vw banner-sm-vw d-flex align-items-center">
                <img class="slide-bg" style="background-color: #dadada;" src="{{ asset('data/slider3.png') }}"
                    width="835" height="415" alt="slider image">
            </div>


            <div class="home-slide home-slide1 banner banner-md-vw banner-sm-vw d-flex align-items-center">
                <img style="width: 100%; height: auto; background-size: center; object-fit: cover;" class="slide-bg"
                    style="background-color: #71b5da;" src="{{ asset('data/slider.png') }}" alt="slider image">
            </div>

            <div class="home-slide home-slide2 banner banner-md-vw banner-sm-vw d-flex align-items-center">
                <img class="slide-bg" style="background-color: #dadada;" src="{{ asset('data/slider2.png') }}"
                    width="835" height="415" alt="slider image">
            </div>
        </div>

    </div>
</div>
</div>
