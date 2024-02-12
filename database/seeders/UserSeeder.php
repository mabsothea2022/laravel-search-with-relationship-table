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
            'name' => 'Aliya',
            'email' => 'aliya@gmail.com',
            'password' => bcrypt('password',)
        ]);
        User::create([
            'name' => 'Adam Smit',
            'email' => 'smith@gmail.com',
            'password' => bcrypt('password',)
        ]);
        User::create([
            'name' => 'Tung Ku',
            'email' => 'tungku@gmail.com',
            'password' => bcrypt('password',)
        ]);
    }
}
