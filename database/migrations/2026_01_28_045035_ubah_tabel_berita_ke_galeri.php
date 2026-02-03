<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('berita', 'galeri');

        Schema::table('galeri', function (Blueprint $table) {
            $table->enum('kategori_temp', ['dokumentasi', 'keunikan'])->default('dokumentasi')->after('gambar_url');
        });

        // Migrate data if any (optional but good practice)
        DB::table('galeri')->update(['kategori_temp' => 'dokumentasi']);

        Schema::table('galeri', function (Blueprint $table) {
            $table->dropColumn('kategori');
            $table->renameColumn('kategori_temp', 'kategori');
        });
    }

    public function down(): void
    {
        Schema::table('galeri', function (Blueprint $table) {
            $table->enum('kategori_temp', ['berita', 'pengumuman', 'kegiatan'])->default('berita')->after('gambar_url');
        });

        Schema::table('galeri', function (Blueprint $table) {
            $table->dropColumn('kategori');
            $table->renameColumn('kategori_temp', 'kategori');
        });

        Schema::rename('galeri', 'berita');
    }
};
