<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_locale', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('media_text_id');
			$table->string('title', 256);
			$table->string('comment', 512)->nullable();
			$table->string('locale', 3)->nullable();
			$table->integer('creator');
			$table->integer('updator');
			$table->softDeletes();
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
		Schema::drop('media_locale');
	}

}
