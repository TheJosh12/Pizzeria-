<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizzas>
 */
class PizzasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => $this->faker->word,  // Utiliza `word` para un nombre de pizza
            'price' => $this->faker->randomFloat(2, 5, 100),  // Precio flotante con 2 decimales entre 5 y 100
            'description' => $this->faker->sentence,  // Utiliza `sentence` para una descripción
            'image' => $this->faker->imageUrl(),  // URL de una imagen
            
        ];
    }
}
