@extends('layouts.main')
@section('content')
    <div class="page-banner-brd" style="background-image: url({{ asset('data/t1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-brd-text text-center">
                        <h1>
                            <br>
                        </h1>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>

        <span class="banner-frame-one"></span>
        <span class="banner-frame-two"></span>
        <span class="banner-frame-three"></span>
        <span class="banner-frame-four"></span>
        <div class="shape-top-left" data-aos="fade-right" data-aos-delay="500"></div>
        <div class="shape-bottom-right" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-delay="1500">
        </div>
    </div>

    <section class="team-area-sec-v3 px-120">
        <div class="container">
            <div class="row g-0 d-flex justify-content-center">
                <div class="col-12">
                    <div class="sec-title text-center">
                        <h3>
                            <img src="{{ asset('assets/img/icons/title-icon-infinity.svg') }}" alt="">
                            Team Member
                        </h3>
                        <h1>Creative Team Member</h1>
                    </div>
                </div>

                <div class="col-md-9 ">
                    <p class="text" style="text-align: justify">
                        Our overseas employment agency consists of a skilled team dedicated to connecting talented
                        individuals with international job opportunities. We have a deep understanding of global
                        markets,
                        immigration laws, and visa processes. Our extensive network of contacts allows us to offer a
                        wide
                        range of employment opportunities in various sectors. We prioritize transparency, ethical
                        practices,
                        and open communication, providing personalized guidance and support to job seekers. Our
                        commitment
                        to excellence ensures successful placements and long-term relationships with clients.
                    </p>
                </div>

                <div class="col-12 mt-50">
                    <div class="row g-4">
                        @foreach ($teams as $team)
                            <div class="col-md-6 col-lg-3">
                                <div class="team-member-inner v3" data-aos="flip-left" data-aos-delay="100">
                                    <div class="imgs">
                                        <img src="{{ $team->photo }}" alt="#"
                                            style="border-radius: 30px 0 30px 0; width: 100%; height: 290px; background-size: center; object-fit: cover;">
                                        <div class="socials_v3">
                                            <ul>
                                                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                                                <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <div class="name">
                                            <h2><a href="team-details.html">{{ $team->position ?? '' }}</a></h2>
                                            <p>{{ $team->name ?? '' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
