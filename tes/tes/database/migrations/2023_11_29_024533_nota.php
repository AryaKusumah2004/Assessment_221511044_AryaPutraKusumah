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
        Schema::create('notas', function (Blueprint $table) {
            $table->bigInteger('KodeNota');
            $table->bigInteger('KodeTenan');
            $table->bigInteger('KodeKasir');
            $table->date('TglNota');
            $table->dateTime('JamNota');
            $table->integer('JumlahBarang');
            $table->integer('Diskon');
            $table->integer('Total');

            $table->primary(['KodeNota', 'KodeTenan', 'KodeKasir'], 'notas_primary_key');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
