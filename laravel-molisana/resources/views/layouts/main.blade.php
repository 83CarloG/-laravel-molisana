<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="{{'css/app.css'}}">
	</head>
	<body>
		@include('partials.header')
		<!-- _Main -->
		@yield('mainContent')
		<!-- _/Main -->
		@include('partials.footer')
		<script src="{{asset('js/app.js')}}"></script>
	</body>
</html>
