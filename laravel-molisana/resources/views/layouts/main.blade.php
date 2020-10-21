<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('style.css')
	</head>
	<body>
		@include('partials.header')
		<!-- _Main -->
		@yield('mainContent')
		<!-- _/Main -->
		@include('partials.footer')
        <script src="{{asset('js/app.js')}}"></script>
        @yield('syleJs')
	</body>
</html>
