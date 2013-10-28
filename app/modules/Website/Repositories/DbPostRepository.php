<?php namespace Website\Repositories;

use Backend\Models\Post as Post;
use Request;

class DbPostRepository implements PostRepositoryInterface {

	public function getPaginated($itemNo)
	{
		$results = Post::orderBy('created_at', 'desc')->with('post_author');
		$keyword = Request::get('q');

		if (Request::has('q')){
			$results = $results->search(Request::get('q'));			
		}

		return $results->paginate($itemNo);
	}

	public function findBySlug($slug)
	{
		return Post::whereSlug($slug)->with('post_author')->firstOrFail();
	}

}