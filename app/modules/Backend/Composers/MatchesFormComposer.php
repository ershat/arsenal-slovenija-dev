<?php namespace Backend\Composers;

use Backend\Repositories\MatchRepositoryInterface;

class MatchesFormComposer {

	protected $match;

	public function __construct(MatchRepositoryInterface $match)
	{
		$this->match = $match;
	}

	public function compose($view)
	{

		$view->with('seasons', array(
			'2013/14' => '2013/14',
			'2014/15' => '2014/15'
		));

		$view->with('competitions', array(
			'FA Cup' => 'fa-cup',
			'Premier League' => 'premier-league',
			'Champions League' => 'champions-league',
			'League Cup' => 'league-cup', 
			'Friendly' => 'friendly'
		));

	}

}