<?php namespace Website\Composers;

use DB;
use Formatter;

class Standings {

	/**
	 * Competition ID
	 * @var integer
	 */
	protected $competition = 1;

	/**
	 * Compose
	 * @param  View $view 
	 * @return void     
	 */
	public function compose($view)
	{

		try {
			$xml = simplexml_load_file('http://www.footballwebpages.co.uk/league.xml?comp='.$this->competition);
			$result = Formatter::make($xml, 'xml')->to_array();

			$standings = $result['team'];
		} catch (\ErrorException $e) {
			$standings = false;
		}

		$view->with('standings', $standings);
	}

}