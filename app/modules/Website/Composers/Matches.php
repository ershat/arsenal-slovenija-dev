<?php namespace Website\Composers;

use Website\Services\Match\Repository;

class Matches {

	protected $match;

	public function __construct(Repository $match)
	{
		$this->match = $match;
	}

	public function compose($view)
	{
		$view->with('last', $this->match->last())->with('next', $this->match->next());
	}

}