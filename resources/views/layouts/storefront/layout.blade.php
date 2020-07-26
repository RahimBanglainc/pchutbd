<!DOCTYPE html>
<!-- saved from url=(0024)# -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'PCHUTBD') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}


    <meta name="description" content="Buy brand tablets, tour packages, air ticketing, electronics, cameras, mobiles, real estate, industrial products, IPS, furniture and many more from genuine stall owners of Bangladesh.">
    <meta name="keywords" content="">

    <meta property="og:image" content="#asset/static-image/bdstall-logo.jpg">
    <link href="{{asset('storefront/assets/css/r-com-min-v56.css')}}" rel="stylesheet" type="text/css">



    <link rel="icon" type="image/png" href="#asset/static-image/favicon-bdstall.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        // ajax call
        function getHTTPObject() {

            var xmlhttp;

            if (!xmlhttp) {

                if (window.XMLHttpRequest) {
                    try {
                        xmlhttp = new XMLHttpRequest();
                    } catch (e) {
                        xmlhttp = false;
                    }
                } else if (window.ActiveXObject) {
                    try {
                        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e) {
                        try {
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e) {
                            xmlhttp = false;
                        }
                    }
                }
            }
            return xmlhttp;
        }

    </script>

    <style></style>
</head>


<body data-gr-c-s-loaded="true">

    <div>



        @include('layouts.storefront.header')





        @yield('main')





        @include('layouts.storefront.footer')


    </div>

<!-- vue Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
