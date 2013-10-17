<?php namespace Backend\Repositories;

use Backend\Models\Page as Page;

class DbPageRepository implements PageRepositoryInterface {

	public function getAll()
	{
		return Page::all();
	}

	public function findById($id)
	{
		return Page::find($id);
	}

}