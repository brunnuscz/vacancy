<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VagasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vacancies')->insert([
            'title' => 'Vaga Back-end',
            'local' => 'New York',
            'level' => 'Estágio',
            'type' => 'Remoto',
            'skills' => json_encode(["Django","Kotlin","HTML","PostgreSQL","CSS"]),
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);
        DB::table('vacancies')->insert([
            'title' => 'Vaga Front-end',
            'local' => 'São Paulo',
            'level' => 'Júnior',
            'type' => 'Presencial',
            'skills' => json_encode(["Laravel","JavaScript","PostgreSQL","CSS"]),
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);
        DB::table('vacancies')->insert([
            'title' => 'Vaga Front-end',
            'local' => 'Teresina',
            'level' => 'Sênior',
            'type' => 'Remoto',
            'skills' => json_encode(["Laravel","Kotlin","Django","PHP","JavaScript","PostgreSQL","CSS"]),
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);
    }
}
