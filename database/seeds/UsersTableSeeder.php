<?php

use Illuminate\Database\Seeder;

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
            [
                'name'     => 'User 1',
                'email'    => 'user1@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name'     => 'User 2',
                'email'    => 'user2@gmail.com',
                'password' => bcrypt('secret'),   
            ]
        ]);
    }
}
