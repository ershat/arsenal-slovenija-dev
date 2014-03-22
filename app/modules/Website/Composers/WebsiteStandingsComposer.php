<?php namespace Website\Composers;

use Backend\Models\Standing;
use DB;
use Formatter;

class WebsiteStandingsComposer {

	public function compose($view)
	{

		try {
			$xml = simplexml_load_file('http://www.footballwebpages.co.uk/league.xml?comp=1');
			$result = Formatter::make($xml, 'xml')->to_array();

			$standings = $result['team'];
		} catch (\ErrorException $e) {
			$standings = false;
		}

		$view->with('standings', $standings);
	}

}