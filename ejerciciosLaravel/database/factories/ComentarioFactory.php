<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pedidos_id' => $this->faker->unique()->numberBetween(1,10),
            'autor' => $this->faker->unique()->name(),
            'contenido' => $this->faker->sentence(),
            'fecha' => $this->faker->date('d-m-Y')
        ];
    }
}
