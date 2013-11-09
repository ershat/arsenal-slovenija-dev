<?php namespace Website\Composers;

use Website\Repositories\ForumRepositoryInterface;

class WebsiteForumComposer {

	protected $matchSnippet;

	public function __construct(ForumRepositoryInterface $forum)
	{
		$this->forum = $forum;
	}

	public function compose($view)
	{
		$view->with('forumPosts', $this->forum->getPosts());
	}

}