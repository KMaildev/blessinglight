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
                    Our Company
                </li>
            </ol>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row align-items-center">

            <div class="col-md-5 animate__animated animate__lightSpeedInRight">
                <img style="width: 100%; height: 600px; background-size: cotain; object-fit: cover; background-position: center;"
                    src="{{ asset('data/about.jpg') }}" data-aos="fade-down" class="img1" alt="">
            </div>

            <div class="col-md-7">
                <h3 style="color:#00CE55;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Blessing
                        </font>
                    </font>
                    <span style="color:#f7931E;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Light Services Co.,Ltd
                            </font>
                        </font>
                    </span>
                </h3>

                <h4>
                    Overseas Employment Agency
                </h4>


                <p style="text-align: justify; font-size: 16px; color: black;"
                    class="animate__animated animate__lightSpeedInRight">
                    Our company "Blessing Light Services Co.,Ltd." was established in the year 2020 for the manpower supply.
                    Blessing Light Service Co.,Ltd is one of the registered licence companies in Republic of the Union of
                    Myanmar and authorized by the Ministry of the National Planning & Economic Development and Ministry of
                    Labor, Employment & Social Welfare. We specialize in the supply of manpower to overseas countries.
                    <br><br>
                    "Blessing Light Services Co.,Ltd." has been in this manpower recruitment services for many years and we
                    are proud and modest to inform that we have had substantial success in the supply of labor in the
                    different business sectors.

                    <br><br>
                    We arrange enrollment for Singapore, Malaysia and Thailand.
                    And, we are fully accredited member of Myanmar Overseas Employment Agencies
                    Federation (MOEAF).
                    <br><br>
                    "Blessing Light Services Co.,Ltd." always welcome for your manpower needs and "Blessing Light Services
                    Co.,Ltd." will provide our best services as your reliable agency.
                </p>
                <br>
                <a href="{{ route('contact.index') }}" class="btn btn-dark font-weight-normal">
                    Contact Us
                </a>

                <a href="{{ route('employer.index') }}" class="btn btn-dark font-weight-normal">
                    Employers
                </a>
            </div>

            <div class="col-md-12 py-5">
                <style>
                    .table {
                        border-collapse: collapse;
                        border: 1px solid black;
                        width: 100%;
                    }

                    th,
                    tr,
                    td {
                        border: 1px solid black;
                    }
                </style>
                <table style='border: 2px solid black' class="table animate__animated animate__lightSpeedInRight">
                    <tbody>
                        <tr>
                            <td style="color:black; background-color:#003201; color: white; width: 25%;">
                                Name of Company
                            </td>

                            <td style="color:black;">
                                Blessing Light Services Co.,Ltd.
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black;">
                                Nature of Business
                            </td>

                            <td style="color:black;">
                                Services, Recruitment, Manpower supply
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black; background-color:#003201; color: white;">
                                Nationality of Company
                            </td>

                            <td style="color:black;">
                                Local Myanmar
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black;">
                                Company Registration
                            </td>

                            <td style="color:black;">
                                Directorate of Investment and Comapny Administration
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black; background-color:#003201; color: white;">
                                Registration No.
                            </td>

                            <td style="color:black;">
                                118376935
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black;">
                                Licence Approval
                            </td>

                            <td style="color:black;">
                                Ministry of Labor in Myanmar
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black; background-color:#003201; color: white;">
                                Overseas Employment Licence No.
                            </td>

                            <td style="color:black;">
                                82/2021
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black;">
                                Office Location
                            </td>

                            <td style="color:black;">
                                No.29, U Chit Maung Road, Sayar San (South) Quarter, Bahan Township, Yangon, Myanmar.
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black; background-color:#003201; color: white;">
                                Office Phone No.
                            </td>

                            <td style="color:black;">
                                <a href="tel:+959 789 755 722">
                                    +959 789 755 722
                                </a>,
                                <a href="tel:+959 789 755 722">
                                    +959 789 755 722
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black;">
                                Mail Address
                            </td>

                            <td style="color:black;">
                                <a href="mailto:blessinglight83@gmail.com">
                                    blessinglight83@gmail.com
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <section
        class="cmt-row bg-base-dark cmt-bg cmt-bgimage-yes bg-img1 clearfix py-5 animate__animated animate__lightSpeedInRight">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="">
                        <h3 style="color:#00CE55;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Company Information
                                </font>
                            </font>
                        </h3>
                        <h3>
                            <span style="color:#f7931E;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Company Registration Certificate
                                    </font>
                                </font>
                            </span>
                        </h3>

                        <p style="text-align: justify; font-size: 15px; color: black;">
                            Choose us for your overseas employment needs and embark on a rewarding international career
                            journey. Our agency offers a wealth of experience and expertise, ensuring smooth transitions
                            and successful placements. With a wide range of job options across various sectors and
                            countries, personalized support, and a commitment to excellence, we prioritize your success
                            and build lasting relationships with our clients. Trust us to make your overseas job
                            aspirations a reality.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/1.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 340px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/2.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 340px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="promo-section bg-dark" data-parallax="{'speed': 2, 'enableOnMobile': true}"
        data-image-src="{{ asset('data/company_bg.jpg') }}">
        <div class="promo-banner banner container text-uppercase">
            <div class="banner-content row align-items-center text-center">
                <div class="col-md-4 ml-xl-auto text-md-right appear-animate" data-animation-name="fadeInRightShorter"
                    data-animation-delay="600">
                    <h2 class="mb-md-0 text-white">
                        Blessing Light Services Co.,Ltd
                    </h2>
                </div>
                <div class="col-md-4 col-xl-3 pb-4 pb-md-0 appear-animate" data-animation-name="fadeIn"
                    data-animation-delay="300">
                    <a href="{{ route('contact.index') }}" class="btn btn-dark btn-black ls-10">
                        Contact Us
                    </a>
                </div>

                <div class="col-md-4 mr-xl-auto text-md-left appear-animate" data-animation-name="fadeInLeftShorter"
                    data-animation-delay="600">
                    <h4 class="mb-1 mt-1 font1 coupon-sale-text p-0 d-block ls-n-10 text-transform-none">
                        <b>
                            Overseas Employment Agency
                        </b>
                    </h4>
                    <h5 class="mb-1 coupon-sale-text text-white ls-10 p-0">
                        <i class="ls-0 text-black">
                            BSL
                        </i>
                        <b class="text-white bg-secondary ls-n-10">
                            Licence No. 068/2023
                        </b>
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-boxes-container py-5">
        <div class="container appear-animate" data-animation-name="fadeInUpShorter">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h3 style="color:#00CE55;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Our Vision, Mission & Value
                                </font>
                            </font>
                        </h3>
                    </center>
                </div>
                <style>
                    /* .feature-box-simple1 {
                                                        padding: 10px;
                                                        background: rgb(226, 56, 18);
                                                        background: linear-gradient(315deg, rgba(226, 56, 18, 1) 0%, rgba(15, 68, 213, 0.31976540616246496) 49%, rgba(19, 38, 235, 1) 100%);
                                                    }

                                                    .feature-box-simple2 {
                                                        padding: 10px;
                                                        background: rgb(34, 193, 195);
                                                        background: linear-gradient(0deg, rgba(34, 193, 195, 1) 0%, rgba(73, 167, 170, 1) 0%, rgba(222, 108, 8, 1) 100%);
                                                    }

                                                    .feature-box-simple3 {
                                                        padding: 10px;
                                                        background: rgb(148, 136, 27);
                                                        background: linear-gradient(90deg, rgba(148, 136, 27, 1) 0%, rgba(27, 148, 47, 1) 52%, rgba(2, 21, 71, 1) 100%, rgba(253, 29, 29, 1) 100%);
                                                    } */
                </style>
                <div class="col-md-4">
                    <div class="feature-box px-sm-5 feature-box-simple text-center feature-box-simple1">
                        <div class="feature-box-icon">
                            <i class="icon-earphones-alt"></i>
                        </div>

                        <div class="feature-box-content p-0">
                            <h3>
                                Our Mission
                            </h3>
                            <p style="text-align: justify; color: black;">
                                Our vision is to be a leading overseas employment company, connecting talented
                                individuals with rewarding job opportunities worldwide. We aim to empower job
                                seekers and contribute to the growth and development of businesses in need of
                                skilled and dedicated professionals.
                            </p>
                            <br><br><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-box px-sm-5 feature-box-simple text-center feature-box-simple2">
                        <div class="feature-box-icon">
                            <i class="icon-credit-card"></i>
                        </div>

                        <div class="feature-box-content p-0">
                            <h3>Our Vission</h3>
                            <p style="text-align: justify; color: black;">
                                Our mission is to provide exceptional overseas employment services by offering a
                                comprehensive range of solutions to both job seekers and employers. We strive to
                                match the right candidates with the right opportunities, fostering mutual success
                                and long-term partnerships. Through our dedication to ethical practices and
                                personalized support, we aim to make a positive impact on the lives of individuals
                                and the organizations we serve.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-box px-sm-5 feature-box-simple text-center feature-box-simple3">
                        <div class="feature-box-icon">
                            <i class="icon-action-undo"></i>
                        </div>
                        <div class="feature-box-content p-0">
                            <h3>Our Value</h3>
                            <ul class="list-icons">
                                <li style="text-align: justify; color: black;">
                                    Excellence - We strive for excellence in every aspect of our services,
                                    aiming to
                                    exceed expectations.
                                </li>
                                <li style="text-align: justify; color: black;">
                                    Respect - We value and respect the diverse backgrounds and perspectives of
                                    all
                                    individuals we work with.
                                </li>
                                <li style="text-align: justify; color: black;">
                                    Collaboration - We foster strong partnerships, working together to achieve
                                    mutual success.
                                </li>
                                <li style="text-align: justify; color: black;">
                                    Responsiveness - We are responsive to the needs of our clients, providing
                                    timely
                                    solutions and support.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cmt-row bg-base-dark cmt-bg cmt-bgimage-yes bg-img1 clearfix py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <h3 style="color:#00CE55;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Company
                            </font>
                        </font>
                        <span style="color:#f7931E;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Organizational Chart
                                </font>
                            </font>
                        </span>
                    </h3>

                    <div class="title-desc">
                        <p style="text-align: justify; font-size: 16px; color: black; line-height: 2.5;">
                            Our overseas employment agency consists of a skilled team dedicated to connecting talented
                            individuals with international job opportunities. We have a deep understanding of global
                            markets, immigration laws, and visa processes. Our extensive network of contacts allows us
                            to offer a wide range of employment opportunities in various sectors. We prioritize
                            transparency, ethical practices, and open communication, providing personalized guidance and
                            support to job seekers. Our commitment to excellence ensures successful placements and
                            long-term relationships with clients.
                        </p>
                    </div>

                    <h4><b>Our Purpose</b></h4>
                    <div class="title-desc">
                        <p style="text-align: justify; font-size: 16px; color: black; line-height: 2.5;">
                            Our main purpose is to provide different categories of
                            Myanmar Manpower around the globe and
                            especially
                            Thailand. We supply Skilled, Semi-Skilled, General Worker, Technical, Professional and
                            Unskilled Myanmar
                            Manpower. Currently, we are dealing with various clients from different countries and
                            successful in supply
                            Malaysia, Japan, Thailand, Singapore without any complaints.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/org.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: auto; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
