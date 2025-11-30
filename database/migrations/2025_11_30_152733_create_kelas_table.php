<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kategori', ['it', 'kuliner']);
            $table->integer('harga')->default(0);
            $table->string('profil');
            $table->string('badge');
            $table->string('deskripsi');
            $table->enum('status', ['draft', 'non-aktif', 'aktif']);
            $table->foreignId('mentorId')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
