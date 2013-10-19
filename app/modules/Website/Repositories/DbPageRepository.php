<?php namespace Website\Repositories;

use Backend\Models\Page as Page;

class DbPageRepository implements PageRepositoryInterface {

	public function getAll()
	{
		return Page::all();
	}

	public function getRoot()
	{
		return Page::whereNull('parent_id')->orderBy('position')->get();
	}

	public function findBySlug($slug)
	{
		return Page::whereSlug($slug)->with('children')->firstOrFail();
	}
	
}