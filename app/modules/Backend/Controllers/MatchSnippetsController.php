<?php namespace Backend\Controllers;

use View, Input, Redirect;
use Backend\Repositories\MatchSnippetRepositoryInterface;

class MatchSnippetsController extends \BaseController {

	protected $matchSnippet;

	public function __construct(MatchSnippetRepositoryInterface $matchSnippet)
	{
		$this->matchSnippet = $matchSnippet;
	}

	/**
	 * Update the specified part of resource in storage.
	 *
	 * @param  int  $id
	 * @return JSON
	 */
	public function updateSingle($id)
	{
		$snippetUpdate = $this->matchSnippet->updateSingle(Input::get('name'), Input::get('value'), $id);

		return array('status' => $snippetUpdate);
	}	

}
