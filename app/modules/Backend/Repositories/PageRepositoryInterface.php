<?php namespace Backend\Repositories;

interface	PageRepositoryInterface {
	public function getAll();
	public function getAllReversed();
	public function findById($id);

	public function createNew($input);
}