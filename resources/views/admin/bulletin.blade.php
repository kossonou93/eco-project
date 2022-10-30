<!DOCTYPE html>
<html lang="en">
@include('admin/parts/head')
<body>
	@include('admin/parts/menu')
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="row">
						<div class="col-md-10">
							<div class="card card-with-nav">
                                <div class="card-header">
									<div class="row row-nav-line">
										<ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
											<li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Tous les Bulletins</a> </li>
										</ul>
									</div>
								</div>
								<div class="card-body">
								</div>
							</div>
						</div>
                        <div class="col-md-2"></div>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
	<!--   Core JS Files   -->
	@include('admin/parts/footer')
</body>
</html>