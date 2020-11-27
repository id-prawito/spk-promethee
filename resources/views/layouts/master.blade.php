<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SPK - Promethee • @yield('title')</title>
    <!-- Favicons -->
    <link href="{{ asset('img/indo.png') }}" rel="icon">

    <!-- Styles Css Start -->
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    @stack('page-styles')

    <!-- Page Specific Css File -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/components.css')}}">
    <!-- Styles Css End -->

    <!-- Scripts Js Start -->
    <script src="{{asset('modules/jquery.min.js')}}"></script>
    <script src="{{asset('modules/popper.js')}}"></script>
    <script src="{{asset('modules/tooltip.js')}}"></script>
    <script src="{{asset('modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('modules/moment.min.js')}}"></script>
    <script src="{{asset('js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    @stack('page-scripts')

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-94034622-3');
    </script>
    @stack('after-scripts')
    <!-- Scripts Js End -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <!-- Navbar Start -->
            @include('layouts.component.navbar')
            <!-- Navbar End -->

            <!-- Sidebar Start-->
            @include('layouts.component.sidebar')
            <!-- Sidebar End-->

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('header')
                    @yield('content')
                </section>
                @stack('tambahan')
                @stack('tambahan1')
            </div>
            <!-- Main Content End -->

            <!-- Footer Start -->
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020
                </div>
                <div class="footer-right">
                </div>
            </footer>
            <!-- Footer Start -->
        </div>
    </div>
</body>

</html>