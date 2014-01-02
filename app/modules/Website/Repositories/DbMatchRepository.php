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

	public function findBySlug($slug, $withPosts = false)
	{
		$match = Match::whereSlug($slug);

		if ($withPosts) {
			$match = $match->with('posts');
		}

		return $match->firstOrFail();
	}

	public function getPaginated($itemNo)
	{
		$results = Match::orderBy('time', 'desc');
		$keyword = Request::get('q');

		if (Request::has('q')){
			$results = $results->search(Request::get('q'));			
		}

		return $results->paginate($itemNo);
	}
	
}