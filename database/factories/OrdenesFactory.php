<?php

namespace Database\Factories;

use App\Models\Clientes;
use App\Models\Pizzas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ordenes>
 */
class OrdenesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
   

        return [
            
            'cantidad' => $this->faker->numberBetween(1, 10),
            'total' => $this->faker->randomFloat(2, 10, 100),
            'estado' => $this->faker->randomElement(['pendiente', 'completado', 'cancelado']),
            'fecha' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
