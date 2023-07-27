<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Blessing Light Services Co.,Ltd （Overseas Employment Agency） - @yield('title')</title>

    <meta name="description" content="BOOKRA | Multi-purpose HTML5 Template">
    <meta name="author" content="IT-RAYS">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link
        href='../../fonts.googleapis.com/css5e25.css?family=Oswald:400,100,300,500,700%7CLato:400,300,700,900&amp;subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>

    <!-- Plugins CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/assets.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shortcodes.css') }}">

    <!-- REVOLUTION SLIDER STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/settings.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/navigation.css') }}" type="text/css">

    <link id="theme_css" rel="stylesheet" href="{{ asset('assets/css/light.css') }}">
    <link id="skin_css" rel="stylesheet" href="{{ asset('assets/css/skins/default.css') }}">

</head>

<body>
    <div class="pageWrapper">
        <div class="head-border"></div>

        @include('layouts.menu')

        <div class="pageContent">
            @if (URL::current() == route('home'))
                @include('layouts.slider')
            @endif
            @yield('content')
        </div>

        @include('layouts.footer')
    </div>

    <!-- Load JS plugins -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.12.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/assets.js') }}"></script>

    <!-- SLIDER REVOLUTION  -->
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script type="text/javascript">
        var tpj = jQuery;
        var revapi429;
        tpj(window).load(function() {
            if (tpj("#rev_slider_429_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_429_1");
            } else {
                revapi429 = tpj("#rev_slider_429_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "assets/revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "vertical",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "vertical",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "metis",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: false,
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1200, 1024, 768, 480],
                    gridheight: [650, 650, 650, 650],
                    lazyType: "smart",
                    shadow: 0,
                    spinner: "spinner2",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "on",
                        disableFocusListener: false,
                    }
                });
            }
        });
    </script>
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    @yield('script')


</body>

</html>
