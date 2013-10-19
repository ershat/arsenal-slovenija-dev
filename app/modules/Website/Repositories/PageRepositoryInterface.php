<?php namespace Website\Repositories;

interface	PageRepositoryInterface {
	public function getAll();
	public function getRoot();
	public function findBySlug($slug);
}