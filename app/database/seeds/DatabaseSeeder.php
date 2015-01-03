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

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        	'fullname' => 'Fabio Vedovelli',
        	'email' => 'vedovelli@gmail.com',
        	'username' => 'vedovelli',
        	'password' => Hash::make('123456'),
        	'city' => 'Santo André',
        	'state' => 'SP',
        ));
    }

}