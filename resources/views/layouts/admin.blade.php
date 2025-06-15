<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        @include('layouts.sidebar') {{-- sidebar SB Admin 2 --}}

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.topbar') {{-- navbar SB Admin 2 --}}

                <div class="container-fluid">
                    @yield('content') {{-- konten halaman --}}
                </div>
            </div>
        </div>
    </div>

    {{-- script bawaan SB Admin 2 --}}
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>
