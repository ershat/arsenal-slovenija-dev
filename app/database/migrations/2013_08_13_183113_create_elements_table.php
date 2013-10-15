<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('elements', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('parent_id')->nullable();
      $table->integer('lft')->nullable();
      $table->integer('rgt')->nullable();
      $table->integer('depth')->nullable();

			$table->integer('active')->default(1);
			$table->string('name', 32);
			$table->string('data', 32);
			$table->string('type', 16)->default('default');
			$table->string('comment', 256)->nullable();

			// Permissions
			$table->text('read')->nullable();
			$table->text('write')->nullable();
			$table->text('destroy')->nullable();
			$table->text('deny')->nullable();

			$table->integer('creator');
			$table->integer('updator');
			//$table->softDeletes();
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
		Schema::drop('elements');
	}

}
