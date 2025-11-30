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
        Schema::create('submateri', function (Blueprint $table) {
            $table->id();
            $table->integer('urutan');
            $table->string('judul');
            $table->enum('status', ['pending', 'diterima', 'ditolak', 'dinonaktifkan'])->default('pending');
            $table->foreignId('dokumenId')->constrained('dokumen')->onDelete('cascade');
            $table->foreignId('videoId')->constrained('video')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submateri');
    }
};
