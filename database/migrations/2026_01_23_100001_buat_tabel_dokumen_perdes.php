<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration untuk membuat tabel dokumen PerDes (Peraturan Desa)
 * Tabel ini menyimpan informasi peraturan desa yang berlaku
 */
return new class extends Migration {
    /**
     * Jalankan migration untuk membuat tabel
     */
    public function up(): void
    {
        Schema::create('dokumen_perdes', function (Blueprint $table) {
            $table->id();
            $table->string('judul');                    // Judul peraturan desa
            $table->string('nomor_peraturan');          // Nomor peraturan (contoh: "01/PerDes/2024")
            $table->integer('tahun');                   // Tahun peraturan ditetapkan
            $table->text('deskripsi')->nullable();      // Deskripsi singkat peraturan
            $table->string('link_google_drive');        // Link menuju file di Google Drive
            $table->boolean('aktif')->default(true);    // Status aktif/nonaktif dokumen
            $table->timestamps();
        });
    }

    /**
     * Batalkan migration (hapus tabel)
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_perdes');
    }
};
