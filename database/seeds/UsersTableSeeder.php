<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['username' => 'erritsjoerd',
        				'password' => Hash::make('password'),
        				'email'		=> 'erritsjoerd@hotmail.com',
        				'name' 		=> 'Errit Sjoerd van der Heide'
        ]);
    }
}
