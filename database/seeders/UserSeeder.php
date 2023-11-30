<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('customer');

        User::create([
            'name' => 'albi',
            'email' => 'albi@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('customer');

        User::create([
            'name' => 'dimas',
            'email' => 'dimas@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('customer');
    }
}
