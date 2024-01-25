<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->

    <title>Employee Mgmt</title>
    <meta name="title" content="Employee Mgmt">
    <meta property="og:title" content="Employee Mgmt">

    @isset($title)
    <title>{{ $title }}</title>
    <meta name="title" content="{{$title}}">
    <meta property="og:title" content="{{$title}}">
    @endisset
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ahmad Ma'ruf">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="og:description" content="CRUD App">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="/assets/vendor/sweetalert2/dist/sweetalert2.min.css" type="text/css">

    <!-- Notyf -->
    <link rel="stylesheet" href="/assets/vendor/notyf/notyf.min.css" type="text/css">

    <!-- Volt CSS -->
    <link rel="stylesheet" href="/assets/css/volt.css" type="text/css">
</head>
<body>
    <main>
        @include('admin.layout.nav')
        <main class="content">
            @include('admin.layout.header')
            <div class="py-4">
                @yield('content')
            </div>
            @include('admin.layout.footer')
        </main>
    </main>

<!-- Core -->
<script src="/assets/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

{{-- <script src="/assets/vendor/onscreen/dist/on-screen.umd.min.js"></script> --}}
{{-- <script src="/assets/vendor/nouislider/distribute/nouislider.min.js"></script> --}}
<script src="/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
{{-- <script src="/assets/vendor/chartist/dist/chartist.min.js"></script> --}}
{{-- <script src="/assets/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script> --}}
<script src="/assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
<script src="/assets/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script> --}}
<script src="/assets/vendor/notyf/notyf.min.js"></script>
{{-- <script src="/assets/vendor/simplebar/dist/simplebar.min.js"></script> --}}
<script src="/assets/js/volt.js"></script>
</body>
</html>
