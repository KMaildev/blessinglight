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
                    Team Member
                </li>
            </ol>
        </div>
    </nav>

    <div class="container py-4 animate__animated animate__lightSpeedInRight">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-lg-12 col-sm-12">
                <div class="sec-title text-center " style="height: 300px;">
                    <br><br>
                    <h3 class="text-black">
                        Team Member
                    </h3>
                    <h1 class="text-black">
                        Creative Team Member
                    </h1>

                    <p class="animate__animated animate__lightSpeedInRight" style="text-align: justify; font-size: 16px; color: black; margin: 20px;">
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
                    <br>
                </div>

                <div class="row py-5 animate__animated animate__lightSpeedInRight">
                    @foreach ($teams as $team)
                        <div class="col-md-6 col-lg-3 animate__animated animate__lightSpeedInRight">
                            <div class="team-member-inner v3" data-aos="flip-left" data-aos-delay="100">
                                <div class="imgs">
                                    <img src="{{ $team->photo }}" alt="#"
                                        style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                                </div>

                                <div class="product-details" style="background-color: #003201; padding: 7px;">
                                    <p style="text-align: center">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit; font-size: 19px; color: white;">
                                                {{ $team->position ?? '' }}
                                            </font>
                                        </font>
                                        <br>
                                        <span style="color:#f7931E;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    {{ $team->name ?? '' }}
                                                </font>
                                            </font>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
