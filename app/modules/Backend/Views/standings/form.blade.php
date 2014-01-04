<div class="col-md-4">

	<div class="form-group">
		{{Form::label('team', 'Team')}}
		{{Form::text('team', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('played', 'Played')}}
		{{Form::text('played', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('won', 'Won')}}
		{{Form::text('won', null, array('class' => 'form-control'))}}
	</div>

</div>

<div class="col-md-4">

	<div class="form-group">
		{{Form::label('drawn', 'Drawn')}}
		{{Form::text('drawn', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('lost', 'Lost')}}
		{{Form::text('lost', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('for', 'Goals for')}}
		{{Form::text('for', null, array('class' => 'form-control'))}}
	</div>

</div>

<div class="col-md-4">

	<div class="form-group">
		{{Form::label('against', 'Goals against')}}
		{{Form::text('against', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('points', 'Points')}}
		{{Form::text('points', null, array('class' => 'form-control'))}}
	</div>

</div>

<div class="clearfix"></div>