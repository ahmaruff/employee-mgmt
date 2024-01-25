<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal. Contact us if you want to remove it.

-->

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
    <meta name="description" content="Simple CRUD app for employee management">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="og:description" content="Simple CRUD app for employee management">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link type="text/css" href="/assets/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    {{-- <link type="text/css" href="/assets/vendor/notyf/notyf.min.css" rel="stylesheet"> --}}
    <link type="text/css" href="/assets/css/volt.css" rel="stylesheet">

</head>
<body>
    @include('home.layouts.header')

    @yield('content')

    @include('home.layouts.footer')

    <!-- Core -->
<script src="/assets/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

{{-- <script src="/assets/vendor/onscreen/dist/on-screen.umd.min.js"></script> --}}
{{-- <script src="/assets/vendor/nouislider/dist/nouislider.min.js"></script> --}}
<script src="/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
{{-- <script src="/assets/vendor/chartist/dist/chartist.min.js"></script> --}}
{{-- <script src="/assets/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script> --}}
{{-- <script src="/assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script> --}}
<script src="/assets/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script> --}}
{{-- <script src="/assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script> --}}
{{-- <script src="/assets/vendor/notyf/notyf.min.js"></script> --}}
{{-- <script src="/assets/vendor/simplebar/dist/simplebar.min.js"></script> --}}
<script src="/assets/js/volt.js"></script>

</body>
</html>
