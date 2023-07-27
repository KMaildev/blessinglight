<footer class="footer bg-dark position-relative"
    style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url({{ asset('data/footer1.jpg') }})">
    <div class="footer-middle">
        <div class="container position-static">
            <div class="footer-ribbon bg-primary text-white ls-0">
                Get in touch
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="widget">
                        <h4 class="widget-title font-weight-bold">Contact Info</h4>
                        <ul class="contact-info">
                            <li>
                                <span class="contact-info-label">
                                    Address:
                                </span>
                                No.29, U Chit Maung Road, Sayar San (South) Quarter, Bahan Township, Yangon, Myanmar.
                            </li>
                            <li>
                                <span class="contact-info-label">
                                    Phone:</span>
                                <a href="tel:09 789 755 722">
                                    09 789 755 722
                                </a>
                                <a href="tel:09 789 755 733">
                                    09 789 755 733
                                </a>
                            </li>
                            <li>
                                <span class="contact-info-label">
                                    Email:
                                </span>
                                <a href="mailto:blessinglight83@gmail.com">
                                    blessinglight83@gmail.com
                                </a>
                                <a href="mailto:info@blessinglight.com">
                                    info@blessinglight.com
                                </a>
                            </li>
                            <li>
                                <span class="contact-info-label">
                                    Working Days/Hours:</span>
                                Mon - Sun / 9:00AM - 8:00PM
                            </li>
                        </ul>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/myozinwin83"
                                class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                title="Twitter"></a>
                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"
                                title="Linkedin"></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8">
                    <div class="widget widget-newsletter">
                        <h4 class="widget-title">Subscribe newsletter</h4>
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 mb-1">
                                <p class="mb-0">
                                    If you have any queries about recruitments, vacancies, or anything else, our team is
                                    ready to response all your queries.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="widget">
                                <h4 class="widget-title mb-1">
                                    Quick Links
                                </h4>
                                <div class="links link-parts row">
                                    <ul class="link-part col-lg-6 col-md-12 mb-0">
                                        <li>
                                            <a href="{{ route('about.index') }}">
                                                <i class="fa fa-bookmark"></i>
                                                Our Company
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('ceo_message') }}">
                                                <i class="fa fa-bookmark"></i>
                                                President's Message
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('team') }}">
                                                <i class="fa fa-bookmark"></i>
                                                Professional Team
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="link-part col-lg-6 col-md-12">
                                        <li>
                                            <a href="{{ route('cv.index') }}">
                                                <i class="fa fa-bookmark"></i>
                                                Job Application
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('employer.index') }}">
                                                <i class="fa fa-bookmark"></i>
                                                Employers
                                            </a>
                                        </li>

                                        <li class="{{ Route::is('contact.index') ? 'active' : '' }}">
                                            <a href="{{ route('contact.index') }}">
                                                <i class="fa fa-mobile"></i>
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-7">
                            <div class="widget">
                                <h4 class="widget-title mb-1">
                                    Our Sending Countries
                                </h4>

                                <div class="links link-parts row">
                                    <ul class="link-part col-lg-6 col-md-12 mb-0">
                                        @foreach ($countries as $country)
                                            <li>
                                                <a href="{{ route('job.show', $country->id) }}">
                                                    <i class="fa fa-bookmark"></i>
                                                    {{ $country->country ?? '' }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <ul class="link-part col-lg-6 col-md-12 mb-0">
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('activities.show', $category->id) }}">
                                                    <i class="fa fa-bookmark"></i>
                                                    {{ $category->title ?? '' }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer-bottom d-sm-flex align-items-center">
            <div class="footer-left">
                <span class="footer-copyright">
                    © Blessing Light Services Co.,Ltd. 2023. All Rights Reserved
                </span>
            </div>
        </div>
    </div>
</footer>
