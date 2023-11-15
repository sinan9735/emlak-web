<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designarc.biz/demos/hilltown/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 07:41:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('assets/img/logo-.png')}}" type="image/x-icon"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Emlakcım</title>

    <!-- Icon css link -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/stroke-icon/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/flat-icon/flaticon.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{asset('assets/vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/animate-css/animate.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('assets/vendors/magnify-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/bootstrap-selector/bootstrap-select.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/lightbox/simpleLightbox.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
    </style>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
@include('admingiris.partial.header')
@yield('content')
@include('admingiris.partial.footer')



<!--================End Footer Area =================-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('assets/js/jquery-2.2.4.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Rev slider js -->
<script src="{{asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>

<script src="{{asset('assets/vendors/magnify-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendors/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendors/counterup/waypoints.min.js')}}"></script>
<script src="{{asset('assets/vendors/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-selector/bootstrap-select.js')}}"></script>
<!--        <script src="vendors/lightbox/js/lightbox.min.js"></script>-->
<script src="{{asset('assets/vendors/lightbox/simpleLightbox.min.js')}}"></script>

<!-- instafeed-->
<script type="{{asset('assets/text/javascript')}}" src="vendors/instafeed/instafeed.min.js"></script>
<script type="{{asset('assets/text/javascript')}}" src="vendors/instafeed/script.js"></script>

<script src="{{asset('assets/js/theme.js')}}"></script>


<!-- register page -->
<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
@stack('scripts')
</body>

<!-- Mirrored from designarc.biz/demos/hilltown/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 07:43:23 GMT -->
</html>
