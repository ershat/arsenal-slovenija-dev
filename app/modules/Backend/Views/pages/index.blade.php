@extends('Backend::master')

@section('app')

		<div class="col-md-3">
			@include('Backend::pages.sidebar')			
		</div>

		<div class="col-md-9">
			@yield('main')
		</div>

@stop