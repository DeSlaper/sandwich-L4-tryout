<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('amount');
			$table->integer('credits_id')
			      ->unsigned();
			$table->integer('user_id')
			      ->unsigned();

			$table->integer('action_by_user_id')
			      ->unsigned();

			// Just in case we want to implement refunds
			$table->boolean('refund');
			$table->timestamps();

			$table->foreign('credits_id')
			      ->references('id')
			      ->on('credits')
			      ->onDelete('cascade');

			$table->foreign('user_id')
			      ->references('id')
			      ->on('users');

			$table->foreign('action_by_user_id')
			      ->references('id')
			      ->on('users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transactions');
	}

}
