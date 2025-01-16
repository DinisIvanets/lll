<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatriculasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matriculas')->insert([
            ['course_id' => 1, 'student_id' => 1], // João Silva matriculado no curso 1
            ['course_id' => 2, 'student_id' => 2], // Maria Santos matriculada no curso 2
            ['course_id' => 1, 'student_id' => 3], // Carlos Pereira matriculado no curso 1
        ]);
    }
}
