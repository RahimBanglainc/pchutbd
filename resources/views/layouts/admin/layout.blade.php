<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'PCHUTBD') }}</title>


    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    {{-- toster  --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{route('admin/assets/libs/toastr/build/toastr.min.css')}}"> --}}



    @stack('css')


    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
     {{-- <link href="{{ asset('admin/assets/css/bootstrap-dark.min.css') }}"
 rel="stylesheet" type="text/css" />  --}}
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app.min.css') }}"  rel="stylesheet"
        type="text/css" />
    {{-- <link href="{{ asset('admin/assets/css/app-dark.min.css') }}"
     rel="stylesheet" type="text/css" />  --}}


</head>

<body data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">



            @include('layouts.admin.header')
            @include('layouts.admin.saidbar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div id="app">

                            @yield('main')

                        </div>


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->







            @include('layouts.admin.footer')



            <!-- JAVASCRIPT -->
            <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
            <script
            src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}">
            </script>
            <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}">
            </script>
            <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}">
            </script>
            <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
            {{-- toster  --}}
             <!-- toastr plugin -->
            {{-- <script src="{{ asset('admin/assets/libs/toastr/build/toastr.min.js') }}"></script>

            <!-- toastr init -->
            <script src="{{ asset('admin/assets/js/pages/toastr.init.js') }}"></script> --}}

            @stack('js')

            <script src="{{ asset('admin/assets/js/app.js') }}"></script>

            <!-- vue Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>
