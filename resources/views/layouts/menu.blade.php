<header class="header">
    <div class="container">
        <div class="header-top d-flex align-items-center w-100">
            <div class="header-left">
                <p class="top-message ls-0 text-uppercase text-white d-none d-sm-block">
                    Welcome to Blessing Light Services Co.,Ltd
                </p>
            </div>
            <div class="header-right header-dropdowns w-sm-100">
                <div class="header-dropdown dropdown-expanded d-none d-lg-block mr-2">
                    <div class="header-menu">
                        <ul>
                            <li>
                                <a href="mailto:blessinglight83@gmail.com">
                                    <i class="fa fa-envelope"></i>
                                    blessinglight83@gmail.com
                                </a>
                            </li>

                            <li>
                                <a href="tel:09 789 755 733">
                                    <i class="fa fa-mobile"></i>
                                    09 789 755 733
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <span class="separator"></span>
                <div class="header-dropdown">
                    <a href="#">
                        <i class="flag-us flag"></i>
                        English
                    </a>
                    <div class="header-menu">
                        <ul>
                            <li>
                                <a href="javascript::void(0)" onclick="doGTranslate('th|en');return true;">
                                    <i class="flag-us flag mr-2"></i>
                                    English
                                </a>
                            </li>
                            <li>
                                <a href="javascript::void(0)" onclick="doGTranslate('en|zh-TW');return true;">
                                    <i class="flag-cn flag mr-2"></i>
                                    China
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <span class="separator"></span>
                <div class="social-icons">
                    <a href="https://www.facebook.com/myozinwin83" class="social-icon social-facebook icon-facebook"
                        target="_blank"></a>
                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                    <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>


    <div class="header-middle text-dark" style="background-color: #FDFAFA; padding-top: 1rem; padding-bottom: 1rem;">
        <div class="container">
            <div class="col-lg-12 w-auto pl-0">
                <center>
                    <a href="{{ route('home') }}" class="logo">
                        <style>
                            .logowidth {
                                width: 90%;
                            }

                            @media only screen and (max-width: 600px) {
                                .logowidth {
                                    width: 90%;
                                }
                            }
                        </style>
                        <img src="{{ asset('data/weblogo.png') }}" alt="Blessing Light Services Co.,Ltd"
                            class="logowidth">
                    </a>
                </center>
            </div>
        </div>
    </div>

    <div class="header-bottom sticky-header d-lg-block d-none" data-sticky-options="{'mobile': false}"
        style="background-color: #003201">
        <div class="container">

            {{-- <div class="header-left">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('data/logo.png') }}" alt="Porto Logo">
                </a>
            </div> --}}

            <div class="header-center">
                <nav class="main-nav w-100">
                    <ul class="menu">

                        <li class="{{ Route::is('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}" style="color: white;">
                                <i class="fa fa-home" style="color: #FE0000;"></i>
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="javascript::void(0)" style="color: white;">
                                <i class="fa-solid fa-ranking-star" style="color: #FE0000;"></i>
                                About Us
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('about.index') }}">
                                        <i class="fa-solid fa-chart-line" style="color: #FE0000;"></i>
                                        Our Company
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('ceo_message') }}">
                                        <i class="fa-solid fa-user-pen" style="color: #FE0000;"></i>
                                        President's Message
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('team') }}">
                                        <i class="fa-solid fa-users" style="color: #FE0000;"></i>
                                        Professional Team
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="{{ Route::is('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}" style="color: white;">
                                <i class="fa-solid fa-file-circle-plus" style="color: #FE0000;"></i>
                                Profile
                            </a>
                        </li>

                        <li>
                            <a href="#" style="color: white;">
                                <i class="fa-solid fa-flag-checkered" style="color: #FE0000;"></i>
                                Manpower Services
                            </a>
                            <ul>
                                @foreach ($countries as $country)
                                    <li>
                                        <a href="{{ route('job.show', $country->id) }}">
                                            <i class="fa-solid fa-flag" style="color: #FE0000;"></i>
                                            {{ $country->country ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a href="#" style="color: white;">
                                <i class="fa-solid fa-photo-film" style="color: #FE0000;"></i>
                                Gallery & Activities
                            </a>
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('activities.show', $category->id) }}">
                                            <i class="fa-solid fa-images" style="color: #FE0000;"></i>
                                            {{ $category->title ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('cv.index') }}" style="color: white;">
                                <i class="fa-solid fa-user-pen" style="color: #FE0000;"></i>
                                Job Application
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('employer.index') }}" style="color: white;">
                                <i class="fa-solid fa-pencil" style="color: #FE0000;"></i>
                                Employers
                            </a>
                        </li>

                        <li class="{{ Route::is('contact.index') ? 'active' : '' }}">
                            <a href="{{ route('contact.index') }}" style="color: white;">
                                <i class="fa-solid fa-phone-volume" style="color: #FE0000;"></i>
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>



<style type="text/css">
    .skiptranslate {
        display: none !important;
    }

    body {
        top: 0px !important;
    }
</style>

<div id="google_translate_element2"></div>

<script type="text/javascript">
    function googleTranslateElementInit2() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            autoDisplay: false
        }, 'google_translate_element2');
    }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
</script>


<script type="text/javascript">
    /* <![CDATA[ */
    eval(function(p, a, c, k, e, r) {
        e = function(c) {
            return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c
                .toString(36))
        };
        if (!''.replace(/^/, String)) {
            while (c--) r[e(c)] = k[c] || e(c);
            k = [function(e) {
                return r[e]
            }];
            e = function() {
                return '\\w+'
            };
            c = 1
        };
        while (c--)
            if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',
        43, 43,
        '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'
        .split('|'), 0, {}))
    /* ]]> */
</script>
