<?php namespace Backend\Validators;

class MatchValidator extends Validator {

	static $rules = array(
		'home_team' => 'required',
		'away_team' => 'required',
	);

}