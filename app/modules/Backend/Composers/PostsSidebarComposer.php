<?php namespace Backend\Composers;

use Backend\Repositories\PostRepositoryInterface;

class PostsSidebarComposer {

	protected $post;

	public function __construct(PostRepositoryInterface $post)
	{
		$this->post = $post;
	}

	public function compose($view)
	{
		$view->withPosts($this->post->getPaginated(10));
	}

}