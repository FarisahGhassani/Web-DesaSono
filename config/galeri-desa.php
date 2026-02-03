<?php

/**
 * KONFIGURASI GALERI DESA
 * 
 * File ini berisi link ke album Google Photos untuk galeri desa.
 * 
 * CARA MENDAPATKAN LINK EMBED GOOGLE PHOTOS:
 * 1. Buka Google Photos (photos.google.com)
 * 2. Buat album baru (contoh: "Kegiatan Desa 2026")
 * 3. Upload foto-foto ke album tersebut
 * 4. Klik tombol share (⋮) > "Create link"
 * 5. Salin link yang didapat
 * 6. Paste link tersebut di bawah
 * 
 * CARA UPDATE GALERI:
 * - Tinggal upload foto baru ke album Google Photos
 * - Website otomatis menampilkan foto terbaru
 * - TIDAK PERLU edit file ini lagi
 */

return [

    /**
     * GALERI KEGIATAN DESA
     * 
     * Dokumentasi berbagai kegiatan dan acara yang dilakukan di desa
     * seperti gotong royong, perayaan, musyawarah, dll.
     */
    'kegiatan' => [
        'enabled' => true,  // Set false jika ingin menyembunyikan bagian ini
        'judul' => 'KEGIATAN DESA',
        'deskripsi' => 'Dokumentasi berbagai kegiatan dan acara yang dilakukan di desa',

        // Link Google Photos Album
        // Contoh: https://photos.app.goo.gl/xxxxxxxxxxxxx
        // Kosongkan jika belum ada album
        'google_photos_url' => '',

        // Atau bisa pakai list foto manual dari Google Drive (jika tidak pakai Google Photos)
        'foto_manual' => [
            // Uncomment dan isi jika ingin pakai foto manual
            // [
            //     'url' => 'https://drive.google.com/uc?id=FILE_ID_FOTO_1',
            //     'judul' => 'Gotong Royong Pembersihan Desa',
            //     'tanggal' => '15 Januari 2026',
            // ],
            // [
            //     'url' => 'https://drive.google.com/uc?id=FILE_ID_FOTO_2',
            //     'judul' => 'Musyawarah Desa',
            //     'tanggal' => '20 Januari 2026',
            // ],
        ],
    ],

    /**
     * GALERI UMKM DESA
     * 
     * Dokumentasi produk-produk UMKM dan usaha warga desa
     */
    'umkm' => [
        'enabled' => true,  // Set false jika ingin menyembunyikan bagian ini
        'judul' => 'UMKM DESA',
        'deskripsi' => 'Produk dan hasil karya UMKM warga desa',

        // Link Google Photos Album untuk UMKM
        'google_photos_url' => '',

        // Atau foto manual
        'foto_manual' => [
            // Uncomment dan isi jika ingin pakai foto manual
            // [
            //     'url' => 'https://drive.google.com/uc?id=FILE_ID_FOTO',
            //     'judul' => 'Kerajinan Anyaman Bambu',
            //     'tanggal' => '2026',
            // ],
        ],
    ],

    /**
     * GALERI POTENSI DESA
     * 
     * Foto-foto potensi desa seperti wisata, pertanian, dll
     */
    'potensi' => [
        'enabled' => false,  // Set true jika ingin menampilkan
        'judul' => 'POTENSI DESA',
        'deskripsi' => 'Keindahan dan potensi yang dimiliki desa',
        'google_photos_url' => '',
        'foto_manual' => [],
    ],

];
