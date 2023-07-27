@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <div class="page-banner-brd" style="background-image: url({{ $category->photo }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-brd-text text-center">
                        <h1>Gallery & Activities</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Gallery & Activities
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $category->title ?? '' }}
                                </li>
                            </ol>
                        </nav>
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


    <section class="service-support-sec px-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-content-support text-center">
                        <div class="sec-title text-center">
                            <h3 class="text-white">
                                <img src="{{ asset('assets/img/icons/title-icon.svg') }}" alt="">
                                Gallery & Activities
                            </h3>
                            <h1 class="text-white">
                                Checkout our photo gallery
                            </h1>
                        </div>
                        <p style="text-align: justify">
                            Our gallery showcases a vibrant collection of photographs and testimonials from individuals who
                            have successfully found employment through our agency. These visuals depict diverse work
                            environments, cultural experiences, and personal growth opportunities that await those who
                            embark on their overseas employment journey with us. From bustling cityscapes to breathtaking
                            natural landscapes, our gallery captures the essence of working abroad and inspires our clients
                            to explore new horizons.
                        </p>
                        <div class="btn-groups mt-50">
                            <a href="{{ route('about.index') }}" class="btn btn-default">
                                About Us
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



    <section class="portfolio-sec-pg py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row g-4">
                        @foreach ($activities as $activity)
                            <div class="col-md-12">
                                <h5>
                                    {{ $activity->title ?? '' }}
                                </h5>
                                <p>
                                    {{ $activity->description ?? '' }}
                                </p>
                            </div>
                            @php
                                $images = explode(',', $activity->images);
                            @endphp
                            @foreach ($images as $image)
                                <div class="col-md-3 col-lg-3">
                                    <div class="portfolio-inner-sl">
                                        <div class="imgs">
                                            <img data-enlargeable="" src="{{ $image }}" alt="">
                                        </div>
                                        <div class="hidden-cont">
                                            <div class="d-flex justify-content-between">
                                                <div class="name">
                                                    <h3>
                                                        {{ $activity->title ?? '' }}
                                                    </h3>
                                                    <p>
                                                        ”Yun Nadi Oo Co.,Ltd”
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <hr style="border-top: 1px dashed #d6a40f;">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
