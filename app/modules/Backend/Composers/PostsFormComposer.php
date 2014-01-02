<?php namespace Backend\Composers;

use Backend\Repositories\PostRepositoryInterface;
use Backend\Repositories\MatchRepositoryInterface;

class PostsFormComposer {

	protected $post;
	protected $match;

	public function __construct(PostRepositoryInterface $post, MatchRepositoryInterface $match)
	{
		$this->post = $post;
		$this->match = $match;
	}

	public function compose($view)
	{
		$view->with('postTypes', array(
			'news' => 'news',
			'report' => 'report',
			'legends' => 'legends'
		));

		// Matches
		$view->with('matches', $this->match->getFirstLatest(30));

	}

}