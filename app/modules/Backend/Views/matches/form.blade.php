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
		<br>
		@if (isset($match->home_team_image) and !empty($match->home_team_image))
			<a href="{{asset('/images/matches/'.$match->home_team_image)}}" target="_blank">View uploaded photo</a>
			<br>
		@endif
	</div>	

	<hr>

	<div class="form-group">
		{{Form::label('season', 'Season')}}
		@if (isset($match->season))
			{{Form::select('season', $seasons, $match->season, array('class' => 'form-control'))}}
		@else
			{{Form::select('season', $seasons, null, array('class' => 'form-control'))}}
		@endif
	</div>

	<div class="form-group">
		{{Form::label('competition', 'Competition')}}
		@if (isset($match->competition))
			{{Form::select('competition', $competitions, $match->competition, array('class' => 'form-control'))}}
		@else
			{{Form::select('competition', $competitions, null, array('class' => 'form-control'))}}
		@endif
	</div>

	<div class="form-group">
		{{Form::label('scorers', 'Scorers')}}
		{{Form::textarea('scorers', null, array('class' => 'form-control'))}}			
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

		<br>
		@if (isset($match->away_team_image) and !empty($match->away_team_image))
			<a href="{{asset('/images/matches/'.$match->away_team_image)}}" target="_blank">View uploaded photo</a>
			<br>
		@endif

	</div>	

	<hr>

	<div class="form-group">
		{{Form::label('date', 'Date')}}
		@if (isset($match->time))
			<input type="date" name="date" class="form-control" value="{{date('Y-m-d', strtotime($match->time))}}">
		@else
			<input type="date" name="date" class="form-control" value="{{date('Y-m-d')}}">
		@endif
	</div>

	<div class="form-group">
		{{Form::label('time', 'Time')}}
		@if (isset($match->time))
			<input type="time" name="time" class="form-control" value="{{date('H:i', strtotime($match->time))}}">
		@else
			<input type="time" name="time" class="form-control" value="{{date('H:i')}}">
		@endif
	</div>	

</div>

<div class="clearfix"></div>