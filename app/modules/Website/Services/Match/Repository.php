<?php namespace Website\Services\Match;

use Backend\Models\Match;
use Request;

class Repository
{

	/**
	 * Match
	 * @var Match
	 */
	protected $match;

	/**
	 * __construct
	 * @param Match $match 
	 */
	public function __construct(Match $match)
	{
		$this->match = $match;
	}

	/**
	 * Get last match
	 * @return Match 
	 */
	public function last()
	{
		return $this->match->where('time', '<=', date('Y-m-d H:i:s'))->orderBy('time', 'desc')->first();
	}

	/**
	 * Get next match
	 * @return Match 
	 */
	public function next()
	{
		return $this->match->where('time', '>=', date('Y-m-d H:i:s'))->orderBy('time')->first();
	}

	/**
	 * Find a match by slug
	 * @param  string  $slug      
	 * @param  boolean $withPosts 
	 * @return Match             
	 */
	public function findBySlug($slug, $withPosts = false)
	{
		$match = $this->match->whereSlug($slug);

		if ($withPosts) {
			$match->with('posts');
		}

		return $match->firstOrFail();
	}

	/**
	 * Get paginated
	 * @param  integer $count 
	 * @return Match        
	 */
	public function paginated($count)
	{
		$results = $this->match->orderBy('time', 'desc');

		if (Request::has('q')){
			$results->search(Request::get('q'));			
		}

		return $results->paginate($count);
	}
	
}