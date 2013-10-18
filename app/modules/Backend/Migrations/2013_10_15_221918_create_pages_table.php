<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('parent_id')->nullable();
			$table->integer('position')->default(0);
			$table->string('title', 128);
			$table->string('slug', 128)->unique();
			$table->string('subtitle', 256)->nullable();
			$table->string('summary', 512)->nullable();
			$table->string('template', 150);
			$table->text('content');
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
		Schema::drop('pages');
	}

}
