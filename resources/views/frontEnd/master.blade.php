<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    {{--<link rel="shortcut icon" type="image/icon" href="{{asset('/frontEndAssets/')}}/images/favicon.ico"/>--}}
    <!-- Font Awesome -->
    <link href="{{asset('/frontEndAssets/')}}/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('/frontEndAssets/')}}/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('/frontEndAssets/')}}/css/slick.css"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('/frontEndAssets/')}}/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/frontEndAssets/')}}/css/animate.css"/>
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="{{asset('/frontEndAssets/')}}/css/bootstrap-progressbar-3.3.4.css"/>
    <!-- Theme color -->
    <link id="switcher" href="{{asset('/frontEndAssets/')}}/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{asset('/frontEndAssets/')}}/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


</head>
<body>

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

@include('frontEnd.includes.header')


<!-- BEGIN MENU -->
@include('frontEnd.includes.menu')

<!-- END MENU -->

@yield('content')

<!-- Start subscribe us big Footer-->
@include('frontEnd.includes.bigFooter')
<!-- End subscribe us Big Footer-->

<!-- Start footer -->
@include('frontEnd.includes.smallFooter')

<!-- End footer -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="{{asset('/frontEndAssets/')}}/js/bootstrap.js"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="{{asset('/frontEndAssets/')}}/js/slick.js"></script>
<!-- mixit slider -->
<script type="text/javascript" src="{{asset('/frontEndAssets/')}}/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="{{asset('/frontEndAssets/')}}/js/jquery.fancybox.pack.js"></script>
<!-- counter -->
<script src="{{asset('/frontEndAssets/')}}/js/waypoints.js"></script>
<script src="{{asset('/frontEndAssets/')}}/js/jquery.counterup.js"></script>
<!-- Wow animation -->
<script type="text/javascript" src="{{asset('/frontEndAssets/')}}/js/wow.js"></script>
<!-- progress bar   -->
<script type="text/javascript" src="{{asset('/frontEndAssets/')}}/js/bootstrap-progressbar.js"></script>


<!-- Custom js -->
<script type="text/javascript" src="{{asset('/frontEndAssets/')}}/js/custom.js"></script>

</body>
</html>