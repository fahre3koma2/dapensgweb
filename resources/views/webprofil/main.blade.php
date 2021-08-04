<!DOCTYPE html>
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
<script src="{{ url('webprofil/js/nav-tool.js') }}"></script>
<script src="{{ url('webprofil/js/jquery-ui.js') }}"></script>
<script src="{{ url('webprofil/js/script.js') }}"></script>

</body>
</html>
