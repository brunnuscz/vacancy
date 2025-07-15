<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'bruno',
            'email' => 'bruno@gmail.com',
            'password' => '$2y$10$vwrCJ2LEH8SfK0dMr2zV1udOqCmGgJY5PU2UqgDMMI2LyyeZR/0yC',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}