{{--  <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dana Pensiun Semen Gresik</title>
<!-- Stylesheets -->
<link href="{{ url('webprofil/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ url('webprofil/css/style.css') }}" rel="stylesheet">
<link href="{{ url('webprofil/css/responsive.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Bellefair&family=Open+Sans:wght@300;400;700;800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ url('webprofil/js/respond.js') }}"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

 	<!-- Main Header-->
    @include('webprofil.menu')

    <!-- End Main Header -->

	<!-- Page Title -->
    @yield('header')
    <!-- End Page Title -->

	<!-- Case Section -->
	@yield('contents')
	<!-- End CTA Section -->

	<!-- Main Footer -->
    @include('webprofil.footer')

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{ url('webprofil/js/jquery.js') }}"></script>
<script src="{{ url('webprofil/js/popper.min.js') }}"></script>
<script src="{{ url('webprofil/js/bootstrap.min.js') }}"></script>
<script src="{{ url('webprofil/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ url('webprofil/js/jquery.fancybox.js') }}"></script>
<script src="{{ url('webprofil/js/appear.js') }}"></script>
<script src="{{ url('webprofil/js/parallax.min.js') }}"></script>
<script src="{{ url('webprofil/js/tilt.jquery.min.js') }}"></script>
<script src="{{ url('webprofil/js/jquery.paroller.min.js') }}"></script>
<script src="{{ url('webprofil/js/owl.js') }}"></script>
<script src="{{ url('webprofil/js/wow.js') }}"></script>
<script src="{{ url('webprofil/js/validate.js') }}"></script>
<script src="{{ url('webprofil/js/nav-tool.js') }}"></script>
<script src="{{ url('webprofil/js/jquery-ui.js') }}"></script>
<script src="{{ url('webprofil/js/script.js') }}"></script>

</body>
</html>  --}}


<!doctype html>
<html class="no-js" lang="ru">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Dana Pensiun Semen Gresik</title>
      <meta name="description" content="">
      <!---meta name="viewport" content="width=device-width, initial-scale=1"---->
      <link rel="manifest" href="site.webmanifest">
      <link rel="icon" href="favicon.png">
      <link rel="apple-touch-icon" href="icons/icon.png">

      <!-- Place favicon.ico in the root directory -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,500,600" rel="stylesheet">
      <link rel="stylesheet" href="{{ url('webprof/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/icons/icomoon.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/icons/fontawesome-all.min.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/css/plugins.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/css/main.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/css/styles.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/dist/css/swiper.min.css')}}">
   </head>
   <body>
      <!-- Page Content START -->
      <div class="page-content">
         <!-- Main Nav START -->


         <nav id="main-nav" class="main-nav fixed">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="nav-header d-flex justify-content-between align-items-center">
                       <a href="{{url('/')}}" class="logo" title="LOGO">
                        <img class="logo-img" src="{{ url('webprof/img/logo.png')}}" alt="LOGO">
                        <img class="alt-logo-img" src="{{ url('webprof/img/logo-alt.png')}}" alt="LOGO">
                        </a>
                     </div>
                     <div class="nav-wrap">
                         @include('webprofil.menu')
                        <div class="riglt-floats-xs">
                           <a href="#" class="btn-login"><span class="ic-sx21"></span> Halo, User</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
         <!-- Main Nav END -->
         <!-- Home Section START -->
         <span class="no-intro"></span>
         @yield('contents')
         <!-- Footer START -->
         @include('webprofil.footer')
         <!-- Footer END -->
      </div>
      <!-- Page Content END -->
      <script src="{{ url('webprof/dist/js/swiper.min.js')}}"></script>
      <!-- Initialize Swiper -->
      <script>
         var swiper = new Swiper('.swiper-container', {
           spaceBetween: 10,
           hashNavigation: {
             watchState: true,
           },
           pagination: {
             el: '.swiper-pagination',
             clickable: true,
           },
           navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev',
           },
           loop: true,
                autoplay: {
                delay: 3000,
                disableOnInteraction: true,
            },
         });
      </script>
      <script src="{{ url('webprof/js/jquery.min.js')}}"></script>
      <script src="{{ url('webprof/js/circle-progress.js')}}"></script>
      <script src="{{ url('webprof/js/examples.js')}}"></script>
      <script src="{{ url('webprof/js/vendor/modernizr-3.5.0.min.js')}}"></script>
      <script src="{{ url('webprof/js/vendor/jquery-3.2.1.min.js')}}"></script>
      <script src="{{ url('webprof/js/plugins.js')}}"></script>
      <script src="{{ url('webprof/js/main.js')}}"></script>

      <script src="{{ url('webprof/faq/js/jquery-2.1.1.js')}}"></script>
      <script src="{{ url('webprof/faq/js/jquery.mobile.custom.min.js')}}"></script>
      <script src="{{ url('webprof/faq/js/main.js')}}"></script> <!-- Resource jQuery -->
   </body>
</html>

