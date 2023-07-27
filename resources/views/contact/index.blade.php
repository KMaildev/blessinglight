@extends('layouts.main')
@section('content')
    <br>
    <div class="pageContent">
        <div class="white-bg fullscreen-contact main-border" style="margin-top: 0px;">
            <div class="page-title">
                <div class="container">
                    <h1>Contact Us</h1>
                    <h3>
                        Send us a message and we' ll respond as soon as possible
                    </h3>
                </div>
            </div>
            <div class="breadcrumbs">
                <div class="container">
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                    <i class="fa fa-long-arrow-right main-color"></i>
                    <a href="javascript::void(0)">
                        Contact Us
                    </a>
                </div>
            </div>

            <div class="inner-contact">
                <div class="heading main centered">
                    <h3 class="uppercase lg-title">
                        <span class="main-color"> Interested in </span> discussing?
                    </h3>
                    <p>
                        Alternatively, you may contact us by filling up the contact form. Our team will response you
                        shortly.
                    </p>
                </div>

                <div class="p-b-3">
                    <div class="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="white-bg lg-box t-center light-gry-border rect-angles">
                                    <i class="fa fa-map-marker main-color lg-icon"></i>
                                    <h4>Address</h4>
                                    <p style="text-align: justify">
                                        No.29, U Chit Maung Road, Sayar San (South) Quarter,
                                        Bahan Township, Yangon, Myanmar.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="white-bg lg-box t-center light-gry-border rect-angles">
                                    <i class="fa fa-phone-square main-color lg-icon"></i>
                                    <h4>Phone</h4>
                                    <p>
                                        Phone: 09 789 755 722<br>
                                        Mobile: 09 789 755 733<br>
                                        <br>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="white-bg lg-box t-center light-gry-border rect-angles">
                                    <i class="fa fa-envelope main-color lg-icon"></i>
                                    <h4>E-mail Address</h4>
                                    <p>
                                        blessinglight83@gmail.com<br>
                                        info@blessinglight.com
                                        <br><br>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="sm-padding">
                    <hr class="dev-style4" />
                </div>


                <div class="heading main centered">
                    <h3 class="uppercase lg-title">
                        <span class="main-color"> Have A </span> Question?
                    </h3>
                    <p>
                        If you have any queries about recruitments, vacancies, or anything else, our team is ready to
                        response all your queries.
                    </p>
                </div>


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
                            <button class="btn main-bg btn-block btn-lg btn-3d uppercase" type="submit" id="contact-submit"
                                name="contact-submit" value="submit">Send Message</button>
                        </div>
                    </div>
                </form>

                <br>
                
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.1651521401195!2d96.16340217418889!3d16.81816108397518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed1f80bc32eb%3A0xc8615906c6f9ef16!2sBlessing%20Light%20Oversea%20Employment%20Agency!5e0!3m2!1sen!2smm!4v1690352182302!5m2!1sen!2smm"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>


            </div>

        </div>
        <br><br><br>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
