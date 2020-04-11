<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Info
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Fatoş Doğan</title>
    <meta name="description" content="Fatos Dogan">
    <meta name="author" content="Fatos Dogan">
    <meta charset="UTF-8">

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
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" >

    @yield('styles')

</head>

<body>

@include('admin.app.navbar')

@yield('content')

<!-- JS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/libs/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/libs/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-90691859-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-90691859-1');
</script>


@stack('scripts')

</body>


</html>