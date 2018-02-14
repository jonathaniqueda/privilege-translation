<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>{{ env('APP_NAME') }}</title>

    <!-- main styling file  -->
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/typo3.css') }}">
    <link rel="icon" href="{{ asset('images/fav.png') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@include('layout.preloader')

<div class="wrapper">
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
</div>

<!-- jQuery Files -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!--to view items on reach-->
<script src="{{ asset('js/jquery.appear.js') }}"></script>

<!--Swiper slider-->
<script src="{{ asset('js/swiper.jquery.min.js') }}"></script>

<!--Owl slider-->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<!--number counters-->
<script src="{{ asset('js/jquery-countTo.js') }}"></script>

<!--equalize the same heights of block-->
<script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>

<!--for parallax bgs-->
<script src="{{ asset('js/parallaxie.js') }}"></script>

<!--for CountDown Timer-->
<script src="{{ asset('js/dscountdown.min.js') }}"></script>

<!--Open popup fancybox on images-->
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>

<!--Portfolio galleries-->
<script src="{{ asset('js/jquery.cubeportfolio.min.js') }}"></script>

<!--Progressbar s in circle forms-->
<script src="{{ asset('js/circle-progress.min.js') }}"></script>

<!--scrollbar on blocks-->
<script src="{{ asset('js/simplebar.js') }}"></script>

<!--Video Pops support for youtube, viemo etc-->
<script src="{{ asset('js/viedobox_video.js') }}"></script>

<!--youtube background video-->
<script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>

<!-- Type It -->
<script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script>

<!--Revolution SLider-->
<script src="{{ asset('js/revolution/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('js/revolution/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('js/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('js/revolution/extensions/revolution.extension.video.min.js') }}"></script>


<!--Synx scripts-->
<script src="{{ asset('js/functions.js') }}"></script>

<!--Google map API-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
<script src="{{ asset('js/map.js') }}"></script>

</body>
</html>