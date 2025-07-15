<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CanditatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('candidates')->insert([
            'name' => 'Jorge Pereira',
            'skills' => json_encode(["PHP","JavaScript","React","CSS"]),
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('candidates')->insert([
            'name' => 'Luiz Souza',
            'skills' => json_encode(["Laravel","JS","PostgreSQL","Kotlin"]),
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('candidates')->insert([
            'name' => 'Pedro Mateus',
            'skills' => json_encode(["Laravel","JS","Kotlin","CSS"]),
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('candidates')->insert([
            'name' => 'Lucas Silva',
            'skills' => json_encode(["PHP","Laravel","PostgreSQL","Kotlin"]),
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}