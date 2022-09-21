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
						<h2>Activités</h2>
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li>Activités</li>
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
						<h2>Nos Activités</h2>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="project-list">
                        <ul class="nav" id="project-flters">
                            <li class="filter filter-active" data-filter=".all">all</li>
                            <!--<li class="filter" data-filter=".webdesign">web design</li>
                            <li class="filter" data-filter=".photography">photography</li>-->
                            <li class="filter" data-filter=".application">Actions sociales</li>
                            <li class="filter" data-filter=".branding">Formations des coopératives</li>
                        </ul>
                    </div>
                </div>
                <div class="project-container">
                    <!-- project-item -->
                    <div class="col-lg-6 col-md-6 project-grid-item application">
                        <div class="project-item">
							<img src="img/galerie/cajou2.jpg" style="height: 400px" alt="image">
                            <div class="project-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-projects.html">Creative Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- project-item -->
                    <div class="col-lg-6 col-md-6 project-grid-item application">
                        <div class="project-item">
							<img src="img/galerie/cajou3.jpg" style="height: 400px" alt="image">
                            <div class="project-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-projects.html">Creative Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- project-item -->
                    <div class="col-lg-12 col-md-6 project-grid-item branding">
                        <div class="project-item">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="img/galerie/formation.mp4" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="card border border-success shadow-0 mb-3">
                            <div class="card-body">
                              <p class="card-text" style="text-align: center; font-weight: bold">Formations des coopérative aux bonnes pratiques agricoles</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="project-container">
                    <div class="col-lg-3 col-md-6 project-grid-item all branding webdesign">
                        <div class="project-item">
							<img src="img/portfolio/portfolio-1.jpg" alt="image">
                            <div class="project-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-projects.html">Creative Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 project-grid-item all application photography">
                        <div class="project-item">
							<img src="img/portfolio/portfolio-2.jpg" alt="image">
                            <div class="project-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-projects.html">Creative Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 project-grid-item all branding webdesign">
                        <div class="project-item">
							<img src="img/portfolio/portfolio-3.jpg" alt="image">
                            <div class="project-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-projects.html">Creative Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 project-grid-item all branding webdesig photographyn">
                        <div class="project-item">
							<img src="img/portfolio/portfolio-4.jpg" alt="image">
                            <div class="project-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-projects.html">Creative Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 project-grid-item all application webdesign photography">
                        <div class="project-item">
							<img src="img/portfolio/portfolio-5.jpg" alt="image">
                            <div class="project-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-projects.html">Creative Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!-- End Project Section -->
	
	@include('parts/footer')
	
</body>
@include('parts/locale')

<!-- Mirrored from cutesolution.com/html/Techvio/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 18:09:56 GMT -->
</html>