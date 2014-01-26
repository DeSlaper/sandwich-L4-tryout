<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		User::create([
			'id'        => 1,
			'username'  => 'deslaper',
			'password'  => Hash::make('admin'),
			'name'      => 'Ray van B',
			'email'     => 'email@domain.com',
			'active'    => TRUE,
			'can_order' => TRUE,
		]);

		User::create([
			'id'        => 2,
			'username'  => 'rico',
			'password'  => Hash::make('#admin'),
			'name'      => 'Rico van T',
			'email'     => 'email@domain.com',
			'active'    => TRUE,
			'can_order' => TRUE,
		]);

		$this->command->info('User table seeded! Hooray!');
	}

}