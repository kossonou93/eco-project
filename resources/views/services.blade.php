<!doctype html>
<html lang="zxx">


<!-- Mirrored from cutesolution.com/html/Techvio/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 18:09:56 GMT -->
@include('parts/head')

<body>

	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="loader">
			<div class="shadow"></div>
			<div class="box"></div>
		</div>
	</div>
	<!-- End Preloader Area -->
	
	<!-- Start Navbar Area -->
	@include('parts/menu')
	<!-- End Navbar Area -->
	
	<!-- Start Page Title Area -->
	<div class="page-title-area item-bg2">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Nos Services</h2>
						<ul>
							<li><a href="{{route('home')}}">Accueil</a></li>
							<li><a href="{{route('services')}}"></a>Nos Services</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->
	
	<!-- Start Services Section -->
	<section class="services-section bg-grey section-padding">
		<div class="container">
            <div class="row">
                <div class="col-sm-12">
					<div class="section-title">
						<h2>Nos Services</h2>
					</div>
                </div>
            </div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<!--<i class="flaticon-project-management"></i>-->
							<img src="img/galerie/pese.jpeg" alt="image">
						</div>
						<h3>Fourniture des noix de cajou brutes</h3>
						<p>Nous fournissons des noix de cajou brutes </p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Lire Plus</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<!--<i class="flaticon-programming"></i>-->
							<img src="img/galerie/amande.jpg" alt="image">
						</div>
						<h3>Fourniture des amandes de cajou BIO</h3>
						<p>Nous fournissons des amandes de cajou BIO </p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Lire Plus</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<!--<i class="flaticon-cpu-1"></i>-->
							<img src="img/galerie/individuelle.jpeg" alt="image">
						</div>
						<h3>FAIRTRADE</h3>
						<p>Nous faisons du FAIRTRADE</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Lire Plus</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section -->
	
@include('parts/footer')
	
</body>
@include('parts/locale')

<!-- Mirrored from cutesolution.com/html/Techvio/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 18:09:56 GMT -->
</html>