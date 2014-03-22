<?php namespace Website\Composers;

use Request;
use Backend\Models\Match;
use Formatter;

class WebsiteFixtureInfoComposer {

	public function compose($view)
	{
		$match = Match::whereSlug(Request::segment(2))->first();

		if (count($match) and !empty($match->ext_match_id)) {

			try {
				$xml = simplexml_load_file('http://www.footballwebpages.co.uk/match.xml?match='.$match->ext_match_id);
				$result = Formatter::make($xml, 'xml')->to_array();
				
				$matchInfo = $result;
			} catch (\ErrorException $e) {
				$matchInfo = false;
			}

			$view->with('matchInfo', $matchInfo);
		}
	}

}