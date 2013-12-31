@extends('Backend::matches.index')

@section('main')

	<p class="lead">Match ID: {{$match->id}}</p>

	{{Form::model($match, array('route' => array('backend.matches.update', $match->id), 'method' => 'PUT', 'files' => true))}}

		<div class="row">
			<div class="col-md-12">
				<div class="pull-right">		
					{{Form::submit('Update', array('class' => 'btn btn-primary'))}}
					<a href="#" class="btn btn-danger" data-toggle="confirm">Delete</a>
				</div>				
			</div>
		</div>

		@include('Backend::matches.form')
		
	{{Form::close()}}

	{{Form::open(array('route' => array('backend.matches.destroy', $match->id), 'method' => 'DELETE', 'id' => 'deleteTrigger'))}}
	{{Form::close()}}

	{{fake_row()}}
	{{fake_row()}}
@stop