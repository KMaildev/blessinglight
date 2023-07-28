@extends('layouts.main')
@section('title', 'Jobs')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-lg-12 col-sm-12">
                <nav aria-label="breadcrumb" class="breadcrumb-nav" style="padding-left: 10px; ">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">
                                    <i class="icon-home text-white"></i>
                                </a>
                            </li>

                            <li class="breadcrumb-item active text-white" aria-current="page">
                                Manpower Services
                            </li>

                            <li class="breadcrumb-item active text-white" aria-current="page">
                                {{ $country->country ?? '' }}
                            </li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <section class="new-products-section animate__animated animate__bounce">
        <div class="container">
            <h2 class="section-title categories-section-title heading-border border-0 ls-0 appear-animate"
                data-animation-delay="100" data-animation-name="fadeInUpShorter">
                Our Sending Countries
            </h2>
            <center>
                <p style="font-size: 15px; color: black;" class="appear-animate" data-animation-delay="100"
                    data-animation-name="fadeInUpShorter">
                    We have international career.
                    <br>
                    We also have job offers in other countries.
                </p>
            </center>
            <br>
            <div class="categories-slider owl-carousel owl-theme show-nav-hover nav-outer">
                @foreach ($countries as $country)
                    <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                        <a href="{{ route('job.show', $country->id) }}">
                            <figure>
                                <img src="{{ $country->photo }}" alt="category" width="280" height="240" />
                            </figure>
                            <div class="category-content">
                                <h3>{{ $country->country ?? '' }}</h3>
                                <span style="font-size: 14px;">
                                    <mark class="count">
                                        {{ $country->job_count }}
                                    </mark>
                                    Available
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="container py-3">
        <div class="row">
            <style>
                .service-box {
                    background: rgb(63, 94, 251);
                    background: radial-gradient(circle, rgba(63, 94, 251, 1) 0%, rgba(252, 70, 107, 1) 100%);
                }
            </style>


            <div class="col-lg-12 col-md-12 col-lg-12 col-sm-12 animate__animated animate__bounce">
                <div class="sec-title text-center " style="height: auto;">
                    <h1 class="text-black">
                        Our Services
                    </h1>

                    <p style="text-align: justify; font-size: 16px; color: black;">
                        Blessing Light Services Co.,Ltd is a leading international employment agency specializing in
                        connecting employers
                        from all over the world with the best and most qualified candidates. With a wide network of
                        recruitment professionals, our team is dedicated to matching employers with the ideal candidates to
                        help your business succeed.
                    </p>
                </div>
            </div>


            <div class="row py-5 animate__animated animate__bounce">
                @foreach ($jobs as $job)
                    <div class="col-3 col-sm-3 col-sm-12 col-md-3">
                        <div class="product-default" style="background-color: #003201;">
                            <figure>
                                <a href="javascript::void(0)">
                                    <img data-enlargeable="" src="{{ $job->photo }}" alt=""
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;"
                                        class="img-enlargeable">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">
                                        Available Job in {{ $job->country->country ?? '' }}
                                    </div>
                                </div>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title text-white">
                                    {{ $job->title ?? '' }}
                                </h3>
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="javascript::void(0)" class="product-category text-white">
                                            Job in {{ $job->country->country ?? '' }}
                                        </a>
                                    </div>
                                </div>

                                <div class="product-action">
                                    <a href="tel:09 789 755 722" class="btn-icon-wish" title="Call Now">
                                        <i class="fa fa-phone"></i>
                                    </a>

                                    <a href="{{ route('cv.index') }}" class="btn-icon btn-add-cart">
                                        <i class="fa fa-arrow-right"></i>
                                        <span>
                                            Submit CV
                                        </span>
                                    </a>

                                    <a href="{{ route('contact.index') }}" class="btn-quickview" title="Contact Us">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
