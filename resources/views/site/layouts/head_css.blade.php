
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Jozoor">
<meta name="description" content="Joo - Niche Multi-Purpose HTML Template">
<meta name="keywords" content="creative, niche, responsive, html5, css3, multipurpose, all in one, html, template">

<title>mora soft company</title>

@if (App::getLocale() == 'ar')

    <link rel="stylesheet" href="{{ asset('front/arabic/css/vendor.min.css?v=1557447064956') }}">
    <link rel="stylesheet" href="{{ asset('front/arabic/css/styles.min.css?v=1557447064956') }}">
    <link rel="stylesheet" href="{{ asset('front/arabic/css/styles-rtl.min.css?v=1557447064956') }}">
    <link rel="stylesheet" href="{{ asset('front/arabic/css/custom.css?v=1557447064956') }}">
    <link rel="stylesheet" href="{{ asset('front/arabic/css/main-ar.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&v=1557446973926" rel="stylesheet">
    <link href="https://www.fontstatic.com/f=sky-bold,sky?v=1557446973926" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('front/images/favicons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('front/images/favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('front/images/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('front/images/favicons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL:: asset('front/images/favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('front/images/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('front/images/favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL:: asset('front/images/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('front/images/favicons/apple-touch-icon-180x180.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Joo Template">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('front/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('front/images/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('front/images/favicons/favicon.ico') }}">

    @yield('css')
    </head>
    <body class=" rtl active-pageloader corporate logistics header-sticky hide-on-scroll
                header-menu-with-icons header-transparent header-menu-border-bottom header-topbar topbar-background
                dark-color footer-widgets footer-background dark-color submenu-show-arrow-right menu-is-capitalized
                submenu-is-capitalized logo-text-is-capitalized page-index">
@else
    <link rel="stylesheet" href="{{ asset('front/english/css/vendor.min.css?v=1557446391092') }}">
    <link rel="stylesheet" href="{{ asset('front/english/css/styles.min.css?v=1557446391092') }}">
    <link rel="stylesheet" href="{{ asset('front/english/css/custom.css?v=1557446391092') }}">
    <link rel="stylesheet" href="{{ asset('front/english/css/main-en.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&v=1557446305971" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('front/images/favicons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('front/images/favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('front/images/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('front/images/favicons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL:: asset('front/images/favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('front/images/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('front/images/favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL:: asset('front/images/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('front/images/favicons/apple-touch-icon-180x180.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Joo Template">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('front/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('front/images/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('front/images/favicons/favicon.ico') }}">

    @yield('css')
    </head>
    <body class=" active-pageloader corporate logistics header-sticky hide-on-scroll
                header-menu-with-icons header-transparent header-menu-border-bottom header-topbar topbar-background
                dark-color footer-widgets footer-background dark-color submenu-show-arrow-right menu-is-capitalized
                submenu-is-capitalized logo-text-is-capitalized page-index">
@endif

{{-- <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('front/css/vendor.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('front/css/styles.css') }}"> --}}

{{-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&v=1557446305971" rel="stylesheet"> --}}
<!-- cdn icon fonts
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css?v=1557446305971" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css?v=1557446305971">
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css?v=1557446305971" rel="stylesheet">
    -->

