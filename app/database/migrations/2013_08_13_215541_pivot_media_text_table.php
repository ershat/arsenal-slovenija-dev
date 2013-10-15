<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotMediaTextTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_text', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('text_id');
			$table->integer('media_id');
			$table->integer('position');
			$table->string('type', 50)->nullable();
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
		Schema::drop('text_media');
	}

}
