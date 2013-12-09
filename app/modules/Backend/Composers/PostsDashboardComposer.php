<?php namespace Backend\Composers;

use Backend\Repositories\PostRepositoryInterface;

class PostsDashboardComposer {

	protected $post;

	public function __construct(PostRepositoryInterface $post)
	{
		$this->post = $post;
	}

	public function compose($view)
	{
		$view->withPosts($this->post->getLastPosts());
	}

}