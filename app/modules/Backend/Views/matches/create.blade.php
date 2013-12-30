@extends('Backend::matches.index')

@section('main')

	{{Form::open(array('route' => 'backend.matches.store', 'files' => true))}}
		{{Form::submit('Create', array('class' => 'btn btn-success pull-right'))}}		

		<p class="lead">Create new match</p>

		@include('Backend::matches.form')
	{{Form::close()}}

	{{fake_row()}}
	{{fake_row()}}
@stop