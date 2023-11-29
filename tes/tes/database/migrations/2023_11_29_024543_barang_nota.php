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
        Schema::create('barang_notas', function (Blueprint $table) {
            $table->bigInteger('KodeNota')->unsigned();
            $table->bigInteger('KodeBarang')->unsigned();
            $table->integer('JumlahBarang');
            $table->integer('HargaSatuan');
            $table->integer('Jumlah');

            // Menetapkan dua kolom sebagai kunci utama gabungan
            $table->primary(['KodeNota', 'KodeBarang'], 'barang_notas_primary_key');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_notas');
    }
};
