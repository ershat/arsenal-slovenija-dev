<?php namespace Website\Repositories;

use Backend\Models\Post as Post;
use Request;

class DbPostRepository implements PostRepositoryInterface {

	public function getPaginated($itemNo, $type = 'news')
	{
		$results = Post::orderBy('created_at', 'desc')->whereType($type)->with('post_author');
		$keyword = Request::get('q');

		if (Request::has('q')){
			$results = $results->search(Request::get('q'));			
		}

		if ($type == 'news') {
			$results = $results->skipToNumber(3);
		}

		return $results->paginate($itemNo);
	}

	public function getFeatured($type = 'news')
	{
		return Post::orderBy('created_at', 'desc')->whereType($type)->with('post_author')->take(3)->get();
	}

	public function findBySlug($slug)
	{
		return Post::whereSlug($slug)->with('post_author')->with('gallery')->firstOrFail();
	}

}