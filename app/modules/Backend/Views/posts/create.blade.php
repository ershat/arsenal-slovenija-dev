@extends('Backend::posts.index')

@section('main')

	{{Form::open(array('route' => 'backend.posts.store', 'files' => true))}}
		{{Form::submit('Create', array('class' => 'btn btn-success pull-right'))}}		

		<p class="lead">Create new post</p>

		@include('Backend::posts.form')
	{{Form::close()}}

	{{fake_row()}}
	{{fake_row()}}
@stop