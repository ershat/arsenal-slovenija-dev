<?php namespace Backend\Repositories;

use Backend\Models\Page as Page;
use Backend\Services\PageManipulatorService as PMS;

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

	public function create($input)
	{
		return PMS::create($input);
	}

	public function update($input, $id)
	{
		return PMS::update($input, $id);
	}

	public function updateSingle($name, $value, $id)
	{
		return PMS::updateSingle($name, $value, $id);
	}

}