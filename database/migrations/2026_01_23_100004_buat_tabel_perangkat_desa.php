<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration untuk membuat tabel perangkat desa
 * Tabel ini menyimpan data struktur organisasi pemerintahan desa
 */
return new class extends Migration {
    /**
     * Jalankan migration untuk membuat tabel
     */
    public function up(): void
    {
        Schema::create('perangkat_desa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');                     // Nama lengkap perangkat desa
            $table->string('jabatan');                  // Jabatan (contoh: Kepala Desa, Sekretaris)
            $table->string('foto_url')->nullable();     // URL foto profil
            $table->integer('urutan')->default(0);      // Urutan tampil di struktur organisasi
            $table->boolean('aktif')->default(true);    // Status aktif/nonaktif
            $table->timestamps();
        });
    }

    /**
     * Batalkan migration (hapus tabel)
     */
    public function down(): void
    {
        Schema::dropIfExists('perangkat_desa');
    }
};
