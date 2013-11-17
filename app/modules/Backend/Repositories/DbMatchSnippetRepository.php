<?php namespace Backend\Repositories;

use Backend\Models\MatchSnippet;

class DbMatchSnippetRepository implements MatchSnippetRepositoryInterface {

	public function findById($id)
	{
		return MatchSnippet::find($id);
	}

	public function updateSingle($name, $value, $id)
	{
		$page = MatchSnippet::find($id);

		if ($name == 'home_goals' or $name == 'away_goals') {
			$page->{$name} = strip_tags(trim($value));
		} else {
			$page->{$name} = $value;
		}
		
		return $page->save();	
	}
	
}