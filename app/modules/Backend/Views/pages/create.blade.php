@extends('Backend::pages.index')

@section('main')

	{{Form::open(array('route' => 'backend.pages.store'))}}
		{{Form::submit('Create', array('class' => 'btn btn-success pull-right'))}}		

		<p class="lead">Create new page</p>

		@include('Backend::pages.form')
	{{Form::close()}}

	{{fake_row()}}
	{{fake_row()}}
@stop