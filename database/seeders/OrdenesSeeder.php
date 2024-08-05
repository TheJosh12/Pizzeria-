<?php

namespace Database\Seeders;

use App\Models\Ordenes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ordenes::factory()->count(10)->create();
    }
}
