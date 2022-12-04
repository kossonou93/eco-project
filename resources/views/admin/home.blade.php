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
											<li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Ajouter Un Bulletin</a> </li>
											<!--<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a> </li>
											<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a> </li>-->
										</ul>
									</div>
								</div>
								<br><br><br>
								<div class="card-body">
									<form id="contact-form" class="contact-form form" action="{{ route('bulletins.store') }}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="row mt-3">
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Titre</label>
													<input type="text" class="form-control" name="titre" placeholder="Titre du document" required>
												</div>
											</div>
											<br><br><br>
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Document</label>
													<input type="file" class="form-control" name="file" id="file" placeholder="Document" required>
												</div>
											</div>
										</div>
										<div class="row mt-3 mb-1">
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Texte</label>
													<textarea class="form-control" name="texte" placeholder="A propos du document" rows="3"></textarea>
												</div>
											</div>
										</div>
										<div class="text-right mt-3 mb-3">
											<button class="btn btn-success" type="submit">Enregistrer</button>
											<button class="btn btn-danger">Annuler</button>
										</div>
									</form>
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