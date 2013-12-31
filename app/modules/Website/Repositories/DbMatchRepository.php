<?php namespace Website\Repositories;

use Backend\Models\Match;

class DbMatchRepository implements MatchRepositoryInterface {

	public function getLast()
	{
		return Match::where('time', '<=', date('Y-m-d H:i:s'))->orderBy('time', 'desc')->first();
	}

	public function getNext()
	{
		return Match::where('time', '>=', date('Y-m-d H:i:s'))->orderBy('time')->first();
	}
	
}