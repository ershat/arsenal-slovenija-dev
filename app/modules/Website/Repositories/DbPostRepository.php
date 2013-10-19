<?php namespace Website\Repositories;

use Backend\Models\Post as Post;

class DbPostRepository implements PostRepositoryInterface {

	public function getPaginated($itemNo)
	{
		return Post::orderBy('created_at', 'desc')->paginate($itemNo);
	}

	public function findBySlug($slug)
	{
		return Post::whereSlug($slug)->first();
	}

}