@extends('layouts.main')
@section('title', 'Contact Us')
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
                    Contact Us
                </li>
            </ol>
        </div>
    </nav>

    <div class="container contact-us-container">
        <div class="contact-info">
            <div class="row">
                <div class="col-12">
                    <h2 class="ls-n-25 m-b-1">
                        Interested in discussing?
                    </h2>
                    <p style="text-align: justify; color: black;">
                        If you have any questions about our services or would like more information about our overseas
                        employment agency, please do not hesitate to get in touch. We are available by phone, email, or
                        through our contact form on our website. Our friendly team of experts are always happy to answer any
                        questions or queries you may have.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <h2 class="mt-6 mb-2">Send Us a Message</h2>
                <p style="color: black; font-weight: bold;">
                    If you have any queries about recruitments, vacancies, or anything else, our team is ready to
                    response all your queries.
                </p>
                <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}" autocomplete="off"
                    id="create-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-3">
                                <input name="name" type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-3">
                                <input name="email" type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-3">
                                <input name="phone" type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-3">
                                <input name="subject" type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <button type="submit" class="btn btn-dark font-weight-normal">
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.1651521401195!2d96.16340217418889!3d16.81816108397518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed1f80bc32eb%3A0xc8615906c6f9ef16!2sBlessing%20Light%20Oversea%20Employment%20Agency!5e0!3m2!1sen!2smm!4v1690352182302!5m2!1sen!2smm"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-4 contact-info">
                <h2 class="mt-6 mb-1">
                    Let Us Know How We Can Help You
                </h2>
                <p>
                    Alternatively, you may contact us by filling up the contact form. Our team will response you
                    shortly.
                </p>
                <style>
                    .contact-box {
                        background: rgb(34, 193, 195);
                        background: linear-gradient(0deg, rgba(34, 193, 195, 1) 0%, rgba(2, 10, 0, 1) 0%, rgba(22, 172, 55, 1) 100%);
                    }
                </style>
                <div class="col-sm-12 col-lg-12 contact-box py-5"
                    style="height: 190px; box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
                    <div class="feature-box text-center">
                        <i class="fa fa-map text-white"></i>
                        <div class="feature-box-content">
                            <h3 class="text-white">Address</h3>
                            <h5 class="text-white">
                                No.29, U Chit Maung Road, Sayar San (South) Quarter,
                                Bahan Township, Yangon, Myanmar.
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-12 contact-box py-5"
                    style="height: 190px; box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
                    <div class="feature-box text-center">
                        <i class="fa fa-mobile-alt text-white"></i>
                        <div class="feature-box-content">
                            <h3 class="text-white">Phone Number</h3>
                            <h5 class="text-white">
                                09 789 755 722<br>
                                09 789 755 733<br>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-12 contact-box py-5"
                    style="height: 190px; box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
                    <div class="feature-box text-center">
                        <i class="far fa-envelope text-white"></i>
                        <div class="feature-box-content">
                            <h3 class="text-white">E-mail Address</h3>
                            <h5 class="text-white">
                                blessinglight83@gmail.com<br>
                                info@blessinglight.com
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-12 contact-box py-5"
                    style="height: 190px; box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
                    <div class="feature-box text-center">
                        <i class="far fa-calendar-alt text-white"></i>
                        <div class="feature-box-content">
                            <h3 class="text-white">Working Days/Hours</h3>
                            <h5 class="text-white">Mon - Sun / 9:00AM - 8:00PM</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-8"></div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
