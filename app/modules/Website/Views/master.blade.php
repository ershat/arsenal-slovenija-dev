<!doctype html>
<html>
	<head>
		<title>Arsenal Slovenija</title>
		<meta charset="utf-8">
		@include('Website::_partials.head')
	</head>
	<body>
		@include('Website::_partials.header')
		@if (isset($pages)) 
			@include('Website::_partials.breadcrumbs') 
		@endif
		@yield('app')
		@include('Website::_partials.scripts')
	</body>
</html>