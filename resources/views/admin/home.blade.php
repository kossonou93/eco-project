<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Ecocajou Administration</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('admin/img/icon.ico')}}" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="{{asset('admin/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['{{asset('admin/css/fonts.css')}}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/azzara.min.css')}}">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('admin/css/demo.css')}}">
</head>
<body>
	<div class="loader_bg">
		<div class="loader"></div>
	</div>
	<div class="wrapper">
		<!--
				Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" style="background-color: rgb(137,177,147)">
			<!-- Logo Header -->
			<div class="logo-header">
				
				<a href="index.html" class="logo">
					<img src="{{asset('admin/img/logo-black.png')}}" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
						</li>
						
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar">
			
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Ecocajou
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="{{ route('home') }}">
											<span class="link-collapse">Déconnexion</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<a href="index.html">
								<i class="fas fa-home"></i>
								<p>Home</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Menu</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="#">
											<span class="sub-item">Voir nos Bulletins</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
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
											<li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Ajouter des Bulletins</a> </li>
											<!--<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a> </li>
											<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a> </li>-->
										</ul>
									</div>
								</div>
								<div class="card-body">
									<form id="contact-form" class="contact-form form" action="{{ route('bulletins.store') }}" method="POST">
										@csrf
										<div class="row mt-3">
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Titre</label>
													<input type="text" class="form-control" name="titre" placeholder="Titre du document" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Document</label>
													<input type="file" class="form-control" name="file" placeholder="Document" required>
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
	@include('sweetalert::alert')
	<script src="{{asset('admin/js/core/jquery.3.2.1.min.js')}}"></script>
	<script>
		setTimeout(function(){
			$('.loader_bg').fadeToggle();
		}, 1500);
	</script>
	<script src="{{asset('admin/js/core/popper.min.js')}}"></script>
	<script src="{{asset('admin/js/core/bootstrap.min.js')}}"></script>
	<!-- jQuery UI -->
	<script src="{{asset('admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
	<!-- Moment JS -->
	<script src="{{asset('admin/js/plugin/moment/moment.min.js')}}"></script><!-- DateTimePicker -->
	<script src="{{asset('admin/js/plugin/datepicker/bootstrap-datetimepicker.min.js')}}"></script>
	<!-- Bootstrap Toggle -->
	<script src="{{asset('admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
	<!-- jQuery Scrollbar -->
	<script src="{{asset('admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
	<!-- Azzara JS -->
	<script src="{{asset('admin/js/ready.min.js')}}"></script>
	<!-- Azzara DEMO methods, don't include it in your project! -->
	<script src="{{asset('admin/js/setting-demo.js')}}"></script>
	<script>
		$('#datepicker').datetimepicker({
			format: 'MM/DD/YYYY',
		});
	</script>
</body>
</html>