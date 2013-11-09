<?php namespace Website\Composers;

use Website\Repositories\MatchSnippetRepositoryInterface;

class WebsiteMatchesComposer {

	protected $matchSnippet;

	public function __construct(MatchSnippetRepositoryInterface $matchSnippet)
	{
		$this->matchSnippet = $matchSnippet;
	}

	public function compose($view)
	{
		$view->with('last', $this->matchSnippet->getLast())->with('next', $this->matchSnippet->getNext());
	}

}