@extends('layouts.main')
@section('content')
    <div class="page-banner-brd" style="background-image: url({{ asset('data/about_bg.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-brd-text text-center">
                        <h1>
                            <br>
                        </h1>
                        <br><br><br>
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

    <!--about ortency start-->
    <section class="about-ortency-v1 px-120">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-md-6">
                    <div class="inner">
                        <img style="width: 100%;" src="{{ asset('data/about_1.png') }}" data-aos="fade-down" class="img1"
                            alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content-about">
                        <div class="sec-title">
                            <h3>
                                <img src="{{ asset('assets/img/icons/title-icon.svg') }}" alt="">
                                About Our Company
                            </h3>
                            <h2 class="tag1">
                                Yun Nadi Oo Co.,Ltd
                            </h2>
                        </div>
                        <p style="text-align: justify">
                            YUN NADI OO (OVERSEAS MYANMAR MANPOWER EMPLOYMENT AGENCY) has been successfully recruiting for
                            and supplying companies, factories and businesses, especially for Thailand, Japan, Malaysia,
                            Singapore and Middle East Countries. We retain a term of skilled recruitment professionals who
                            uphold our reputation by providing effective and efficient recruitment services for our
                            customer’s satisfaction.
                            <br><br>
                            We have got New Special Recruitment License for Thailand since 2012 under the company act of
                            Government of Myanmar.
                        </p>
                        <ul class="list-icons ">
                            <li style="width: 100%;">
                                <span>
                                    Expert guidance:
                                </span>
                                Overseas Employment Service Agencies provide expert guidance for finding
                                jobs abroad.
                            </li>
                            <li style="width: 100%;">
                                <span>
                                    Job connections:
                                </span>
                                They have extensive networks with employers, enhancing your job prospects.
                            </li>
                            <li style="width: 100%;">
                                <span>
                                    Streamlined process:
                                </span>
                                These agencies simplify the application process, making it easier for
                                you to navigate visas, documentation, and interviews.
                            </li>
                        </ul>
                        <a href="{{ route('contact.index') }}" class="btn btn-default">
                            Contact Us
                        </a>
                    </div>
                    <!--/.right-content-about-->
                </div>
            </div>
        </div>
    </section>
    <!--about ortency end-->


    <div class="how-work-v3 bg-image px-120">
        <div class="container">
            <div class="row g-0 align-items-center d-flex justify-content-center">
                <div class="col-12">
                    <div class="sec-title text-center mb-50">
                        <h3>
                            <img src="{{ asset('assets/img/icons/title-icon.svg') }}" alt="">
                            SERVICES
                        </h3>
                        <h1>
                            Where our services
                        </h1>
                    </div>
                </div>

                <div class="col-9 col-md-9 col-lg-9">
                    <p>
                        ”Yun Nadi Oo”, a leading Manpower Recruiting Agency based in Myanmar, licensed and authorized by the
                        Ministry of Labor, Employment and Social Security of Myanmar. We are the outstanding supplier of
                        quality manpower to different parts of the world.
                    </p>
                </div>
                <div class="col-12">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-xl-4">
                            <div class="how-work-inner-v3 white" data-aos="flip-down" data-aos-delay="100">
                                <span class="number">01</span>
                                <div class="d-sm-flex">
                                    <div class="flex-grow-0">
                                        <div class="icon">
                                            <img src="{{ asset('assets/img/icons/work-pr1.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-shrink-1">
                                        <h2>
                                            Our Operations
                                        </h2>
                                        <p style="text-align: justify">
                                            Yun Nadi Oo’s operations are managed by a team of professionals who have decades
                                            of experience in the areas of recruiting, selecting, giving language training,
                                            and testing of skilled and semi-skilled candidates.
                                        </p>
                                        <br><br><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="how-work-inner-v3 white" data-aos="flip-down" data-aos-delay="300">
                                <span class="number">02</span>
                                <div class="d-sm-flex">
                                    <div class="flex-grow-0">
                                        <div class="icon">
                                            <img src="{{ asset('assets/img/icons/work-pr2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-shrink-1">
                                        <h2>Our Expertise</h2>
                                        <p style="text-align: justify">
                                            Our expertise stands on the Thailand, Malaysia, Singapore, Japan and Middle East
                                            Countries job market, providing high standard recruitment service to the
                                            companies in various industries.
                                        </p>
                                        <br><br><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="how-work-inner-v3 white" data-aos="flip-down" data-aos-delay="500">
                                <span class="number">03</span>
                                <div class="d-sm-flex">
                                    <div class="flex-grow-0">
                                        <div class="icon">
                                            <img src="{{ asset('assets/img/icons/work-pr3.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-shrink-1">
                                        <h2>
                                            Our Experience
                                        </h2>
                                        <p style="text-align: justify; line-height: 1.5em;">
                                            Our recruitment experience allows us to provide employees at various levels for
                                            a wide range of job categories, including construction, food factories, bakery,
                                            hospitality, supermarkets, warehouses, garment & textile factories, agriculture,
                                            mechanical jobs, and more, as per our clients' needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->
    </div>

    <!--reason to success start-->
    <div class="reason-to_success-sec px-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="left-images-rsn">
                        <img src="{{ asset('data/about1.jpg') }}" class="rsn1" alt="" style="width: 370px;">
                        <img src="{{ asset('data/about_bg.png') }}" class="rsn2" alt="" style="width: 370px;">
                        <img src="{{ asset('data/mmmap.png') }}" class="rsn3" alt="" style="width: 300px;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sec-title">
                        <h3>
                            <img src="{{ asset('assets/img/icons/title-icon-infinity.svg') }}" alt="">
                            Reason of Our Success
                        </h3>
                        <h2 class="tag1">
                            Our Vision, Mission & Value
                        </h2>
                    </div>

                    <div class="success-tabs-about">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#our_mission_id"
                                    type="button" role="tab" aria-controls="our_mission_id" aria-selected="true">
                                    Our Mission
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#our_vission_id"
                                    type="button" role="tab" aria-controls="our_vission_id"
                                    aria-selected="false">Our Vission</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#our_history_id"
                                    type="button" role="tab" aria-controls="our_history_id"
                                    aria-selected="false">Our Value</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="our_mission_id" role="tabpanel"
                                aria-labelledby="our_mission_id">
                                <div class="inner-tbs-success">
                                    <p style="text-align: justify">
                                        Our vision is to be a leading overseas employment company, connecting talented
                                        individuals with rewarding job opportunities worldwide. We aim to empower job
                                        seekers and contribute to the growth and development of businesses in need of
                                        skilled and dedicated professionals.
                                    </p>
                                    <div class="d-sm-flex align-items-center">
                                        <img src="{{ asset('assets/img/worldMap.png') }}" alt="">
                                        <ul class="list-icons">
                                            <li>
                                                Expert guidance: Overseas Employment Service Agencies provide expert
                                                guidance for finding jobs abroad.
                                            </li>
                                            <li>
                                                Job connections: They have extensive networks with employers, enhancing your
                                                job prospects.
                                            </li>
                                            <li>
                                                Streamlined process: These agencies simplify the application process, making
                                                it easier for you to navigate visas, documentation, and interviews.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="our_vission_id" role="tabpanel"
                                aria-labelledby="our_vission_id">
                                <div class="inner-tbs-success">
                                    <p style="text-align: justify">
                                        Our mission is to provide exceptional overseas employment services by offering a
                                        comprehensive range of solutions to both job seekers and employers. We strive to
                                        match the right candidates with the right opportunities, fostering mutual success
                                        and long-term partnerships. Through our dedication to ethical practices and
                                        personalized support, we aim to make a positive impact on the lives of individuals
                                        and the organizations we serve.
                                    </p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="our_history_id" role="tabpanel"
                                aria-labelledby="our_history_id">
                                <div class="inner-tbs-success">
                                    <div class="d-sm-flex align-items-center">
                                        <ul class="list-icons">
                                            <li>
                                                Excellence - We strive for excellence in every aspect of our services,
                                                aiming to
                                                exceed expectations.
                                            </li>
                                            <li>
                                                Respect - We value and respect the diverse backgrounds and perspectives of
                                                all
                                                individuals we work with.
                                            </li>
                                            <li>
                                                Collaboration - We foster strong partnerships, working together to achieve
                                                mutual success.
                                            </li>
                                            <li>
                                                Responsiveness - We are responsive to the needs of our clients, providing
                                                timely
                                                solutions and support.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.inner-tbs-success-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--fun fact start-->
    <div class="fun-fact-sec px-120" hidden>
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <div class="fun-fact-wraps-v2">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-6 col-lg-3">
                                <div class="singl-fact-count  v2" data-aos="fade-in" data-aos-delay="100">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-0">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icons/fun1.1.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="flex-shrink-1">
                                            <h2 class="counter">1500 +</h2>
                                            <p>Our Experience</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="singl-fact-count  v2" data-aos="fade-in" data-aos-delay="200">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-0">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icons/fun1.2.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="flex-shrink-1">
                                            <h2 class="counter">150 +</h2>
                                            <p>Sending Workers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="singl-fact-count  v2" data-aos="fade-in" data-aos-delay="300">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-0">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icons/fun1.3.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="flex-shrink-1">
                                            <h2 class="counter">35 +</h2>
                                            <p>Sending Countries</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="singl-fact-count  v2" data-aos="fade-in" data-aos-delay="400">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-0">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icons/fun1.4.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="flex-shrink-1">
                                            <h2 class="counter">120 +</h2>
                                            <p>Students</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--fun fact end-->
@endsection
