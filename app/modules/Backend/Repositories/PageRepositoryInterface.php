<?php namespace Backend\Repositories;

interface	PageRepositoryInterface {
	public function getAll();
	public function getAllReversed();
	public function getAllSelect();
	public function findById($id);

	public function create($input);

	public function update($input, $id);
}