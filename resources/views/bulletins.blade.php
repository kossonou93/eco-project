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
						<h2>Nos Bulletins</h2>
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li>Nos Bulletins</li>
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
						<h2>Nos Bulletins</h2>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="project-container">
                    <!-- project-item -->
                    @foreach ($bulletins as $bulletin)
                        <div class="col-lg-12 col-md-12 project-grid-item">
                            <div class="project-item">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img class="wpdm_icon" alt="Icône" src="https://ecookim.com/wp-content/plugins/download-manager/assets/file-type-icons/pdf.svg">
                                            </div>
                                            <div class="col-md-8">
                                                <h3 class="package-title"><a href="https://ecookim.com/download/mars-incorporated-soutient-14-000-producteurs-de-cacao-sur-la-voie-dun-revenu-de-subsistance-durable-dici-2030/">{{$bulletin->titre}}</a></h3>
                                                <div class="text-muted text-small"><i class="fas fa-copy"></i> 1 fichier·s <i class="fas fa-hdd ml-3"></i> 89.79 KB</div>
                                            </div>
                                            <div class="col-md-2">
                                                <a class="wpdm-download-link download-on-click btn btn-primary " rel="nofollow" href="{{ asset('uploads/bulletin/'.$bulletin->file)}}" data-downloadurl="{{ asset('uploads/bulletin/'.$bulletin->file)}}">Télécharger</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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