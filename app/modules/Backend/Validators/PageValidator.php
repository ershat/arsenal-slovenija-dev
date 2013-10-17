<?php namespace Backend\Validators;

class PageValidator extends Validator {

	static $rules = array(
		'title' => 'required',
		'content' => 'required',
		'template' => 'required'
	);

}