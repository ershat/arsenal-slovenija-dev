<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotElementTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('element_template', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('active')->default(1);
			$table->integer('element_id');
			$table->integer('template_id');
			$table->integer('recursive')->default(0);
			$table->integer('position');
			$table->string('type', 16);
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
		Schema::drop('struct_template');
	}

}
