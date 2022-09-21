<!doctype html>
<html lang="zxx">
	
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
	
	<!-- Start Page Title Area -->
	<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Nos Réalisations</h2>
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li>Nos Réalisations</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->
	
	<!-- Start Project Section -->
    <section class="project-area section-padding">
        <div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="section-title">
						<h2>Nos Réalisations</h2>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="project-container">
                    <!-- project-item -->
                    <div class="col-lg-6 col-md-6 project-grid-item all application photography">
                        <div class="project-item">
							<img src="img/portfolio/portfolio-1.jpg" alt="image">
                            <div class="project-content-overlay">
								<p style="text-align: center">App Store | Social Media</p>
								<h3><a href="#"></a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- project-item -->
                    <div class="col-lg-6 col-md-6 project-grid-item all application photography">
                        <div class="project-item">
							<img src="img/portfolio/portfolio-2.jpg" alt="image">
                            <div class="project-content-overlay">
								<p style="text-align: center">App Store | Social Media</p>
								<h3><a href="#"></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 project-grid-item all application photography">
                        <div class="project-item">
							<img src="img/portfolio/portfolio-4.jpg" alt="image">
                            <div class="project-content-overlay">
								<p style="text-align: center">App Store | Social Media</p>
								<h3><a href="#"></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 project-grid-item all application photography">
                        <div class="project-item">
							<img src="img/portfolio/portfolio-5.jpg" alt="image">
                            <div class="project-content-overlay">
								<p style="text-align: center">App Store | Social Media</p>
								<h3><a href="#"></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project Section -->
	
	@include('parts/footer')
	
</body>
@include('parts/locale')

<!-- Mirrored from cutesolution.com/html/Techvio/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 18:09:56 GMT -->
</html>