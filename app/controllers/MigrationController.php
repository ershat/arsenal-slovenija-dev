<?php 

class MigrationController extends BaseController
{

	public function show()
	{
		$besedila = Migration\Besedila::all();

		var_dump($besedila->toArray());
	}

}