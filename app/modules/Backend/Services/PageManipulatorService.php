<?php namespace Backend\Services;

use Backend\Repositories\PageRepositoryInterface;
use Backend\Models\Page as Page;


class PageManipulatorService {

	protected $page;

	public function __construct(PageRepositoryInterface $page)
	{
		$this->page = $page;
	}

	public static function create($input)
	{
		if (empty($input['parent_id'])) {
			$input['parent_id'] = null;
		}

		$page = Page::create($input);

		return $page;
	}

	public static function update($input, $id)
	{
		$page = Page::find($id);

		if (empty($input['parent_id'])) {
			$input['parent_id'] = null;
		}

		$page->update($input);

		return $page;
	}

	public static function updateSingle($name, $value, $id)
	{
		$page = Page::find($id);
		$page->{$name} = $value;

		return $page->save();
	}

}