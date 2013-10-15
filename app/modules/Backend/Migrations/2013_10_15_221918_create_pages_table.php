<?php namespace Backend\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Schema;

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
			$table->string('title', 128);
			$table->string('slug', 128)->unique();
			$table->string('subtitle'. 256);
			$table->string('summary', 512);
			$table->text('content');
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
