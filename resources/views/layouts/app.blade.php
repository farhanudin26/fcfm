<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title>@yield('title', 'Fresh Cleaning Facilities Management')</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <style id="wp-img-auto-sizes-contain-inline-css">
        img:is([sizes=auto i],[sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }

        /*# sourceURL=wp-img-auto-sizes-contain-inline-css */
    </style>
    <link rel='stylesheet' id='hfe-widgets-style-css' href='{{ asset('assets/css/hfe-widgets-frontend.css') }}'
        media='all' />
    <style id="classic-theme-styles-inline-css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }

        /*# sourceURL=/wp-includes/css/classic-themes.min.css */
    </style>

    <style id="global-styles-inline-css">
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgb(6, 147, 227) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgb(252, 185, 0) 0%, rgb(255, 105, 0) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgb(255, 105, 0) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);
            --wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);
        }

        :where(body) {
            margin: 0;
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        :root :where(.wp-element-button, .wp-block-button__link) {
            background-color: #32373c;
            border-width: 0;
            color: #fff;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            letter-spacing: inherit;
            line-height: inherit;
            padding-top: calc(0.667em + 2px);
            padding-right: calc(1.333em + 2px);
            padding-bottom: calc(0.667em + 2px);
            padding-left: calc(1.333em + 2px);
            text-decoration: none;
            text-transform: inherit;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        /*# sourceURL=global-styles-inline-css */
    </style>

    <link rel='stylesheet' id='contact-form-7-css' href='{{ asset('assets/css/contact-form-7.css') }}' media='all' />
    <link rel='stylesheet' id='hfe-style-css' href='{{ asset('assets/css/header-footer-elementor.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='{{ asset('assets/css/elementor-frontend.min.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-1756-css' href='{{ asset('assets/css/elementor/post-1756.css') }}'
        media='all' />
    <link rel='stylesheet' id='widget-image-css' href='{{ asset('assets/css/elementor-widget-image.min.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-1226-css' href='{{ asset('assets/css/elementor/post-1226.css') }}'
        media='all' />
    <link rel='stylesheet' id='clinox-googlefonts-css'
        href='https://fonts.googleapis.com/css?family=DM+Sans%3A400%2C500%2C700&#038;subset=latin%2Clatin-ext'
        media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
        integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'
        media='all' />
    <link rel='stylesheet' id='fontawesome-all-css' href='{{ asset('assets/css/fontawesome-all.css') }}'
        media='all' />
    <link rel='stylesheet' id='twenty-css' href='{{ asset('assets/css/twenty.css') }}' media='all' />
    <link rel='stylesheet' id='animate-css' href='{{ asset('assets/css/animate.css') }}' media='all' />
    <link rel='stylesheet' id='video-css' href='{{ asset('assets/css/video.css') }}' media='all' />
    <link rel='stylesheet' id='slick-css' href='{{ asset('assets/css/slick.css') }}' media='all' />
    <link rel='stylesheet' id='metisMenu-css' href='{{ asset('assets/css/metismenu.css') }}' media='all' />
    <link rel='stylesheet' id='slick-theme-css' href='{{ asset('assets/css/slick-theme.css') }}' media='all' />
    <link rel='stylesheet' id='reset-css' href='{{ asset('assets/css/reset.css') }}' media='all' />
    <link rel='stylesheet' id='style-css' href='{{ asset('assets/css/style.css') }}' media='all' />
    <link rel='stylesheet' id='default-css' href='{{ asset('assets/css/default.css') }}' media='all' />
    <link rel='stylesheet' id='clinox-style-css' href='{{ asset('assets/css/theme.css') }}' media='all' />
    <link rel='stylesheet' id='elementor-icons-flaticon-css' href='{{ asset('assets/css/flaticon.css') }}'
        media='all' />
    <link rel='stylesheet' id='dashicons-css' href='{{ asset('assets/css/dashicons.min.css') }}' media='all' />
    <link rel='stylesheet' id='hfe-elementor-icons-css' href='{{ asset('assets/css/elementor-icons.min.css') }}'
        media='all' />
    <link rel='stylesheet' id='hfe-icons-list-css'
        href='{{ asset('assets/css/elementor-widget-icon-list.min.css') }}' media='all' />
    <link rel='stylesheet' id='hfe-social-icons-css'
        href='{{ asset('assets/css/elementor-widget-social-icons.min.css') }}' media='all' />
    <link rel='stylesheet' id='hfe-social-share-icons-brands-css' href='{{ asset('assets/css/fa-brands.css') }}'
        media='all' />
    <link rel='stylesheet' id='hfe-social-share-icons-fontawesome-css'
        href='{{ asset('assets/css/fa-fontawesome.css') }}' media='all' />
    <link rel='stylesheet' id='hfe-nav-menu-icons-css' href='{{ asset('assets/css/fa-solid.css') }}'
        media='all' />
    <link rel='stylesheet' id='csf-google-web-fonts-css'
        href='//fonts.googleapis.com/css?family=Montserrat:400,600,500&#038;display=swap' media='all' />
    <link rel='stylesheet' id='elementor-gf-local-roboto-css' href='{{ asset('assets/css/gf-roboto.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-gf-local-robotoslab-css' href='{{ asset('assets/css/gf-robotoslab.css') }}'
        media='all' />
    <script id="jquery-core-js" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script id="jquery-migrate-js" src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
    <script id="jquery-js-after">
        ! function($) {
            "use strict";
            $(document).ready(function() {
                $(this).scrollTop() > 100 && $(".hfe-scroll-to-top-wrap").removeClass("hfe-scroll-to-top-hide"), $(
                    window).scroll(function() {
                    $(this).scrollTop() < 100 ? $(".hfe-scroll-to-top-wrap").fadeOut(300) : $(
                        ".hfe-scroll-to-top-wrap").fadeIn(300)
                }), $(".hfe-scroll-to-top-wrap").on("click", function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 300);
                    return !1
                })
            })
        }(jQuery);
        ! function($) {
            'use strict';
            $(document).ready(function() {
                var bar = $('.hfe-reading-progress-bar');
                if (!bar.length) return;
                $(window).on('scroll', function() {
                    var s = $(window).scrollTop(),
                        d = $(document).height() - $(window).height(),
                        p = d ? s / d * 100 : 0;
                    bar.css('width', p + '%')
                });
            });
        }(jQuery);
        //# sourceURL=jquery-js-after
    </script>
    <script id="imagesloaded-js" src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>
    <script id="masonry-js" src="{{ asset('assets/js/masonry.min.js') }}"></script>
    <script id="bootstrap-js" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script id="twenty-js" src="{{ asset('assets/js/twenty.js') }}"></script>
    <script id="jquery-magnific-popup-js" src="{{ asset('assets/js/jquery-magnific-popup.js') }}"></script>
    <script id="appear-js" src="{{ asset('assets/js/appear.js') }}"></script>
    <script id="slick-js" src="{{ asset('assets/js/slick.js') }}"></script>
    <script id="jquery-counterup-js" src="{{ asset('assets/js/jquery-counterup.js') }}"></script>
    <script id="waypoints-js" src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script id="backToTop-js" src="{{ asset('assets/js/backtotop.js') }}"></script>
    <script id="jquery-filterizr-js" src="{{ asset('assets/js/jquery-filterizr.js') }}"></script>
    <script id="tilt-jquery-js" src="{{ asset('assets/js/tilt-jquery.js') }}"></script>
    <script id="wow-js" src="{{ asset('assets/js/wow.js') }}"></script>
    <script id="metisMenu-js" src="{{ asset('assets/js/metismenu.js') }}"></script>
    <script id="clinox-script-js" src="{{ asset('assets/js/clinox-script.js') }}"></script>
    <script id="clinox-custom-js" src="{{ asset('assets/js/clinox-custom.js') }}"></script>
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <style type="text/css">
        body {
            font-family: "Montserrat";
            font-weight: normal;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat";
            font-weight: normal;
            letter-spacing: 1px;
        }

        .site-branding img {
            max-width: 250px;
        }

        .clenix-breadcrumb-section {
            background-image: url(http://themexriver.com/wp/clinox/wp-content/uploads/2022/05/br-bg1.jpg);
        }
    </style>
    <link rel="icon" href="{{ asset('assets/img/uploads/2025/09/fcfm-square-logo-4-150x150.png') }}"
        sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/img/uploads/2025/09/fcfm-square-logo-4-300x300.png') }}"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/uploads/2025/09/fcfm-square-logo-4-300x300.png') }}" />
    <meta name="msapplication-TileImage"
        content="{{ asset('assets/img/uploads/2025/09/fcfm-square-logo-4-300x300.png') }}" />
    <style id="wp-custom-css">
        :root {
            --font: 'DM Sans', sans-serif;
            --color-primary: #3492d3;
            --color-black: #000;
            --color-deep: #3492d3;
            --color-body: #535353;
            --color-yellow: #f9da00;
            --color-white: #fff;
        }
    </style>

    @yield('head')
</head>


<body
    class="home wp-singular page-template page-template-elementor_header_footer page page-id-1226 wp-theme-clinox ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756 elementor-page elementor-page-1226">

    <div id="page" class="site">

        <div class="preloder_part">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>

        <div class="search-popup">
            <button class="close-search style-two"><span class="fal fa-times"></span></button>
            <button class="close-search"><span class="fa fa-arrow-up"></span></button>
            <form>
                <div class="form-group">
                    <input type="search" name="s" value="" placeholder="Search Here" required="">
                    <button type="submit" disabled><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>



        @include('partials.header')

        @yield('content')

    </div><!-- #page -->

    @include('partials.footer')

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/clinox/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
    <script>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script id="wp-hooks-js" src="{{ asset('assets/js/wp-hooks.min.js') }}"></script>
    <script id="wp-i18n-js" src="{{ asset('assets/js/wp-i18n.min.js') }}"></script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        //# sourceURL=wp-i18n-js-after
    </script>
    <script id="swv-js" src="{{ asset('assets/js/cf7-swv.js') }}"></script>
    <script id="contact-form-7-js-before">
        var wpcf7 = {
            "api": {
                "root": "https:\/\/dev.fcfm.sg\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        //# sourceURL=contact-form-7-js-before
    </script>
    <script id="contact-form-7-js" src="{{ asset('assets/js/cf7-index.js') }}"></script>
    <script id="elementor-webpack-runtime-js" src="{{ asset('assets/js/elementor-webpack-runtime.min.js') }}"></script>
    <script id="elementor-frontend-modules-js" src="{{ asset('assets/js/elementor-frontend-modules.min.js') }}"></script>
    <script id="jquery-ui-core-js" src="{{ asset('assets/js/jquery-ui-core.min.js') }}"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.32.2",
            "is_static": false,
            "experimentalFeatures": {
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "e_optimized_markup": true,
                "e_pro_free_trial_popup": true,
                "nested-elements": true,
                "home_screen": true,
                "global_classes_should_enforce_capabilities": true,
                "e_variables": true,
                "cloud-library": true,
                "e_opt_in_v4_page": true,
                "import-export-customization": true
            },
            "urls": {
                "assets": "https:\/\/dev.fcfm.sg\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/dev.fcfm.sg\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/dev.fcfm.sg\/wp-content\/uploads"
            },
            "nonces": {
                "floatingButtonsClickTracking": "efc6f503a1"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 1226,
                "title": "Fresh%20Cleaning%20Facilities%20Management",
                "excerpt": "",
                "featuredImage": false
            }
        };
        //# sourceURL=elementor-frontend-js-before
    </script>
    <script id="elementor-frontend-js" src="{{ asset('assets/js/elementor-frontend.min.js') }}"></script>
</body>

</html>
