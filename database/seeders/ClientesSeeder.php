<?php

namespace Database\Seeders;

use App\Models\Clientes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserta 10 clientes con datos generados aleatoriamente
        Clientes::factory()->count(10)->create();
    }
}
