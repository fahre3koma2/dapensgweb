@extends('webprofil.main')

@section('title')
    Dapen SG - Manajemen
@endsection

@section('header')
    <section class="page-title" style="background-image:url({{ url('webprofil/images/background/1.jpg')}})">
        <div class="auto-container">
			<h1>Hubungi Kami</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{url('/')}}">home</a></li>
				<li>Hubungi Kami</li>
			</ul>
        </div>
    </section>
@endsection

@section('contents')
    <section class="map-section">
		<div class="auto-container">
			<div class="inner-container">
				<!-- Map Boxed -->
				<div class="map-boxed">
					<!-- Map Outer -->
					<div class="map-outer">
						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen="" width="600" height="450" frameborder="0" style="border:0"></iframe> -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.614091070929!2d112.651975!3d-7.17053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd80047633bdffd%3A0x25bd39dccd3b5da7!2sJl.+Raden+Ajeng+Kartini+No.23%2C+Kec.+Gresik%2C+Kab.+Gresik%2C+Jawa+Timur+61122!5e0!3m2!1sen!2sid!4v1432344696188" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Map Section -->

	<!-- Contact Form Section -->
	<section class="contact-form-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Send us a message</h2>
			</div>
			<!-- Contact Form -->
			<div class="contact-form">

				<!--Contact Form-->
				<form method="post" action="sendemail.php" id="contact-form">
					<div class="row clearfix">

						<div class="col-lg-4 col-md-6 col-sm-12 form-group">
							<input type="text" name="username" placeholder="Name" required>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-12 form-group">
							<input type="email" name="email" placeholder="Email" required>
						</div>

						<div class="col-lg-4 col-md-12 col-sm-12 form-group">
							<input type="text" name="phone" placeholder="Phone" required>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 form-group">
							<textarea name="message" placeholder="Message"></textarea>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
							<button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Submit now <i class="arrow flaticon-right"></i></span></button>
						</div>

					</div>
				</form>

				<!--End Contact Form -->
			</div>
		</div>
	</section>
	<!-- End Contact Form Section -->

	<!-- Contact Info Section -->
	<section class="contact-info-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Our Infromation</h2>
			</div>
			<div class="row clearfix">

				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon flaticon-location-pin"></div>
						<h5>Location</h5>
						<div class="text">Jl. Kapten Dulasim Gg. 1 No.23, Injen Timur, Gapurosukolilo, <br> Kabupaten Gresik, Jawa Timur 61122</div>
					</div>
				</div>

				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon flaticon-smartphone"></div>
						<h5>Phone</h5>
						<ul class="info-list">
							<li><a href="tel:+623139844924">(031)-39844924</a></li>
						</ul>
					</div>
				</div>

				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon flaticon-email-3"></div>
						<h5>Email</h5>
						<ul class="info-list">
							<li><a href="mailto:Counsellaw@gmail.com">dapensg@gmail.com</a></li>
							<li><a href="mailto:info@counsellaw.com">info@dapensg.com</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Fluid Section Two -->

@endsection
