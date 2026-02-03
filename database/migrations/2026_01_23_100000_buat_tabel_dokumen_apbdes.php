<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration untuk membuat tabel dokumen APBDes
 * Tabel ini menyimpan informasi dokumen Anggaran Pendapatan dan Belanja Desa
 */
return new class extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel
     */
    public function up(): void
    {
        Schema::create('dokumen_apbdes', function (Blueprint $table) {
            $table->id();
            $table->string('judul');                    // Judul dokumen
            $table->integer('tahun_anggaran');          // Tahun anggaran (contoh: 2024)
            $table->enum('jenis_dokumen', [             // Jenis dokumen APBDes
                'apbdes_induk',
                'perubahan_apbdes',
                'laporan_realisasi'
            ])->default('apbdes_induk');
            $table->text('deskripsi')->nullable();      // Deskripsi singkat dokumen
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
        Schema::dropIfExists('dokumen_apbdes');
    }
};
