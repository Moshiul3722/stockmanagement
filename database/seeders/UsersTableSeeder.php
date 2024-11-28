<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([

            // admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123'),
                'role' => 'admin',
                'status' => 'active'
            ],

            // customer
            [
                'name' => 'Customer',
                'username' => 'customer',
                'email' => 'customer@gmail.com',
                'password' => bcrypt('123'),
                'role' => 'customer',
                'status' => 'active'
            ],

            // user
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123'),
                'role' => 'user',
                'status' => 'active'
            ],

        ]);
    }
}
