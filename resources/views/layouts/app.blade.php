<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Víctor Gutiérrez</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
	@yield('css')
</head>
<body>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2 container">
			<div class="header"></div>
			<hr>
			<div class="clearfix"></div>
			<div class="content" id="app">
				@yield('content')
			</div>
			<hr>
			<div class="clearfix"></div>
			<div class="footer"></div>
		</div>
	</div>
	@yield('script')
</body>
</html>