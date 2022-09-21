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
	<!-- End Navbar Area -->
	
	<!-- Start Page Title Area -->
	<div class="page-title-area item-bg1">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Galerie Photo</h2>
						<ul>
							<li><a href="{{route('home')}}">Accueil</a></li>
							<li><a href=""></a>Galerie Photo</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->
	
	<!-- Start Services Section -->
	<section class="blog-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="#">
								<img src="img/galerie/pese.jpeg" alt="image">
							</a>
						</div>
						<div class="single-blog-item">
							<div class="blog-content">
								<h3>
                                    <a href="#">
										Pesé de 1kg pour faire l'analyse
                                    </a>
                                </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="img/galerie/analyse3.jpeg" alt="image">
							</a>
						</div>
						<div class="single-blog-item">
							<div class="blog-content">
								<h3>
									<a href="#">
                                       Exercice d'analyse par groupe de trois personnes
                                    </a>
								</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="#">
								<img src="img/galerie/individuelle.jpeg" alt="image">
							</a>
						</div>
						<div class="single-blog-item">
							<div class="blog-content">
								<h3>
                                    <a href="#">
                                        Exercice d'analyse individuelle
                                    </a>
                                </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="#">
								<img src="img/galerie/brassage.jpeg" alt="image">
							</a>
						</div>
						<div class="single-blog-item">
							<div class="blog-content">
								<h3>
                                    <a href="#">
										Brassage de l'échantillon
                                    </a>
                                </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="#">
								<img src="img/galerie/cartage.jpeg" alt="image">
							</a>
						</div>
						<div class="single-blog-item">
							<div class="blog-content">
								<h3>
									<a href="#">
                                       Le cartage
                                    </a>
								</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="img/galerie/retrait.jpeg" alt="image">
							</a>
						</div>
						<div class="single-blog-item">
							<div class="blog-content">
								<h3>
                                    <a href="#">
										Retrait de deux cotés opposés
                                    </a>
                                </h3>
							</div>
						</div>
					</div>
				</div>
				<!--<div class="col-lg-12 col-md-12">
					<div class="pagination-area"> <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
						<a href="#" class="page-numbers">1</a>
						<span class="page-numbers current" aria-current="page">2</span>
						<a href="#" class="page-numbers">3</a>
						<a href="#" class="page-numbers">4</a>
						<a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
					</div>-->
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