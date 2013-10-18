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

	public function getRoot()
	{
		return Page::whereNull('parent_id')->orderBy('position')->with('children')->get();
	}

	public function getAllSelect()
	{
		$pages = Page::lists('title','id');
		$pages[''] = '[none]';
		return $pages;
	}

	public function findById($id)
	{
		return Page::find($id);
	}

	public function createNew($input)
	{
		if (empty($input['parent_id'])) {
			$input['parent_id'] = null;
		}

		$page = Page::create($input);

		return $page;
	}

	public function updateExisting($input, $id)
	{
		$page = Page::find($id);

		if (empty($input['parent_id'])) {
			$input['parent_id'] = null;
		}

		$page->update($input);

		return $page;
	}

}