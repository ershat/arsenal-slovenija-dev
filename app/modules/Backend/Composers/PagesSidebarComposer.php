<?php namespace Backend\Composers;

use Backend\Repositories\PageRepositoryInterface;

class PagesSidebarComposer {

	protected $page;

	public function __construct(PageRepositoryInterface $page)
	{
		$this->page = $page;
	}

	public function compose($view)
	{
		$view->withPages($this->page->getRoot());
	}

}