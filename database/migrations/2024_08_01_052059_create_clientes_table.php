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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 'name' como clave primaria
            $table->string('email')->unique(); // 'email' debe ser único
            $table->string('phone'); // 'phone' como una cadena de texto
            $table->string('address'); // 'address' como una cadena de texto
            $table->timestamps();
        });
    }

    /**s
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
