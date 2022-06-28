<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!--------SEO------->
                @php
                     $seos = App\Models\Seo::getSeo();
                     $institute = App\Models\InstituteDetails::getInstituteDetails();
                @endphp
                
                <title>{{$seos->title}}</title>
                <meta name="title" content="{{$seos->title ?? ''}}">
                <meta name="description" content="{{$seos->discription ?? ''}}">
                <meta name="keywords" content="{{$seos->keyword ?? ''}}">
                <meta name="robots" content="index, follow">
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <meta name="language" content="English">
                <meta name="revisit-after" content="1 days">
                <meta name="author" content="{{$institute->last()->name ?? ''}} family">


                <!-- Open Graph / Facebook -->
                <meta property="og:type" content="website">
                <meta property="og:url" content="{{route('home')}}">
                <meta property="og:title" content="{{$seos->title ?? ''}}">
                <meta property="og:description" content="{{$seos->discription ?? ''}}">
                <meta property="og:image" content="{{$seos->image ?? ''}}">

                <!-- Twitter -->
                <meta property="twitter:card" content="summary_large_image">
                <meta property="twitter:url" content="{{route('home')}}">
                <meta property="twitter:title" content="{{$seos->title ?? ''}}">
                <meta property="twitter:description" content="{{$seos->discription ?? ''}}">
                <meta property="twitter:image" content="{{$seos->image ?? ''}}">

        <!--------SEO ENDS-->

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>CCMA Collage</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/ccma/img/favicon.png">

        <link rel="stylesheet" href="/ccma/css/bootstrap.min.css">
        <link rel="stylesheet" href="/ccma/css/animate.min.css">
        <link rel="stylesheet" href="/ccma/css/meanmenu.css">
        <link rel="stylesheet" href="/ccma/css/magnific-popup.css">
        <link rel="stylesheet" href="/ccma/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/ccma/css/font-awesome.min.css">
        <link rel="stylesheet" href="/ccma/css/et-line-icon.css">
        <link rel="stylesheet" href="/ccma/css/reset.css">
        <link rel="stylesheet" href="/ccma/css/ionicons.min.css">
        <link rel="stylesheet" href="/ccma/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="/ccma/css/style.css">
        <link rel="stylesheet" href="/ccma/css/responsive.css">
        <script src="/ccma/js/vendor/modernizr-3.11.2.min.js"></script>
         <link rel="stylesheet" href='https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css'>
         <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <header class="top">
            @include("ccma.header_top")
            @include("ccma.navbar")
        </header>
<!----------------------contents starts--------------------->
                  @yield("contents")
<!----------------------contents end------------------------->
<!---------------footer start------------------------------->
                     @include("ccma.footer")
<!----------------footer end--------------------------------->
        <script src="/ccma/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="/ccma/js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <script src="/ccma/js/bootstrap.bundle.min.js"></script>
        <script src="/ccma/js/jquery.meanmenu.js"></script>
        <script src="/ccma/js/jquery.magnific-popup.js"></script>
        <script src="/ccma/js/ajax-mail.js"></script>
        <script src="/ccma/js/owl.carousel.min.js"></script>
        <script src="/ccma/js/jquery.mb.YTPlayer.js"></script>
        <script src="/ccma/js/jquery.nicescroll.min.js"></script>
        <script src="/ccma/js/plugins.js"></script>
        <script src="/ccma/js/main.js"></script>
    </body>
</html>


        