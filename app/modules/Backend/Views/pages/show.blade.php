@extends('Backend::pages.index')

@section('main')
	<p class="lead">Page ID: {{$page->id}}</p>

	{{Form::model($page, array('route' => 'backend.pages.store'))}}
		
		@if (count($errors->all()) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					{{$error}} <br>
				@endforeach
			</div>
		@endif

		<div class="form-group">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', null, array('class' => 'form-control'))}}
		</div>

		<div class="form-group">
			{{Form::label('subtitle', 'Subtitle')}}
			{{Form::text('subtitle', null, array('class' => 'form-control'))}}
		</div>

		<div class="form-group">
			{{Form::label('template', 'Template path')}}
			{{Form::text('template', null, array('class' => 'form-control'))}}
		</div>

		<div class="form-group">
			{{Form::label('summary', 'Summary')}}
			{{Form::textarea('summary', null, array('class' => 'form-control', 'rows' => '6'))}}
		</div>

		<div class="form-group">
			{{Form::label('content', 'Content')}}
			{{Form::textarea('content', null, array('class' => 'form-control', 'rows' => '20'))}}
		</div>

		{{Form::submit('Create', array('class' => 'btn btn-success pull-right'))}}

		<div class="clearfix"></div>

	{{Form::close()}}

	{{fake_row()}}
	{{fake_row()}}
@stop