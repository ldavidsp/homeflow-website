<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Homeflow') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
    <script src="{{ asset('assets/js/homepage.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="homeflow-app">
    <nav class="navbar navbar-expand-md navbar-light fixed-top homeflow-navbar-subdomain">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <a class="navbar-brand" href="{{ 'http://'. env('MAIN_DOMAIN') }}">
                        <img src="/assets/img/logo/hf_logo_blue.png" alt="Homeflow" width="160"/>
                    </a>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4 homeflow-content" id="homeflow-content">
        @yield('content')
    </main>
</div>
</body>
</html>
