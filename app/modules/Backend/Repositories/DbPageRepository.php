<?php namespace Backend\Repositories;

use Backend\Models\Page as Page;

class DbPageRepository implements PageRepositoryInterface {

	public function getAll()
	{
		return Page::all();
	}

	public function getAllReversed()
	{
		return Page::orderBy('id','desc')->get();
	}

	public function findById($id)
	{
		return Page::find($id);
	}

	public function createNew($input)
	{
		$page = Page::create($input);

		return $page;
	}

	public function updateExisting($input, $id)
	{
		$page = Page::find($id);

		$page->update($input);

		return $page;
	}

}