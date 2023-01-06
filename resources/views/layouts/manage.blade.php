<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Exponential - Admin Control Panel</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')

    <!-- Favicon -->
    <link href="{{ asset('images/favicon.ico')}}" rel="icon" type="image/png">

</head>

<body>

    @include('_includes.nav.main')

    @include('_includes.nav.manage')

    <div class="management-area" id="app">

        @yield('content')

    </div>
    <!--div app-->


</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/manage.js') }}"></script>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<script async src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
@yield('scripts')

</html>
