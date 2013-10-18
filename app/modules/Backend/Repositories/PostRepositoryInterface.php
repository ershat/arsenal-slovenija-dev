<?php namespace Backend\Repositories;

interface	PostRepositoryInterface {
	public function getPaginated($itemNo);
	public function getAll();
	public function getAllReversed();
	public function findById($id);

	public function createNew($input);

	public function updateExisting($input, $id);
}