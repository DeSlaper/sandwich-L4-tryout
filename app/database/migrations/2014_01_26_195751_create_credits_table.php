<?php

use Illuminate\Database\Migrations\Migration;

class CreateCreditsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('credits', function($table)
		{
			$table->increments('id');
			$table->integer('saldo');
			$table->integer('user_id')
			      ->unsigned();

			$table->timestamps();

			// Add a fk contraint to the user id
			$table->foreign('user_id')
			      ->references('id')
			      ->on('users')
			      ->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('credits');
	}

}