<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>@yield('title', 'Hidrogüç Pres')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Hidrogüç Pres" />
    <meta name="robots" content="index, follow" />

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('description', 'Hidrogüç Pres - Solutions de presses hydrauliques et industrielles.')" />
    <meta name="keywords" content="@yield('keywords', 'presse hydraulique, presse industrielle, solutions industrielles, Hidrogüç Pres')" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Hidrogüç Pres')" />
    <meta property="og:description" content="@yield('description', 'Hidrogüç Pres - Solutions de presses hydrauliques et industrielles.')" />
    {{-- <meta property="og:image" content="@yield('og_image', asset('site/assets/images/logo/logo.png'))" /> --}}

    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('site/assets/images/logo/H.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site/assets/images/logo/H.png') }}" />

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="{{ asset('site/assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/style.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/skin/skin-2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/templete.css') }}">
    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
    </style>

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/plugins/revolution/revolution/css/revolution.min.css') }}">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>


</head>
