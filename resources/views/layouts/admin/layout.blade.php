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

    <!-- jquery.vectormap css -->
    <link
        href="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link
        href="{{ asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link
        href="{{ asset('admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style"
        rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('admin/assets/css/bootstrap-dark.min.css') }}"
    id="bootstrap-style" rel="stylesheet" type="text/css" /> --}}
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet"
        type="text/css" />
    {{-- <link href="{{ asset('admin/assets/css/app-dark.min.css') }}"
    id="app-style" rel="stylesheet" type="text/css" /> --}}

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

            <!-- apexcharts -->
            <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}">
            </script>

            <!-- jquery.vectormap map -->
            <script
                src="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
            </script>
            <script
                src="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}">
            </script>

            <!-- Required datatable js -->
            <script
                src="{{ asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}">
            </script>
            <script
                src="{{ asset('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}">
            </script>

            <!-- Responsive examples -->
            <script
                src="{{ asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
            </script>
            <script
                src="{{ asset('admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
            </script>

            <script src="{{ asset('admin/assets/js/pages/dashboard.init.js') }}"></script>

            <script src="{{ asset('admin/assets/js/app.js') }}"></script>

            <!-- vue Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>
