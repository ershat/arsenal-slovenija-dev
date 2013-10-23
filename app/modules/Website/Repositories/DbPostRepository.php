<?php namespace Website\Repositories;

use Backend\Models\Post as Post;

class DbPostRepository implements PostRepositoryInterface {

	public function getPaginated($itemNo)
	{
		return Post::orderBy('created_at', 'desc')->with('post_author')->paginate($itemNo);
	}

	public function findBySlug($slug)
	{
		return Post::whereSlug($slug)->with('post_author')->first();
	}

}