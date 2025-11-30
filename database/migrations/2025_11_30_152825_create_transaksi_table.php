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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('bukti_transaksi');
            $table->enum('status', ['pending', 'diterima', 'ditolak'])->default('pending');
            $table->foreignId('kelasId')->constrained('kelas')->onDelete('cascade');
            $table->foreignId('keranjangId')->constrained('keranjang')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
