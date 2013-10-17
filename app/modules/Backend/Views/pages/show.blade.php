@extends('Backend::pages.index')

@section('main')
	<p class="lead">Page ID: {{$page->id}}</p>

	{{Form::model($page, array('route' => array('backend.pages.update', $page->id), 'method' => 'PUT'))}}

		<div class="col-md-4">
		
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

			{{Form::submit('Update', array('class' => 'btn btn-primary pull-left'))}}
			<a href="#" class="btn btn-danger pull-right" data-toggle="confirm">Delete</a>
		</div>
		
		<div class="col-md-8">
			<div class="form-group">
				{{Form::label('content', 'Content')}}
				{{Form::textarea('content', null, array('class' => 'form-control', 'rows' => '20'))}}
			</div>
		</div>

		<div class="clearfix"></div>

	{{Form::close()}}

	{{Form::open(array('route' => array('backend.pages.destroy', $page->id), 'method' => 'DELETE', 'id' => 'deleteTrigger'))}}
	{{Form::close()}}

	{{fake_row()}}
	{{fake_row()}}
@stop