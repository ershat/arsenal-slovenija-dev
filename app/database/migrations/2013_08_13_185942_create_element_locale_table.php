<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('element_locale', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('element_id');
			$table->string('locale', 3)->nullable();
			$table->string('title', 128);
			$table->string('slug', 128);
			$table->string('comment', 256)->nullable();
			$table->integer('creator');
			$table->integer('updator');
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
		Schema::drop('element_locale');
	}

}
