@extends('Backend::master')

@section('app')

		<div class="col-md-12">
			<a href="{{route('backend.standings.create')}}" class="btn btn-success">
				Create new
				<span class="glyphicon glyphicon-plus"></span>
			</a>
		</div>

		<div class="col-md-12">
			@include('Backend::standings.list')
		</div>

@stop