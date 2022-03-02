<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Login ">

		<title>Login </title>

		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

		<link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

		<!-- Ekka CSS -->
		<link id="ekka-css" rel="stylesheet" href="{{ asset('backend/assets/css/ekka.css') }}" />

		<!-- FAVICON -->
		<link href="backend/assets/img/favicon.png" rel="shortcut icon" />
	</head>

	<body class="sign-inup" id="body">

        @yield('content')

		<!-- Javascript -->
		<script src="{{ asset('backend/assets/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
		<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{ asset('backend/assets/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
		<script src="{{ asset('backend/assets/plugins/slick/slick.min.js') }}"></script>

		<!-- Ekka Custom -->
		<script src="{{ asset('backend/assets/js/ekka.js')}}"></script>
	</body>
</html>
