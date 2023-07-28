@extends('layouts.main')
@section('title', 'Activities')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-lg-12 col-sm-12">
                <div class="sec-title text-center breadcrumb-nav animate__animated animate__bounce animate__fadeInLeft"
                    style="height: auto;">
                    <br><br>
                    <h3 class="text-white">
                        Gallery & Activities
                    </h3>
                    <h1 class="text-white">
                        Checkout our photo gallery
                    </h1>
                </div>

                <p class="animate__animated animate__bounce animate__backInUp"
                    style="text-align: justify; font-size: 16px; color: black;">
                    Our gallery showcases a vibrant collection of photographs and testimonials from individuals who
                    have successfully found employment through our agency. These visuals depict diverse work
                    environments, cultural experiences, and personal growth opportunities that await those who
                    embark on their overseas employment journey with us. From bustling cityscapes to breathtaking
                    natural landscapes, our gallery captures the essence of working abroad and inspires our clients
                    to explore new horizons.
                </p>


                <div class="row py-5">
                    @foreach ($activities as $activity)
                        <div class="col-md-12">
                            <h5 style="font-size: 16px;">
                                {{ $activity->title ?? '' }}
                            </h5>
                            <p style="color: black;">
                                {!! $activity->description ?? '' !!}
                            </p>
                        </div>
                        @php
                            $images = explode(',', $activity->images);
                        @endphp
                        @foreach ($images as $image)
                            <div
                                class="hover06 col-3 col-sm-3 col-sm-12 col-md-3 animate__animated animate__bounce animate__fadeInLeft">
                                <div class="product-default" style="background-color: #003201;">
                                    <figure>
                                        <a href="javascript::void(0)">
                                            <img data-enlargeable="" src="{{ $image }}" alt=""
                                                style="width: 100%; height: 260px; background-size: center; object-fit: cover;"
                                                class="img-enlargeable">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">
                                                BSL
                                            </div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <h3 class="product-title text-white">
                                            {{ $activity->title ?? '' }}
                                        </h3>
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="javascript::void(0)" class="product-category text-white">
                                                    {{ $category->title ?? '' }}
                                                </a>
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

    <div class="category-banner-container bg-gray">
        <div class="category-banner banner text-uppercase"
            style="background: no-repeat 60%/cover url({{ asset('data/activities.png') }});">
            <div class="container position-relative">
                <div class="row">
                    <div class="pl-lg-5 pb-5 pb-md-0 col-sm-5 col-xl-4 col-lg-4 offset-1">
                        <h3>Gallery <br>Activities</h3>
                    </div>
                    <div class="pl-lg-3 col-sm-4 offset-sm-0 offset-1 pt-3">
                        <div class="coupon-sale-content">
                            <h4 class="m-b-1 coupon-sale-text bg-white text-transform-none">
                                {{ $category->title ?? '' }}
                            </h4>
                            <h5 class="mb-2 coupon-sale-text d-block ls-10 p-0">
                                <i class="ls-0">
                                    BSL
                                </i>
                                <b class="text-dark">
                                    Overseas Employment Agency
                                </b>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-4"></div>
@endsection
