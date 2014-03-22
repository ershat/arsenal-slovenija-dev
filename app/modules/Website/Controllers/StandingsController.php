<?php namespace Website\Controllers;

use View, Input, Redirect, DB;
use Backend\Models\Standing;
use Formatter;

class StandingsController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function index()
	{

		try {
			$xml = simplexml_load_file('http://www.footballwebpages.co.uk/league.xml?comp=1');
			$result = Formatter::make($xml, 'xml')->to_array();

			$standings = $result['team'];
		} catch (\ErrorException $e) {
			$standings = false;
		}

		return View::make('Website::standings.index')->withStandings($standings);
	}

}