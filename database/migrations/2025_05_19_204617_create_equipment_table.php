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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['PC', 'PORTATIL', 'CELULAR', 'ACCESORIO', 'OTRO']);
            $table->string('manufacturer');
            $table->string('model');
            $table->string('serie_number')->unique();
            $table->string('ram');
            $table->string('store');
            $table->enum('state', ['DISPONIBLE', 'ASIGNADO', 'BAJA']);
            $table->date('purchase_date')->nullable();
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
