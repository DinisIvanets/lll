<?php

namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Aluno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
{
    return [
        'student_name' => $this->faker->name,
        'student_age' => $this->faker->numberBetween(18, 30),
        'email' => $this->faker->unique()->safeEmail, // Adiciona um e-mail fictício
    ];
}
}