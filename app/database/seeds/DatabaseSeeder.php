<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// Seed the user table
		$this->call('UserTableSeeder');

		// Seed the credits table
		$this->call('CreditsTableSeeder');

	}

}