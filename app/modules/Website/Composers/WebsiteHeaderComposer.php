<?php namespace Website\Composers;

use Website\Repositories\PageRepositoryInterface;

class WebsiteHeaderComposer {

	protected $page;

	public function __construct(PageRepositoryInterface $page)
	{
		$this->page = $page;
	}

	public function compose($view)
	{
		$view->with('navigation', $this->page->getRoot());
	}

}