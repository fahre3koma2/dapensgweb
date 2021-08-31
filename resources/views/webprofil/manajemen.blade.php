@extends('webprofil.main')

@section('title')
    Dapen SG - Manajemen
@endsection

@section('header')
    <section class="page-title" style="background-image:url({{ url('webprofil/images/background/1.jpg')}})">
        <div class="auto-container">
			<h1>Manajemen</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{url('/')}}">home</a></li>
				<li>Manajemen</li>
			</ul>
        </div>
    </section>
@endsection

@section('contents')
    <section class="services-detail-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="image">
					<img src="{{ url('webprofil/images/resource/service6.jpg')}}" alt="" />
				</div>
				<div class="lower-content">
					<h2>Manajemen Dana Pensiun Semen Gresik</h2>
					{{--  <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae itaque earum ruis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>  --}}
					{{--  <div class="row clearfix">
						<div class="column col-lg-3 col-md-6 col-sm-6">
							<ul class="list-style-one">
								<li>Velit esse quam nihilumi</li>
								<li>Qui dolorem eum fugiat</li>
							</ul>
						</div>
						<div class="column col-lg-3 col-md-6 col-sm-6">
							<ul class="list-style-one">
								<li>Nostrum exercitationem</li>
								<li>Reprehenderit qui nulla</li>
							</ul>
						</div>
						<div class="column col-lg-3 col-md-6 col-sm-6">
							<ul class="list-style-one">
								<li>Tempora incidunt utao</li>
								<li>Nihil molestiae conseua</li>
							</ul>
						</div>
						<div class="column col-lg-3 col-md-6 col-sm-6">
							<ul class="list-style-one">
								<li>Aspernatur aut odit aut</li>
								<li>Ratione voluptatem sea</li>
							</ul>
						</div>
					</div>  --}}
					<!-- Consult Form -->

				</div>
			</div>
		</div>
	</section>
	<!-- End Services Detail Section -->

@endsection
