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