@extends('Backend::master')

@section('app')

	<div class="col-md-12">
		{{Form::open(array('route' => 'backend.standings.store', 'files' => true))}}
			{{Form::submit('Create', array('class' => 'btn btn-success pull-right'))}}		

			<p class="lead">Create new standing</p>

			@include('Backend::standings.form')
		{{Form::close()}}

		{{fake_row()}}
		{{fake_row()}}		
	</div>
@stop