<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuthorCreationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('author_creation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('author_id')->unsigned()->index();
			$table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
			$table->integer('creation_id')->unsigned()->index();
			$table->foreign('creation_id')->references('id')->on('creations')->onDelete('cascade');
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
		Schema::drop('author_creation');
	}

}
