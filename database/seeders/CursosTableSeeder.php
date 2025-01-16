<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('cursos')->insert([
        ['course_name' => 'Matemática'],
        ['course_name' => 'Física'],
        ['course_name' => 'Química'],
    ]);
}

}
