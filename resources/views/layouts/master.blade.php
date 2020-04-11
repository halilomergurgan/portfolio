<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Info
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Fatoş Doğan</title>
    <meta name="description" content="Fatos Dogan">
    <meta name="author" content="Fatos Dogan">

    <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')

    <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600%7CMontserrat:400,700%7COpen+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

    <!-- ICON FONTS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('fonts/fonts.css') }}" rel="stylesheet" type="text/css" >
    <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/isotope.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/venobox.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/sinister.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/slimmenu.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/main-bg.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/main-responsive.css') }}" rel="stylesheet" type="text/css" >


    @yield('styles')
    <!-- LESS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!--
        <link rel="stylesheet/less" type="text/css" href="less/color.less">
        <link rel="stylesheet/less" type="text/css" href="less/fonts.less">
        <script src="less/less.min.js"></script> -->

    <style>
        .home-bg {
            background-image: url({{asset($background->path)}});
        }
    </style>


</head>

<body>


<!-- Preloader
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div id="preloader" class="signature-moritz">
    <div id="status"></div>
</div>
<!-- end : preloader -->

@include('app.mobile-nav')

@include('app.header')

@include('app.navbar')


<!-- MASTER CONTENT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section class="mastwrap signature-moritz">

    @yield('content')

    @include('app.footer')

</section>
<!-- end : mastwrap -->


<!-- End Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<!-- JS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script type="text/javascript" src="{{ URL::asset('js/libs/common.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/libs/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/custom/main.js') }}"></script>

@yield('scripts')

</body>


</html>