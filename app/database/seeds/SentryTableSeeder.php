<?php

class SentryTableSeeder extends Seeder {

	public function run()
	{

		DB::table('users')->delete();
    DB::table('groups')->delete();
    DB::table('users_groups')->delete();

    Sentry::getUserProvider()->create(array(
      'email'				=> 'podpora@n3.si',
      'password'    => "Web.p0tica.admin",
      'first_name'  => 'N3',
      'last_name'   => 'Administrator',
      'activated'   => 1,
    ));

    Sentry::getUserProvider()->create(array(
      'email'       => 'leon@n3.si',
      'password'    => "Web.p0tica.admin",
      'first_name'  => 'Leon',
      'last_name'   => 'Papež',
      'activated'   => 1,
    ));

    Sentry::getUserProvider()->create(array(
      'email'       => 'lovro@n3.si',
      'password'    => "Web.p0tica.admin",
      'first_name'  => 'Lovro',
      'last_name'   => 'Papež',
      'activated'   => 1,
    ));

    Sentry::getUserProvider()->create(array(
      'email'       => 'martin@n3.si',
      'password'    => "Web.p0tica.admin",
      'first_name'  => 'Martin',
      'last_name'   => 'Špringer',
      'activated'   => 1,
    ));

    Sentry::getUserProvider()->create(array(
      'email'       => 'sasa@n3.si',
      'password'    => "Web.p0tica.admin",
      'first_name'  => 'Saša',
      'last_name'   => 'Mlekuž',
      'activated'   => 1,
    ));

    Sentry::getUserProvider()->create(array(
      'email'       => 'vanja@n3.si',
      'password'    => "Web.p0tica.admin",
      'first_name'  => 'Vanja',
      'last_name'   => 'Lukšič',
      'activated'   => 1,
    ));

    Sentry::getGroupProvider()->create(array(
      'name'        => 'Administrators'
    ));

    // Assign user permissions
    $adminUser  = Sentry::getUserProvider()->findByLogin('podpora@n3.si');
    $leonUser  = Sentry::getUserProvider()->findByLogin('leon@n3.si');
    $lovroUser  = Sentry::getUserProvider()->findByLogin('lovro@n3.si');
    $martinUser  = Sentry::getUserProvider()->findByLogin('martin@n3.si');
    $sasaUser  = Sentry::getUserProvider()->findByLogin('sasa@n3.si');
    $vanjaUser  = Sentry::getUserProvider()->findByLogin('vanja@n3.si');
    $adminGroup = Sentry::getGroupProvider()->findByName('Administrators');
    $adminUser->addGroup($adminGroup);
    $leonUser->addGroup($adminGroup);
    $lovroUser->addGroup($adminGroup);
    $martinUser->addGroup($adminGroup);
    $sasaUser->addGroup($adminGroup);
    $vanjaUser->addGroup($adminGroup);

	}

}
