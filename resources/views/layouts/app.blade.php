<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Exponential - Site dedicat pasionatilor de tehnologie si natura">
    @yield('meta-tags')
    <link rel="canonical" href="https://x-ia.ro/" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- <noscript>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    </noscript> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    @yield('styles')
    <link href="{{ asset('images/favicon.ico')}}" rel="icon" type="image/png">
    <script async src="{{ asset('js/helpers.js') }}"></script>
    <script src="{{ asset('js/lazysizes.min.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E5HNW2RH7E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-E5HNW2RH7E');
    </script>
</head>

<body class="has-navbar-fixed-top">

    <div id="app">

        @include('_includes.nav.main')

        @yield('content')
        <!-- <div id="fb-root"></div> -->

    </div>
    <!--/div app-->
    @include('cookieConsent::index')
    @include('_includes.footer.main')

    <!-- Scripts -->
    
    <!-- <script async crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script> -->
    @yield('scripts')

</body>

</html>