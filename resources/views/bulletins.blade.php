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
						<h2>@lang('public.nosBulletins')</h2>
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li>@lang('public.nosBulletins')</li>
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
						<h2>@lang('public.nosBulletins')</h2>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="project-container">
                    <!-- project-item -->
                    
                        <div class="col-lg-12 col-md-12 project-grid-item">
                            <div class="project-item">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="row">
											<table class="table">
												<tbody>
													
													@foreach ($bulletins as $bulletin)
													<tr>
														<th scope="col"><img class="wpdm_icon" alt="Icône" src="{{asset('img/pdf.png')}}"></th>
														<th scope="col"><h3 class="package-title">{{$bulletin->titre}}</h3></th>
														<th scope="col"><a class="wpdm-download-link download-on-click btn btn-primary " rel="nofollow" href="{{ asset('uploads/bulletin/'.$bulletin->file)}}" data-downloadurl="{{ asset('uploads/bulletin/'.$bulletin->file)}}">@lang('public.telecharger')</a></th>
													</tr>
													@endforeach
													
												</tbody>
											</table>
                                        </div>
                                    </div>
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