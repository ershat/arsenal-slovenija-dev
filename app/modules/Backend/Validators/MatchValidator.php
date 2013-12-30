<?php namespace Backend\Validators;

class MatchValidator extends Validator {

	static $rules = array(
		'home_team' => 'required',
		'home_team_image' => 'required',
		'home_goals' => 'required',
		'away_team' => 'required',
		'away_team_image' => 'required',
		'away_goals' => 'required'
	);

}