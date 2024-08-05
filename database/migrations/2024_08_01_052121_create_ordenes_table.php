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
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id(); // ID auto-incremental
           
            $table->integer('cantidad'); // Cantidad de pizzas
            $table->decimal('total', 8, 2); // Total del pedido
            $table->string('estado'); // Estado del pedido
            $table->timestamp('fecha'); // Fecha del pedido
            $table->timestamps();

   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordenes');
    }
};
