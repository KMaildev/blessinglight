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
                    Submit CV
                </li>

                <li class="breadcrumb-item active text-white" aria-current="page">
                    Apply for your job
                </li>
            </ol>
        </div>
    </nav>


    <div class="container py-5 animate__animated animate__bounce animate__fadeInDown">
        <section class="left-section">
            <div class="row">
                <style>
                    .message-box {
                        background: rgb(255, 125, 10);
                        background: linear-gradient(90deg, rgba(255, 125, 10, 1) 0%, rgba(27, 148, 47, 1) 51%, rgba(2, 21, 71, 1) 100%, rgba(253, 29, 29, 1) 100%);
                        padding: 20px;
                        height: 140px;
                    }
                </style>
                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                    <div class="info-box info-box-icon-left message-box">
                        <i class="icon-mobile"></i>
                        <div class="info-box-content">
                            <h4 class="text-white">
                                Our
                                Experience
                            </h4>
                            <p class="text-white">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                    <div class="info-box info-box-icon-left message-box">
                        <i class="icon-earphones-alt"></i>
                        <div class="info-box-content">
                            <h4 class="text-white">
                                Sending
                                Country
                            </h4>
                            <p class="text-white">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                    <div class="info-box info-box-icon-left message-box">
                        <i class="icon-credit-card"></i>
                        <div class="info-box-content">
                            <h4 class="text-white">
                                SENDING CANDIDATES
                            </h4>
                            <p class="text-white">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                    <div class="info-box info-box-icon-left message-box">
                        <i class="icon-action-undo"></i>
                        <div class="info-box-content">
                            <h4 class="text-white">
                                Global Partners
                            </h4>
                            <p class="text-white">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container contact-us-container animate__animated animate__bounce animate__fadeInDown">
        <div class="row">
            <div class="col-lg-8" style="background-color: #e7f0e7; padding: 20px;">
                <h2 class="text-black">
                    Apply Now
                </h2>
                <p class="p-b-3" style="font-size: 15px; text-align: justify; color: black;">
                    To apply for the desired job, we recommend reading the job requirements
                    carefuly then if you found yourself qualified for it, simply fill in the below form and
                    click APPLY NOW.
                </p>
                <form autocomplete="off" method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data"
                    id="create-form" autocomplete="off">
                    @csrf

                    <style>
                        input[type=text] {
                            width: 100%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: 1px solid black;
                            -webkit-transition: 0.5s;
                            transition: 0.5s;
                            outline: none;
                        }

                        input[type=text]:focus {
                            border: 1px solid black;
                        }
                    </style>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="text-black" style="color: black;">Name*</label>
                            <input type="text" name="name" class="form-control " value="">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="text-black" style="color: black;">Phone</label>
                            <input type="text" name="phone" class="form-control " value="">
                        </div>
                    </div>

                    <div class="col-lg-12 py-3">
                        <div class="form-group">
                            <label class="text-black" style="color: black;">Additional Note</label>
                            <input type="text" name="additional_note" class="form-control " value="">
                        </div>
                    </div>

                    <div class="col-lg-12 py-3">
                        <div class="form-group">
                            <label for="img" style="color: black;">
                                Select your CV to upload
                            </label>
                            <br>
                            <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                class="form-control-file" required>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-dark font-weight-normal">
                            Apply Now
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 contact-info" style="background-color: white; padding: 20px;">
                <h2 class="text-black">
                    Job Application
                </h2>

                <p class="p-b-3" style="font-size: 15px; text-align: justify;">
                    When it comes to choosing an employment agency, there are several factors to consider. Here are
                    some reasons why you may choose us:
                </p>

                <div class="right-content-about">
                    <p style="text-align: justify; font-size: 15px;">
                        <span style="color: black; font-weight: bold">
                            Expertise and Experience:
                        </span> We have a team of experienced professionals who specialize in
                        recruitment and talent acquisition. Our expertise allows us to understand the
                        intricacies of various industries and job markets, enabling us to find the best
                        candidates for your organization.
                    </p>

                    <p style="text-align: justify; font-size: 15px;">
                        <span style="color: black; font-weight: bold">
                            Time and Cost Savings:
                        </span>
                        Recruiting and hiring can be time-consuming and expensive. As an
                        employment agency, we handle the entire process for you, from sourcing candidates to
                        conducting initial screenings and interviews. This saves you valuable time and resources
                        that can be better utilized for other core business activities.
                    </p>


                    <p style="text-align: justify; font-size: 15px;">
                        <span style="color: black; font-weight: bold">
                            Extensive Network:
                        </span>
                        A reputable overseas employment agency often has a broad network of
                        international employers and job opportunities, increasing the chances of finding suitable
                        positions for candidates.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
