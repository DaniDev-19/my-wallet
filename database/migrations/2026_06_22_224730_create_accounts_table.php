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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('plataforma');
            $table->string('categoria')->default('Otros');
            $table->text('usuario')->nullable(); 
            $table->text('email')->nullable();
            $table->text('password')->nullable();
            $table->text('url_acceso')->nullable(); 
            $table->text('descripcion')->nullable();
            $table->boolean('es_activa')->default(true);
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
