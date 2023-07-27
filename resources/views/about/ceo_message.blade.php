@extends('layouts.main')
@section('content')
    <nav aria-label="breadcrumb" class="breadcrumb-nav" style="padding-left: 10px; padding-right: 10px;">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">
                        <i class="icon-home text-white"></i>
                    </a>
                </li>

                <li class="breadcrumb-item active text-white" aria-current="page">
                    About Us
                </li>

                <li class="breadcrumb-item active text-white" aria-current="page">
                    President's Message
                </li>
            </ol>
        </div>
    </nav>

    <section class="team-details-page-wrap py-5">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-md-4">
                    <div class="left-img-dts">
                        <img src="{{ asset('data/logo.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="right-content-team">
                        <h3>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit; font-size: 19px; color: black;">
                                    President's Message
                                </font>
                            </font>
                            <br>
                            <span style="color:#f7931E;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        President, Blessing Light Services Co.,Ltd
                                    </font>
                                </font>
                            </span>
                        </h3>
                        <div class="dts_m">
                            <p style="text-align: justify; font-size: 16px; color: black;">
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
    </section>
@endsection
