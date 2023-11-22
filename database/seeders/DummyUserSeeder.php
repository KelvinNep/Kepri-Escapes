<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin01@gmail.com',
                'password' => bcrypt('123456789'),
                'role' => 'admin',
            ],

            [
                'name' => 'Kelvin',
                'phone' => '08994879433',
                'email' => 'nivlzk050306@gmail.com',
                'password' => bcrypt('123456789'),
                'role' => 'tourguide',
            ],

            [
                'name' => 'Samudra',
                'phone' => '08213211223',
                'email' => 'samudra1@gmail.com',
                'password' => bcrypt('123456789'),
                'role' => 'user',
            ],

            ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }    
}
