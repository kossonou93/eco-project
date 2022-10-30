@include('parts/head')

<body>

	<!-- Start Preloader Area -->
	@include('parts/preloader')
	<!-- End Preloader Area -->
	
	<!-- Start Navbar Area -->
	@include('parts/menu')
	<!-- End Navbar Area -->
	
	<!-- Start Page Title Area -->
	<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>@lang('public.faireDon')</h2>
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li>@lang('public.faireDon')</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->
	
	<!-- Start Contact Section -->
	<div class="contact-section bg-grey section-padding">
		<div class="container">
			<div class="section-title">
				<h2>@lang('public.renseignezFormulaire')</h2>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact-form">
						<p class="form-message"></p><br />
						<form id="contact-form" class="contact-form form" action="{{ route('dons.store') }}" method="POST">
							@csrf
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control" required placeholder="@lang('public.votreNomComplet')">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" required placeholder="@lang('public.votreMail')">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="text" name="phone" id="phone" required class="form-control" placeholder="@lang('public.votrePhone')">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="text" name="sujet" id="subject" class="form-control" required placeholder="@lang('public.sujet')">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<select name="categorie_id" name="type" class="form-control input">
											<option>@lang('public.choixDon')</option>
											<option value='Nature'>@lang('public.sujet')</option>
											<option value='Argent'>@lang('public.sujet')</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="message" cols="30" rows="6" required placeholder="@lang('public.votreMessage')"></textarea>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<button type="submit" class="default-btn submit-btn">@lang('public.envoyez') <span></span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact Section -->
	
    <!-- Map Section End -->
	
	@include('parts/footer')
	
</body>
@include('parts/locale')
<!-- Mirrored from cutesolution.com/html/Techvio/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 18:10:07 GMT -->
</html>