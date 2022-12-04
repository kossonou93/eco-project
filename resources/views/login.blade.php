<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('admin/img/icon.ico')}}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset('admin/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['{{asset("admin/css/fonts.css")}}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/azzara.min.css')}}">
</head>
<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Connexion</h3>
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<div class="login-form">
					<div class="form-group">
						<label for="email" class="placeholder"><b>Email</b></label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="password" class="placeholder"><b>Mot de Passe</b></label>
						@if (Route::has('password.request'))
							<a href="{{ route('password.request') }}" class="link float-right">Mot de Passe oubligé ?</a>
						@endif
						<div class="position-relative">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							<div class="show-password">
								<i class="flaticon-interface"></i>
							</div>
						</div>
					</div>
					<div class="form-group form-action-d-flex mb-3">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="custom-control-label m-0" for="remember">Se souvenir de moi</label>
						</div>
						<button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold">connexion</button>
					</div>
					<!-- 				<div class="form-action">
						<a href="#" class="btn btn-primary btn-rounded btn-login">Sign In</a>
					</div> -->
					<div class="login-account">
						<span class="msg">Vous n'avez pas de Compte ?</span>
						<a href="#" id="show-signup" class="link">Créer un Compte</a>
					</div>
					<br><br>
					<div class="login-account">
						<a href="{{ route('index') }}" class="link">Home</a>
					</div>
				</div>
			</form>
		</div>

		<div class="container container-signup animated fadeIn">
			<h3 class="text-center">Créer un Compte</h3>
			<form method="POST" action="{{ route('register') }}">
				@csrf
				<div class="login-form">
					<div class="form-group">
						<label for="name" class="placeholder"><b>Nom</b></label>
						<input  id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
						@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="email" class="placeholder"><b>Email</b></label>
						<input  id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="password" class="placeholder"><b>Password</b></label>
						<div class="position-relative">
							<input  id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							<div class="show-password">
								<i class="flaticon-interface"></i>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="password-confirm" class="placeholder"><b>Confirm Password</b></label>
						<div class="position-relative">
							<input  id="password-confirm" name="password_confirmation" type="password" class="form-control" required autocomplete="new-password">
							<div class="show-password">
								<i class="flaticon-interface"></i>
							</div>
						</div>
					</div>
					<div class="row form-sub m-0">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" name="agree" id="agree">
							<label class="custom-control-label" for="agree">J'ai accepte les termes conditions.</label>
						</div>
					</div>
					<div class="row form-action">
						<div class="col-md-6">
							<a href="#" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Annuler</a>
						</div>
						<div class="col-md-6">
							<button type="submit" class="btn btn-primary w-100 fw-bold">Valider</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	@include('sweetalert::alert')
	<script src="{{asset('admin/js/core/jquery.3.2.1.min.js')}}"></script>
	<script>
		setTimeout(function(){
			$('.loader_bg').fadeToggle();
		}, 1500);
	</script>
	<script src="{{asset('admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('admin/js/core/popper.min.js')}}"></script>
	<script src="{{asset('admin/js/core/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/js/ready.js')}}"></script>
</body>
</html>