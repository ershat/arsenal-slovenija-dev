@extends('Backend::pages.index')

@section('main')

	{{Form::model($page, array('route' => array('backend.pages.update', $page->id), 'method' => 'PUT'))}}

		<div class="pull-right">		
			{{Form::submit('Update', array('class' => 'btn btn-primary'))}}
			<a href="#" class="btn btn-danger" data-toggle="confirm">Delete</a>
		</div>

		<p class="lead">Page ID: {{$page->id}}</p>

		@include('Backend::pages.form')
	{{Form::close()}}

	{{Form::open(array('route' => array('backend.pages.destroy', $page->id), 'method' => 'DELETE', 'id' => 'deleteTrigger'))}}
	{{Form::close()}}


	{{fake_row()}}
	{{fake_row()}}
@stop