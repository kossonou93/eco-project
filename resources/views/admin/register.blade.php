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
                                            <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Créer un Compte Administrateur</a> </li>
                                        </ul>
                                    </div>
                                </div>
								<div class="card-body login">
                                    <div class="container animated fadeIn">
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
                                                <br><br>
                                                <div class="row form-action">
                                                    <div class="col-md-6">
                                                        <a href="{{ route('admin.home') }}" class="btn btn-danger w-100 fw-bold">Annuler</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn btn-primary w-100 fw-bold">Valider</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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