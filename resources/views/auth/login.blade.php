<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Dana Pensiun Semen Gresik | Login Page</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ url('logn/css/bootstrap.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ url('logn/css/fontawesome-all.min.css') }}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ url('logn/font/flaticon.css') }}">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ url('logn/style.css') }}">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
	<section class="fxt-template-animation fxt-template-layout17" data-bg-image="{{ url('logn/img/figure/bg17.jpg') }}">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-6 col-lg-7 col-sm-12 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
							<a href="login-17.html" class="fxt-logo"><img src="{{ url('logn/img/logo17.png') }}" alt="Logo"></a>
						</div>
						<div class="fxt-form">
							<form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="email" class="form-control" name="email" :value="old('email')" placeholder="Email Address" required="required">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input type="password" class="form-control" name="password" :value="old('password')" placeholder="Password" required="required">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-4">
										<button type="submit" class="fxt-btn-fill">Log in</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- jquery-->
	<script src="{{ url('logn/js/jquery-3.5.0.min.js') }}"></script>
	<!-- Popper js -->
	<script src="{{ url('logn/js/popper.min.js') }}"></script>
	<!-- Bootstrap js -->
	<script src="{{ url('logn/js/bootstrap.min.js') }}"></script>
	<!-- Imagesloaded js -->
	<script src="{{ url('logn/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- Validator js -->
	<script src="{{ url('logn/js/validator.min.js') }}"></script>
	<!-- Custom Js -->
	<script src="{{ url('logn/js/main.js') }}"></script>

</body>

</html>
