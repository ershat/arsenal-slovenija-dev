<?php namespace Backend\Composers;

use Backend\Repositories\MatchRepositoryInterface;

class MatchesSidebarComposer {

	protected $match;

	public function __construct(MatchRepositoryInterface $match)
	{
		$this->match = $match;
	}

	public function compose($view)
	{
		$view->withMatches($this->match->getPaginated(10));
	}

}