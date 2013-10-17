<!doctype html>
<html>
	<head>@include('Backend::_partials.head')</head>
	<body>
		@include('Backend::_partials.header')
		@yield('main')
		@include('Backend::_partials.scripts')
	</body>
</html>