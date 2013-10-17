@extends('Backend::master')

@section('app')
	<div class="container">

		<div class="col-md-4">
			@include('Backend::pages.sidebar')			
		</div>

		<div class="col-md-8">
			@yield('main')
		</div>

	</div>
@stop