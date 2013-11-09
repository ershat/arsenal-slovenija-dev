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
		$page->{$name} = $value;

		return $page->save();	
	}
	
}