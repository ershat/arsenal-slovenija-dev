<?php namespace Website\Services\Post;

use Backend\Models\Post;
use Request;

class Repository
{

	/**
	 * Post model
	 * @var Backend\Models\Post
	 */
	protected $post;

	/**
	 * __construct
	 * @param Backend\Models\Post $post
	 */
	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	/**
	 * Get paginated
	 * @param  integer $count 
	 * @param  string $type  
	 * @return Backend\Models\Post
	 */
	public function paginated($count, $offset = 3, $type = 'news')
	{
		$results = $this->post->orderBy('created_at', 'desc')->whereType($type)->with('post_author');

		if (Request::has('q')) {
			$results->search(Request::get('q'));
		}

		if ($type == 'news') {
			$results->skipToNumber($offset);
		}

		return $results->paginate($count);
	}

	/**
	 * Get featured posts
	 * @param  integer $count 
	 * @param  string $type 
	 * @return Backend\Models\Post
	 */
	public function featured($count, $type = 'news')
	{
		return $this->post->orderBy('created_at', 'desc')->whereType($type)->with('post_author')->take($count)->get();
	}

	/**
	 * Find a post by it's slug
	 * @param  string $slug 
	 * @return Backend\Models\Post
	 */
	public function findBySlug($slug)
	{
		return $this->post->whereSlug($slug)->with('post_author')->with('gallery')->firstOrFail();
	}

}