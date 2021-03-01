<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>

    <link rel="icon" href="{{asset('public/images/icon.png')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/vendor/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <!-- Your custom styles (optional) -->
    <link href="{{asset('public/vendor/css/style.css')}}" rel="stylesheet">

    <script src="{{asset('public/vendor/js/scrollreveal.min.js')}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159576334-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-159576334-1');
    </script>

    <style>
        .dropdown:hover > .dropdown-menu{
            display: block;
        }


    </style>

    @yield('captcha')
</head>

<body>

<!-- Start your project here-->
@include('layouts.header')

@yield('content')

@include('layouts.footer')

<!-- Start your project here-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{asset('public/vendor/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('public/vendor/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('public/vendor/js/bootstrap.min.js')}}"></script>

<script src="{{asset('public/vendor/js/smooth-scroll.js')}}"></script>

<script>
    var scroll = new SmoothScroll('a[href*="#"]');
</script>
<script>

    ScrollReveal().reveal('.maincontent', { duration: 3000 });

    ScrollReveal().reveal('.anim-bsfleft', { duration: 5000,
        distance: '60px',
        origin:'left',
        mobile: false
    });

    ScrollReveal().reveal('.anim-bsfright', { duration: 5000,
        distance: '60px',
        origin:'right',
        mobile: false
    });

    ScrollReveal().reveal('.animsatinalma2', { duration: 5000,
        distance: '0px',
        opacity:0,
        mobile: false

    });



    $(".pop").on("click", function() {
        $('#imagepreview').attr('src', $(this).find('img').attr('src')); // here asign the image to the modal when the user click the enlarge link
        $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
    });



</script>

@stack('scripts')



</body>

</html>
