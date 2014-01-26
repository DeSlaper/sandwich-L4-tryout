<?php

use Illuminate\Database\Migrations\Migration;

class ExtendUsersWithNamesAndAFewMore extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
		{
			$table->string('name');
			$table->string('email');
			$table->boolean('active');
			$table->boolean('can_order');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Well... What goes up, must come down...
		Schema::table('users', function($table)
		{
			$table->dropColumn('name', 'email', 'active', 'can_order');
		});
	}

}