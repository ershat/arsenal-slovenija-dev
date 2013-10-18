<?php namespace Backend\Composers;

use Backend\Repositories\PostRepositoryInterface;

class PostsFormComposer {

	protected $post;

	public function __construct(postRepositoryInterface $post)
	{
		$this->post = $post;
	}

	public function compose($view)
	{
		$view->with('postTypes', array(
			'news' => 'news',
			'report' => 'report'
		));
	}

}