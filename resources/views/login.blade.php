<!doctype html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-icon.png">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
	<link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
	<link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="bg-dark">

	<script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('style/assets/js/plugins.js') }}"></script>
	<script src="{{ asset('style/assets/js/main.js') }}"></script>

	<div class="sufee-login d-flex align-content-center flex-wrap">
		<div class="container">
			<div class="login-content">
				<div class="login-logo">
					<a href="index.html">
						<img class="align-content" src="images/logo.png" alt="">
					</a>
				</div>
				<div class="login-form">
					<img src="img/pupr.png" alt="" width="500">
					<form action="{{ route('login') }}" method="post">
						@csrf
						@if (session('status'))
							<div class="form-group text-danger">
								{{ session('status') }}
							</div>
						@endif
						<div class="form-group">
							<label>Alamat Email</label>
							<input name="email" type="email" class="form-control" placeholder="Email">
						</div>
						@error('email')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror

						<div class="form-group">
							<label>Password</label>
							<input name="password" type="password" class="form-control" placeholder="Password">
						</div>
						@error('password')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror

						<button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Masuk</button>
						<div class="register-link m-t-15 text-center">
							<p>Tidak Punya Akun ? <a href="{{ url('register') }}"> Daftar Disini</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	@if (session('msg'))
		<script>
		 alert("{{ session('msg') }}")
		</script>
	@endif
</body>

</html>
