<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchSnippetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('match_snippets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('home_team', 64);
			$table->string('home_team_image', 128);
			$table->integer('home_goals')->default(0);
			$table->string('away_team', 64);
			$table->string('away_team_image', 128);
			$table->integer('away_goals')->default(0);
			$table->string('match_date', 256)->nullable();
			$table->string('match_type', 8);
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
		Schema::drop('match_snippets');
	}

}
