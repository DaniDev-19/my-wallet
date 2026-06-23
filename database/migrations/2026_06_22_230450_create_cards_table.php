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
    Schema::create('cards', function (Blueprint $table) {
        $table->id();
        $table->string('banco'); 
        $table->string('nombre_tarjeta'); 
        $table->string('titular'); 
        $table->string('tarjeta_enmascarada', 19); 
        $table->string('franquicia'); 
        $table->text('tarjeta_numero'); 
        $table->text('fecha_vencimiento'); 
        $table->text('cvv');
        $table->text('notas')->nullable(); 
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
