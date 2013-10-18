<?php namespace Backend\Composers;

use Backend\Repositories\PageRepositoryInterface;

class PagesFormComposer {

	protected $page;

	public function __construct(PageRepositoryInterface $page)
	{
		$this->page = $page;
	}

	public function compose($view)
	{
		$view->with('pagesSelect', $this->page->getAllSelect());
	}

}