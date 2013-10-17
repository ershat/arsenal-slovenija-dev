<!doctype html>
<html>
	<head>
		<title>Backend</title>
		<meta charset="utf-8">
		@include('Backend::_partials.head')
	</head>
	<body>
		@include('Backend::_partials.header')
		@yield('app')
		@include('Backend::_partials.scripts')
	</body>
</html>