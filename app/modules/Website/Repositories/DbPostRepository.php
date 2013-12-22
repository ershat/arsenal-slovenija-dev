<?php namespace Website\Repositories;

use Backend\Models\Post as Post;
use Request;

class DbPostRepository implements PostRepositoryInterface {

	public function getPaginated($itemNo, $type = 'news')
	{
		var_dump($type);

		$results = Post::orderBy('created_at', 'desc')->whereType($type)->with('post_author');
		$keyword = Request::get('q');

		if (Request::has('q')){
			$results = $results->search(Request::get('q'));			
		}

		return $results->skipToNumber(3)->paginate($itemNo);
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