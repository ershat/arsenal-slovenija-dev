<?php namespace Backend\Repositories;

use Backend\Models\Post as Post;
use Backend\Services\PostManipulatorService as PMS;
use Request;

class DbPostRepository implements PostRepositoryInterface {

	public function getPaginated($itemNo)
	{
		$results = Post::orderBy('created_at', 'desc');
		$keyword = Request::get('q');

		if (Request::has('q')){
			$results = $results->search(Request::get('q'));			
		}

		return $results->paginate($itemNo);
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