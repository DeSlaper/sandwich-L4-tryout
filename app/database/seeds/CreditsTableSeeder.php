<?php

class CreditsTableSeeder extends Seeder {

	public function run()
	{
		DB::Table('delete');

		Credit::create([
			'saldo'   => 50.00,
			'user_id' => 1,
		],
		[
			'saldo'   => 75.00,
			'user_ud' => 2,
		]);

		$this->command->info('Seeded some credits. Super effective!');
	}
}