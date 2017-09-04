<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user1@email.com',
            'email' => 'user1@email.com',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'user2@email.com',
            'email' => 'user2@email.com',
            'first_name' => 'Apple',
            'last_name' => 'Seed',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'user3@email.com',
            'email' => 'user3@email.com',
            'first_name' => 'John',
            'last_name' => 'Smith',
            'password' => bcrypt('secret'),
        ]);
    }
}
