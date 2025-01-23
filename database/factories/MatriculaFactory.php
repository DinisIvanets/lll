<?php

namespace Database\Factories;

use App\Models\Matricula;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatriculaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Matricula::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'aluno_id' => $this->faker->numberBetween(1, 200), // Gera um ID de aluno entre 1 e 200
            'curso_id' => $this->faker->numberBetween(1, 200), // Gera um ID de curso entre 1 e 200
            'data_matricula' => $this->faker->date(), // Gera uma data fictícia
        ];
    }
}