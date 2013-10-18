<?php namespace Backend\Repositories;

use Backend\Models\Post as Post;

class DbPostRepository implements PostRepositoryInterface {

	public function getPaginated($itemNo)
	{
		return Post::orderBy('created_at', 'desc')->paginate($itemNo);
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

	public function createNew($input)
	{
		$post = Post::create($input);

		$post->slug .= '-' . $post->id;
		$post->save();

		return $post;
	}

	public function updateExisting($input, $id)
	{
		$post = Post::find($id);

		$post->update($input);

		$post->slug .= '-' . $post->id;
		$post->save();

		return $post;
	}

}