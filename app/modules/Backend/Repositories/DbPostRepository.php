<?php namespace Backend\Repositories;

use Backend\Models\Post as Post;
use Backend\Services\PostManipulatorService as PMS;

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

	public function create($input, $file = null)
	{
		return PMS::create($input, $file);
	}

	public function update($input, $id, $file = null)
	{
		return PMS::update($input, $id, $file);
	}

	public function updateSingle($name, $value, $id)
	{
		return PMS::updateSingle($name, $value, $id);
	}

}