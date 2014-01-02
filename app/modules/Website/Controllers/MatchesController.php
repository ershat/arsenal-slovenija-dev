<?php namespace Website\Controllers;

use View, Input, Redirect;
use Website\Repositories\MatchRepositoryInterface;

class MatchesController extends \BaseController {

	protected $match;

	public function __construct(MatchRepositoryInterface $match)
	{
		$this->match = $match;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		return View::make('Website::matches.show')->withMatch($this->match->findBySlug($slug, true));
	}

	public function index()
	{
		return View::make('Website::matches.index')->withMatches($this->match->getPaginated(15));
	}

}