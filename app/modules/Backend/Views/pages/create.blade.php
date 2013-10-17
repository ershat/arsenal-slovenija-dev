@extends('Backend::pages.index')

@section('main')
	
	<p class="lead">Create new page</p>

	{{Form::open(array('route' => 'backend.pages.store'))}}
		
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

			{{Form::submit('Create', array('class' => 'btn btn-success pull-right'))}}		
		</div>
		
		<div class="col-md-8">
			<div class="form-group">
				{{Form::label('content', 'Content')}}
				{{Form::textarea('content', null, array('class' => 'form-control', 'rows' => '20'))}}
			</div>
		</div>

		<div class="clearfix"></div>

	{{Form::close()}}

	{{fake_row()}}
	{{fake_row()}}
@stop