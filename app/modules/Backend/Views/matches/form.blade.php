<div class="col-md-6">

	@if (count($errors->all()) > 0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				{{$error}} <br>
			@endforeach
		</div>
	@endif

	<div class="form-group">
		{{Form::label('home_team', 'Home Team')}}
		{{Form::text('home_team', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('home_goals', 'Home Goals')}}
		{{Form::text('home_goals', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('home_team_image', 'Home Team Image')}}
		{{Form::file('home_team_image', null, array('class' => 'form-control'))}}
	</div>	

	<hr>

	<div class="form-group">
		{{Form::label('season', 'Season')}}
		@if (isset($post->season))
			{{Form::select('season', $seasons, $match->season, array('class' => 'form-control'))}}
		@else
			{{Form::select('season', $seasons, null, array('class' => 'form-control'))}}
		@endif
	</div>

	<div class="form-group">
		{{Form::label('competition', 'competition')}}
		@if (isset($match->competition))
			{{Form::select('competition', $competitions, $match->competition, array('class' => 'form-control'))}}
		@else
			{{Form::select('competition', $competitions, null, array('class' => 'form-control'))}}
		@endif
	</div>

</div>

<div class="col-md-6">

	<div class="form-group">
		{{Form::label('away_team', 'Away Team')}}
		{{Form::text('away_team', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('away_goals', 'Away Goals')}}
		{{Form::text('away_goals', null, array('class' => 'form-control'))}}
	</div>

	<div class="form-group">
		{{Form::label('away_team_image', 'Away Team Image')}}
		{{Form::file('away_team_image', null, array('class' => 'form-control'))}}
	</div>	

	<hr>



</div>

<div class="clearfix"></div>