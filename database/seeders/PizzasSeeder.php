<?php

namespace Database\Seeders;

use App\Models\Pizzas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PizzasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pizzas::factory()->count(10)->create();
    }
}
