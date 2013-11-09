<?php 

return array(
	'connections' => array(
		'arsenal.slovenija' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'arsenal.slovenija',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

		'arsenal.slovenija.forum' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'arsenal.slovenija.forum',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => 'ipb_',
		)
	)
);