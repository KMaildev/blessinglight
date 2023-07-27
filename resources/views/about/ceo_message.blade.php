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

    <br>
    <section class="team-details-page-wrap">
        <div class="container">
            <div class="row g-5">
                <div class="col-12">
                    <div class="team-name-info-pg">
                        <div class="row align-items-center gy-5">
                            <div class="col-md-6">
                                <div class="left-img-dts">
                                    <img src="{{ asset('data/t1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right-content-team">
                                    <h2>
                                        President's Message
                                    </h2>
                                    <p style="font-size: 18px;">
                                        President, Yun Nadi Oo Co.,Ltd
                                    </p>
                                    <hr>
                                    <div class="dts_m">
                                        <p style="text-align: justify">
                                            As the President of our esteemed overseas employment agency, I want to extend a
                                            heartfelt welcome to all aspiring professionals seeking exceptional
                                            opportunities abroad and to our valued clients entrusting us with their talent
                                            acquisition needs.
                                            <br><br>
                                            Our mission is clear: to connect global talent with remarkable employment
                                            prospects while fostering cultural exchange. We are committed to providing
                                            comprehensive and reliable overseas employment services, guiding you every step
                                            of the way to ensure your success.
                                            <br><br>
                                            With integrity, excellence, diversity, and responsiveness as our guiding
                                            principles, we strive to deliver superior services and create a positive impact
                                            on individuals and societies worldwide.
                                            <br><br>
                                            Thank you for trusting us with your aspirations and requirements. Together,
                                            let's achieve new heights in your career or find the exceptional talent your
                                            organization deserves.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-support-sec px-120" style="background-image: url({{ asset('data/5.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-content-support text-center">
                        <div class="sec-title text-center">
                            <h3 class="text-white">
                                <img src="{{ asset('assets/img/icons/title-icon.svg') }}" alt="">
                                Our Purpose
                            </h3>
                            <h1 class="text-white">
                                Our Purpose
                            </h1>
                        </div>
                        <p>
                            Our main purpose is to provide different categories of Myanmar Manpower around the globe and
                            especially Thailand. We supply Skilled, Semi-Skilled, General Worker, Technical, Professional
                            and Unskilled Myanmar Manpower. Currently, we are dealing with various clients from different
                            countries and successful in supply Malaysia, Japan, Thailand, Singapore without any complaints.
                        </p>
                        <div class="btn-groups mt-50">
                            <a href="{{ route('employer.index') }}" class="btn btn-default">
                                Employer Form
                            </a>
                            <a href="{{ route('contact.index') }}" class="btn btn-transparent">
                                Contact For Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-bottom-left " data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="1000">
        </div>
        <div class="shape-top-left" data-aos="fade-down" data-aos-delay="500"></div>
        <img src="{{ asset('assets/img/support-shape-left.svg') }}" data-aos="fade-right" class="shape-left" alt="">
        <img src="{{ asset('assets/img/support-shape-right.svg') }}" class="shape-right" data-aos="fade-left"
            alt="">
    </section>

    <section class="blog-sec">
        <div class="container">
            <div class="row g-0">
                <div class="col-12 mt-50">
                    <div class="row justify-content-center g-4 ">
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="single-blog-inner" data-aos="fade-in" data-aos-delay="100">
                                <div class="imgs">
                                    <img src="{{ asset('data/6.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="single-blog-inner" data-aos="fade-in" data-aos-delay="100">
                                <div class="imgs">
                                    <img src="{{ asset('data/7.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="single-blog-inner" data-aos="fade-in" data-aos-delay="100">
                                <div class="imgs">
                                    <img src="{{ asset('data/8.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="single-blog-inner" data-aos="fade-in" data-aos-delay="100">
                                <div class="imgs">
                                    <img src="{{ asset('data/9.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
@endsection
