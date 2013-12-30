<?php namespace Backend\Repositories;

use Backend\Models\Match as Match;
use Backend\Services\MatchManipulatorService as MMS;
use Request;
use Auth;

class DbMatchRepository implements MatchRepositoryInterface {

	public function getPaginated($itemNo)
	{
		$results = Match::orderBy('created_at', 'desc');
		$keyword = Request::get('q');

		if (Request::has('q')){
			$results = $results->search(Request::get('q'));			
		}

		if (!isAdmin()) {
			$results = $results->where(function($query){
				$query->whereAuthor(Auth::user()->id)->orWhere('author_alias', '=', Auth::user()->name);
			});
		}

		return $results->paginate($itemNo);
	}

	public function getLastPosts($number = 10)
	{
		$results = Match::orderBy('created_at', 'desc');

		if (!isAdmin()) {
			$results = $results->where(function($query){
				$query->whereAuthor(Auth::user()->id)->orWhere('author_alias', '=', Auth::user()->name);
			});
		}

		return $results->take($number)->get();		
	}

	public function getAll()
	{
		return Post::all();
	}

	public function getAllReversed()
	{
		return Post::orderBy('id','desc')->get();
	}

	public function findById($id)
	{
		return Post::find($id);
	}

	public function create($input, $file = null)
	{
		return PMS::create($input, $file);
	}

	public function update($input, $id, $file = null)
	{
		return PMS::update($input, $id, $file);
	}

	public function updateSingle($name, $value, $id)
	{
		return PMS::updateSingle($name, $value, $id);
	}

}