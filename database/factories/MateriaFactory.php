<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materia>
 */
class MateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idMateria' => fake()->unique()->bothify('M######'), 
            'nombreMateria' => fake()->sentence(3), 
            'nivel' => fake()->randomElement(['L', 'S']), 
            'nombreMediano' => fake()->word(), 
            'nombreCorto' => fake()->lexify('???????'), 
            'modalidad' => fake()->randomElement(['V', 'M']), 
            'carrera_id' => Carrera::inRandomOrder()->first()->id, 
        ];
    }
}
