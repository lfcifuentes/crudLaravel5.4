<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>APP </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css"  href="{!! asset('font-awesome/css/font-awesome.min.css') !!}">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="page-header text-center">
					CRUD laravel 5.4
				</h1>
				<hr>
			</div>
			@yield('content')
		</div>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>