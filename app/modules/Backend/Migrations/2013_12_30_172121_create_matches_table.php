<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matches', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('home_team', 64);
			$table->string('home_team_image', 128);
			$table->integer('home_goals')->default(0);
			$table->string('away_team', 64);
			$table->string('away_team_image', 128);
			$table->integer('away_goals')->default(0);
			$table->string('season')->nullable();
			$table->timestamp('time')->default('0000-00-00 00:00:00');
			$table->string('competition', 8);
			$table->string('slug', 100)->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('matches');
	}

}
