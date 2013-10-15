<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_locale', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('text_id');
			$table->integer('active')->default(1);
			$table->string('title', 256);
			$table->string('slug', 276);
			$table->string('subtitle', 256)->nullable();
			$table->string('summary', 512)->nullable();
			$table->text('data')->nullable();
			$table->string('locale', 3)->nullable();
			$table->string('tags', 512)->nullable();
			$table->string('publish_from', 19)->nullable();
			$table->string('publish_to', 19)->nullable();
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
		Schema::drop('text_locale');
	}

}
