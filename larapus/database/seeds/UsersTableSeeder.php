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
        $user= User::create([
        	'name'=>'Wahyu Firmansyah',
        	'email'=>'wahyu@larapus.com',
        	'password'=>bcrypt('123456'),
        ]);
    }
}
