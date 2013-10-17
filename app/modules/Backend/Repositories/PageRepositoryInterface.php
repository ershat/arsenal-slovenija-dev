<?php namespace Backend\Repositories;

interface	PageRepositoryInterface {
	public function getAll();
	public function findById($id);
}