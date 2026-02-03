<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration untuk membuat tabel berita desa
 * Tabel ini menyimpan berita, pengumuman, dan informasi kegiatan desa
 */
return new class extends Migration {
    /**
     * Jalankan migration untuk membuat tabel
     */
    public function up(): void
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul');                    // Judul berita
            $table->string('slug')->unique();           // URL-friendly slug
            $table->text('ringkasan')->nullable();      // Ringkasan singkat berita
            $table->longText('konten');                 // Isi lengkap berita
            $table->string('gambar_url')->nullable();   // URL gambar utama
            $table->enum('kategori', [                  // Kategori berita
                'berita',
                'pengumuman',
                'kegiatan'
            ])->default('berita');
            $table->timestamp('tanggal_publikasi')->nullable(); // Tanggal publikasi
            $table->boolean('dipublikasikan')->default(false);  // Status publikasi
            $table->timestamps();
        });
    }

    /**
     * Batalkan migration (hapus tabel)
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
