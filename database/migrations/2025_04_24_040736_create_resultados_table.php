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
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();

            $table->string('correo_electronico',length:100);
            $table->string('correo_institucional',length:100);
            $table->string('nombres',length:100);
            $table->string('apellidos',length:100);
            $table->string('no_control',length:20);
            $table->string('no_telefono',length:20);
            $table->string('carrera',length:100);
            $table->string('nivel',length:50);
            $table->string('turno',length:100);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados');
    }
};
