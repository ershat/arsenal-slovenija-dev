<?php namespace Backend\Repositories;

use Backend\Models\Post as Post;
use Backend\Services\ImageUploadService as ImageUpload;

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

	public function createNew($input, $file = null)
	{

		if (isset($file)) {
			$input['photo'] = ImageUpload::make(public_path().'/images/posts/', $file);
		}

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