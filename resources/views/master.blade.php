<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- SB Admin 2 CSS -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layouts.sidebar') <!-- Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('layouts.topbar') <!-- Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content') <!-- Halaman Konten -->
                </div>
            </div>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>
