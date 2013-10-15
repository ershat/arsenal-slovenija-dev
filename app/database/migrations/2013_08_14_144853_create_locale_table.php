<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locale', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('keyword', 32);
			$table->string('locale', 3)->nullable();
			$table->text('data');
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
		Schema::drop('locale');
	}

}
