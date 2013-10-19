<?php namespace Website\Repositories;

interface	PostRepositoryInterface {
	public function getPaginated($itemNo);
	public function findBySlug($slug);
}