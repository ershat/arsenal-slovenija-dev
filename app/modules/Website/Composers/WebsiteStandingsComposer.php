<?php namespace Website\Composers;

use Backend\Models\Standing;
use DB;

class WebsiteStandingsComposer {

	public function compose($view)
	{
		$view->with('standings', Standing::orderBy('points', 'desc')->orderBy(DB::raw('(standings.for - standings.against)'), 'desc')->take(10)->get());
	}

}