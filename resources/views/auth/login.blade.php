<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Daily UI - Day 1 Sign In</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{ url('logn/css/animate.css') }}">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="{{ url('logn/css/style.css') }}">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Dana Pensiun <span> Semen Gresik</span></span></h1>
		</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="login-box animated fadeInUp">
                <div class="box-header">
                    <h2>Log In</h2>
                </div>
                <label for="username">Username</label>
                <br/>
                <input type="email" class="form-control" name="email" :value="old('email')" placeholder="Email Address" required="required">
                <br/>
                <label for="password">Password</label>
                <br/>
                <input type="password" class="form-control" name="password" :value="old('password')" placeholder="Password" required="required">
                <br/>
                <button type="submit">Sign In</button>
            </div>
        </form>
	</div>
</body>

{{--  <script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>  --}}

</html>
