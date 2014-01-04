<?php namespace Website\Controllers;

use View, Input, Redirect, DB;
use Backend\Models\Standing;

class StandingsController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function index()
	{
		return View::make('Website::standings.index')->withStandings(Standing::orderBy('points', 'desc')->orderBy(DB::raw('(standings.for - standings.against)'), 'desc')->get());
	}

}