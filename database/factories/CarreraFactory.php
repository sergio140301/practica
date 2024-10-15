<?php

namespace Database\Factories;

use App\Models\Depto;
use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\carrera>
 */
class CarreraFactory extends Factory
{
    protected $model = carrera::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idCarrera' =>fake()->unique()->bothify('###???????'),
            'nombreCarrera' =>fake()->unique()->words(5, true),
            'nombreMediano' =>fake()->unique()->word(),
            'nombreCorto' =>fake()->unique()->lexify('?????'),
            'depto_id' => Depto::factory(),
        ];
    }
}
