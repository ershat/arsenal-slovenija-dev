<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('type', 16)->default('news');
			$table->string('title', 128);
			$table->string('slug', 128)->unique();
			$table->string('subtitle', 256)->nullable();
			$table->string('summary', 512)->nullable();
			$table->text('content');
			$table->string('photo', 512)->nullable();
			$table->string('tags', 256)->nullable();
			$table->integer('author');
			$table->string('author_alias', 64)->nullable();
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
		Schema::drop('posts');
	}

}
