<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Sistem Pendukung Keputusan Penentuan Lokasi Embung" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SPK - Promethee • @yield('title')</title>
    <!-- Favicons -->
    <link href="{{ asset('img/indo.png') }}" rel="icon">
    <!-- Kustom Styles CSS -->
    <link rel="stylesheet" href="{{asset('modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('modules/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/iofrm-theme4.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .field-icon {
            float: right;
            margin-top: -39.8px;
            margin-left: -25px;
            padding-right: 26.8px;
            position: relative;
            z-index: 2;
        }
    </style>
</head>

<body>
    <div id="app" class="form-body">
        <div class="website-logo">
            <a href="{{ url('/') }}">
                <div class="logo">
                    <img width="100%" height="auto" class="logo-size" src="{{ asset('img/promethee-logo.png') }}" alt="Logo Promethee">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img width="100%" height="auto" src="{{ asset('images/login-illus.png') }}" alt="">
                </div>
            </div>
            @yield('content')
        </div>
    </div>
    <script>
        "use strict"
        $(window).on("load", function() {
            $('.btn-forget').on('click', function(e) {
                e.preventDefault();
                $('.form-items', '.form-content').addClass('hide-it');
                $('.form-sent', '.form-content').addClass('show-it');
            });
            $('.btn-tab-next').on('click', function(e) {
                e.preventDefault();
                $('.nav-tabs .nav-item > .active').parent().next('li').find('a').trigger('click');
            });
        });
    </script>
    <!-- Kustom Styles JS -->
    <script src="{{asset('modules/jquery.min.js')}}"></script>
    <script src="{{asset('modules/popper.js')}}"></script>
    <script src="{{asset('modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <script>
        $(".toggle-password-1").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
</body>

</html>