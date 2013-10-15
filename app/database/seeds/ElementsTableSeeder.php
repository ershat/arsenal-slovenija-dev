<?php 

class ElementsTableSeeder extends Seeder {

	public function run()
	{

		DB::table('elements')->delete();

		// Create a root element
		$root = Neo\Element::create(array(
			'name' => 'Root',
			'data' => 'root',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		// Level 1
		$system = $root->children()->create(array(
			'name' => 'System',
			'data' => 'system',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$web = $root->children()->create(array(
			'name' => 'Web',
			'data' => 'web',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$codes = $root->children()->create(array(
			'name' => 'Codes',
			'data' => 'codes',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		// Level 2 - System
		$administration = $system->children()->create(array(
			'name' => 'Administration',
			'data' => 'administration',
			'type' => 'group',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		// Level 3 - Administration
		$administration->children()->create(array(
			'name' => 'Elements',
			'data' => 'elements',
			'type' => 'link',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$administration->children()->create(array(
			'name' => 'Texts',
			'data' => 'texts',
			'type' => 'link',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$administration->children()->create(array(
			'name' => 'Media',
			'data' => 'media',
			'type' => 'link',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$administration->children()->create(array(
			'name' => 'Templates',
			'data' => 'templates',
			'type' => 'link',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$userManagement = $administration->children()->create(array(
			'name' => 'User management',
			'data' => 'user-management',
			'type' => 'group',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$administration->children()->create(array(
			'name' => 'Locale',
			'data' => 'locale',
			'type' => 'link',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		// Level 3 - User management
		$userManagement->children()->create(array(
			'name' => 'Groups',
			'data' => 'groups',
			'type' => 'link',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$userManagement->children()->create(array(
			'name' => 'Users',
			'data' => 'users',
			'type' => 'link',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		// Level 2 - Codes
		$templatePositions = $codes->children()->create(array(
			'name' => 'Template positions',
			'data' => 'tplpos',
			'type' => 'code-group',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$textTypes = $codes->children()->create(array(
			'name' => 'Text types',
			'data' => 'txttype',
			'type' => 'code-group',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$locales = $codes->children()->create(array(
			'name' => 'Locales',
			'data' => 'locales',
			'type' => 'code-group',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		// Level 3 - Template positions
		$templatePositions->children()->create(array(
			'name' => 'Top',
			'data' => 'top',
			'type' => 'code',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$templatePositions->children()->create(array(
			'name' => 'Main',
			'data' => 'main',
			'type' => 'code',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));		

		$templatePositions->children()->create(array(
			'name' => 'Left',
			'data' => 'left',
			'type' => 'code',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$templatePositions->children()->create(array(
			'name' => 'Center',
			'data' => 'center',
			'type' => 'code',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$templatePositions->children()->create(array(
			'name' => 'Right',
			'data' => 'right',
			'type' => 'code',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$templatePositions->children()->create(array(
			'name' => 'Bottom',
			'data' => 'bottom',
			'type' => 'code',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		// Level 3 - Text types
		$textTypes->children()->create(array(
			'name' => 'Page',
			'data' => 'page',
			'type' => 'code',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$textTypes->children()->create(array(
			'name' => 'News',
			'data' => 'news',
			'type' => 'code',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));		

		// Level 3 - Locales
		$locales->children()->create(array(
			'name' => 'English',
			'data' => 'en',
			'type' => 'code',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));

		$locales->children()->create(array(
			'name' => 'Slovensko',
			'data' => 'si',
			'type' => 'code',
			'creator' => 1,
			'updator' => 1,
			'read' => '{"groups":[],"users":[]}',
			'write' => '{"groups":[],"users":[]}',
			'destroy' => '{"groups":[],"users":[]}',
			'deny' => '{"groups":[],"users":[]}',
		));				

	}

}