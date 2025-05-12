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
     Schema::create('grupos_confirmados', function (Blueprint $table) {
    $table->id();
    $table->string('nombres');
    $table->string('apellidos');
    $table->string('no_control')->nullable();
    $table->string('no_telefono')->nullable();
    $table->string('nivel')->nullable();
    $table->string('turno'); // Matutino o Vespertino
    $table->string('folio')->nullable(); // lo pondrá el admin luego
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo_confirmados');
    }
};
