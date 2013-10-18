@extends('Backend::posts.index')

@section('main')

	{{Form::model($post, array('route' => array('backend.posts.update', $post->id), 'method' => 'PUT', 'files' => true))}}

		<div class="pull-right">		
			{{Form::submit('Update', array('class' => 'btn btn-primary'))}}
			<a href="#" class="btn btn-danger" data-toggle="confirm">Delete</a>
		</div>

		<p class="lead">Post ID: {{$post->id}}</p>

		@include('Backend::posts.form')
	{{Form::close()}}

	{{Form::open(array('route' => array('backend.posts.destroy', $post->id), 'method' => 'DELETE', 'id' => 'deleteTrigger'))}}
	{{Form::close()}}


	{{fake_row()}}
	{{fake_row()}}
@stop