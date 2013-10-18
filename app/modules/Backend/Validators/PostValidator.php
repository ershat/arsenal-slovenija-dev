<?php namespace Backend\Validators;

class PostValidator extends Validator {

	static $rules = array(
		'title' => 'required',
		'content' => 'required',
		'author' => 'required'
	);

}