<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration untuk membuat tabel informasi desa
 * Tabel ini menyimpan pengaturan dan informasi umum desa (key-value)
 */
return new class extends Migration {
    /**
     * Jalankan migration untuk membuat tabel
     */
    public function up(): void
    {
        Schema::create('informasi_desa', function (Blueprint $table) {
            $table->id();
            $table->string('kunci')->unique();          // Kunci pengaturan (contoh: 'nama_desa')
            $table->longText('nilai')->nullable();      // Nilai pengaturan
            $table->string('deskripsi')->nullable();    // Deskripsi untuk admin
            $table->timestamps();
        });
    }

    /**
     * Batalkan migration (hapus tabel)
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_desa');
    }
};
