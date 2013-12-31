<?php namespace Website\Composers;

use Website\Repositories\MatchRepositoryInterface;

class WebsiteMatchesComposer {

	protected $match;

	public function __construct(MatchRepositoryInterface $match)
	{
		$this->match = $match;
	}

	public function compose($view)
	{
		$view->with('last', $this->match->getLast())->with('next', $this->match->getNext());
	}

}