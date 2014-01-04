<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('standings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('position');
			$table->string('team');
			$table->integer('played');
			$table->integer('won');
			$table->integer('drawn');
			$table->integer('lost');
			$table->integer('for');
			$table->integer('against');
			$table->integer('points');
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
		Schema::drop('standings');
	}

}
