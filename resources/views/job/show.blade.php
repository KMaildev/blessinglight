@extends('layouts.main')
@section('title', 'Jobs')
@section('content')

    <div class="page-banner-brd" style="background-image: url({{ asset('data/job_banner.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-brd-text text-center">
                        <h1>
                            We have international career
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item" aria-current="page">
                                    We also have job offers in other countries.
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

    <section class="blog-sec">
        <br>
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <div class="sec-title text-center">
                        <h3>
                            <img src="{{ asset('assets/img/icons/title-icon-infinity.svg') }}" alt="">
                            Jobs Available In
                        </h3>
                        <h2 class="tag1">
                            {{ $country->country ?? '' }}
                        </h2>
                    </div>
                </div>
                <div class="col-12 mt-50">
                    <div class="row justify-content-center g-4 ">
                        @foreach ($jobs as $job)
                            <div class="col-md-3 col-lg-3">
                                <div class="single-blog-inner" data-aos="fade-in" data-aos-delay="100">
                                    <div class="imgs">
                                        <img src="{{ $job->photo }}" alt="">
                                        <span class="date">
                                            {{ now()->year }}
                                        </span>
                                        <span class="cat">
                                            Yun Nadi Oo Co.,Ltd
                                        </span>
                                    </div>
                                    <div class="conts">
                                        <a href="{{ route('cv.index') }}" style="font-size: 20px;">
                                            {{ $job->title ?? '' }}
                                        </a>
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
