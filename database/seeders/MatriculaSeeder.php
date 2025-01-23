<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matricula;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matricula::factory()->count(200)->create(); // Cria 200 registros de matrículas
    }
}