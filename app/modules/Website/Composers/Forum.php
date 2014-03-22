<?php namespace Website\Composers;

use Website\Services\Forum\Repository;

class Forum {

	/**
	 * Forum repository
	 * @var string
	 */
	protected $forum;

	/**
	 * __construct
	 * @param Repository $forum 
	 */
	public function __construct(Repository $forum)
	{
		$this->forum = $forum;
	}

	/**
	 * Compose
	 * @param  View $view 
	 * @return void 
	 */
	public function compose($view)
	{
		$view->with('forumPosts', $this->forum->get(10));
	}

}