<?php namespace Website\Composers;

use Website\Repositories\PageRepositoryInterface;
use Website\Repositories\PostRepositoryInterface;

class WebsiteJoinUsComposer {

	protected $page;
	protected $post;

	public function __construct(PageRepositoryInterface $page, PostRepositoryInterface $post)
	{
		$this->page = $page;
		$this->post = $post;
	}

	public function compose($view)
	{
		// Kako postati član
		$supportersClub = $this->page->findBySlug('navijaski-klub');
		$becomeMember = $this->page->findBySlug('kako-postati-clan');
		$view->with('becomeMember', $becomeMember)->with('supportersClub', $supportersClub);
	}

}