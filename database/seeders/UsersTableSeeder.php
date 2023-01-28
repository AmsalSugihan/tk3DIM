<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'name' => 'Mr. Junk',
            'email' => 'junk@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 1
     ]);
     
     \App\Models\User::create([
            'name' => 'Mr. Jenkin',
            'email' => 'jenkin@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 2
     ]);
     
     \App\Models\User::create([
            'name' => 'Miss. Puff',
            'email' => 'puff@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 2
     ]);     
    }
}
