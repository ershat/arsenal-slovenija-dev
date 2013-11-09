<?php namespace Website\Repositories;

use Backend\Models\MatchSnippet;

class DbMatchSnippetRepository implements MatchSnippetRepositoryInterface {

	public function getLast()
	{
		return MatchSnippet::whereMatchType('last')->first();
	}

	public function getNext()
	{
		return MatchSnippet::whereMatchType('next')->first();
	}
	
}