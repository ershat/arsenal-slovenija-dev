<?php namespace Backend\Repositories;

interface	MatchRepositoryInterface {
	public function getPaginated($itemNo);
	public function getAll();
	public function getAllReversed();
	public function findById($id);

	public function create($input);
	public function update($input, $id);
}