<?php namespace Backend\Repositories;

use Backend\Models\Match as Match;
use Backend\Services\MatchManipulatorService as MMS;
use Request;
use Auth;

class DbMatchRepository implements MatchRepositoryInterface {

	public function getPaginated($itemNo)
	{
		$results = Match::orderBy('time', 'desc');
		$keyword = Request::get('q');

		if (Request::has('q')){
			$results = $results->search(Request::get('q'));			
		}
		
		return $results->paginate($itemNo);
	}

	public function getLastPosts($number = 10)
	{
		$results = Match::orderBy('time', 'desc');

		return $results->take($number)->get();		
	}

	public function getAll()
	{
		return Match::all();
	}

	public function getFirstLatest($limit)
	{
		return Match::orderBy('time','desc')->take($limit)->get();
	}

	public function getAllReversed()
	{
		return Match::orderBy('id','desc')->get();
	}

	public function findById($id)
	{
		return Match::find($id);
	}

	public function create($input, $homeTeamLogo = null, $awayTeamLogo = null)
	{
		return MMS::create($input, $homeTeamLogo, $awayTeamLogo);
	}

	public function update($input, $id, $homeTeamLogo = null, $awayTeamLogo = null)
	{
		return MMS::update($input, $id, $homeTeamLogo, $awayTeamLogo);
	}

	public function updateSingle($name, $value, $id)
	{
		return MMS::updateSingle($name, $value, $id);
	}

}