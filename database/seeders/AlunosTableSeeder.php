<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alunos')->insert([
            ['student_name' => 'João Silva', 'student_age' => 18],
            ['student_name' => 'Maria Santos', 'student_age' => 20],
            ['student_name' => 'Carlos Pereira', 'student_age' => 22],
        ]);
    }
}
