<!doctype html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title') - SISDA</title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-icon.png">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('styleassets/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
	<link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
	<link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

	<script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('style/assets/js/plugins.js') }}"></script>
	<script src="{{ asset('style/assets/js/main.js') }}"></script>

	<aside id="left-panel" class="left-panel">
		<nav class="navbar navbar-expand-sm navbar-default">
			<div class="navbar-header">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
					aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="">SISDA</a>
				<a class="navbar-brand hidden" href=""><img src="{{ asset('style/images/pupr.png') }}" alt="" width="400"></a>
			</div>

			<div id="main-menu" class="main-menu collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="{{ url('/') }}"> <i class="menu-icon fa fa-home"></i>Beranda </a>
					</li>
					<li>
						<a href="{{ url('/peralatan') }}"> <i class="menu-icon fa fa-list-alt"></i>Jenis Peralatan </a>
					</li>
					<li>
						{{-- <form action="{{ route(logout) }}" method="post">
							@csrf
                            <button type="submit"></button>
						</form> --}}
                        <a href="{{ url('/logout') }}"> <i class="menu-icon fa fa-sign-out"></i>Logout </a>
					</li>
				</ul>
			</div>

			{{-- <h3 class="menu-title">Setting</h3>
            <ul class="nav navbar-nav">
                <li>
                    <a href=""> <i class="menu-icon fa fa-sign-out"></i>Logout </a>
                </li>
            </ul> --}}
		</nav>
	</aside><!-- /#left-panel -->

	<div id="right-panel" class="right-panel">
		<header id="header" class="header">
			<div class="header-menu">
				<div class="col-sm-7">
					<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
					<div class="header-left">
						<button class="search-trigger"><i class="fa fa-search"></i></button>
						<div class="form-inline">
							<form class="search-form">
								<input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
								<button class="search-close" type="submit"><i class="fa fa-close"></i></button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-sm-5">
					<div class="user-area dropdown float-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="user-avatar rounded-circle" src="{{ asset('style/images/admin1.jpg') }}">
						</a>
						<div class="user-menu dropdown-menu">
							<a class="nav-link" href="#"><i class="fa fa -cog"></i>Profil</a>
						</div>
					</div>

				</div>
			</div>

		</header><!-- /header -->

		@yield('breadcrumbs')

		@yield('content')


	</div>
	</div>

</body>

</html>
