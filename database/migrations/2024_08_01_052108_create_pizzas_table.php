<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); // 'name' como clave primaria
            $table->decimal('price', 8, 2); // Precio con 2 decimales
            $table->text('description'); // Descripción larga
            $table->string('image'); // URL o nombre de archivo de la imagen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzas');
    }
};
