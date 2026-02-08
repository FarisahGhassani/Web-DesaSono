<?php

/**
 * KONFIGURASI GALERI DESA
 * 
 * File ini berisi data galeri yang diambil dari folder images.
 * Section sesuai dengan nama folder di public/images:
 * - Kegiatan Desa
 * - UMKM
 * - Tradisi Lisan
 */

return [

    /**
     * GALERI KEGIATAN DESA
     * Folder: public/images/Kegiatan Desa
     */
    'kegiatan' => [
        'enabled' => true,
        'judul' => 'KEGIATAN DESA',
        'deskripsi' => 'Dokumentasi berbagai kegiatan dan acara yang dilakukan di desa',
        'google_photos_url' => '',
        'folder' => 'Kegiatan Desa',
        'foto_manual' => [
            [
                'file' => 'Penyediaan papan peta.jpg',
                'judul' => 'Penyediaan Papan Peta',
            ],
            [
                'file' => 'Kegiatan Rutin Posyandu.jpg',
                'judul' => 'Kegiatan Rutin Posyandu',
            ],
            [
                'file' => 'Musyawarah Desa.jpg',
                'judul' => 'Musyawarah Desa',
            ],
            [
                'file' => 'Pertemuan Mahasiswa KKN UNDIP dengan Perangkat Desa.jpg',
                'judul' => 'Pertemuan Mahasiswa KKN UNDIP',
            ],
            [
                'file' => 'Acara Keagamaan Warga.jpg',
                'judul' => 'Acara Keagamaan Warga',
            ],
        ],
    ],

    /**
     * GALERI UMKM DESA
     * Folder: public/images/umkm
     */
    'umkm' => [
        'enabled' => true,
        'judul' => 'UMKM DESA',
        'deskripsi' => 'Produk dan hasil karya UMKM warga desa',
        'google_photos_url' => '',
        'folder' => 'umkm',
        'foto_manual' => [
            [
                'file' => 'Berkah Limbah Pak Suwandi.jpeg',
                'judul' => 'Berkah Limbah - Pak Suwandi',
                'deskripsi' => 'Usaha Berkah Limbah Pak Suwandi berawal dari bantuan Program Keluarga Harapan (PKH) yang kemudian berjalan konsisten memproduksi berbagai produk rumah tangga dari limbah tali PET.',
                'kontak' => '0812-4942-5356',
            ],
            [
                'file' => 'Kerupuk Rambak Jari JM.png',
                'judul' => 'Kerupuk Rambak Jari JM',
                'deskripsi' => 'Usaha ini milik Pak Jumain dan telah berjalan hampir 12 tahun, bermula dari bekerja dengan orang lain hingga mandiri, dengan kapasitas produksi sekitar 1 kuintal kerupuk rambak jari setiap kali produksi.',
                'kontak' => '0822-4223-3396',
            ],
            [
                'file' => 'Berkah Sangkar Pak Agus.png',
                'judul' => 'Berkah Sangkar - Pak Agus',
                'deskripsi' => 'Usaha sangkar burung Pak Agus dirintis sejak 2018 dari hobinya terhadap burung dan kini berkembang dengan beberapa tenaga kerja meski sempat terdampak pandemi.',
                'kontak' => '0822-4254-7797',
            ],
            [
                'file' => 'Ternak Ayam Petelur Pak Parman.jpg',
                'judul' => 'Ternak Ayam Petelur - Pak Suparman',
                'deskripsi' => 'Usaha ayam petelur milik Bapak Suparman dikelola secara keluarga dengan ayam ISA Brown untuk memenuhi kebutuhan telur masyarakat secara berkelanjutan.',
                'kontak' => '0813-2995-9647',
            ],
            [
                'file' => 'Produksi Arang Pak Parjo.png',
                'judul' => 'Produksi Arang - Pak Parjo',
                'deskripsi' => 'Usaha produksi arang milik Pak Parjo.',
                'kontak' => '',
            ],
        ],
        // Tambahkan ID video YouTube di sini (contoh: 'dQw4w9WgXcQ')
        'youtube_videos' => [
            ['id' => 'NFlXpTObwIk', 'judul' => 'Video UMKM Desa Wargasono'],
        ],
    ],

    /**
     * GALERI POTENSI DESA
     */
    'potensi' => [
        'enabled' => false,
        'judul' => 'POTENSI DESA',
        'deskripsi' => 'Keindahan dan potensi yang dimiliki desa',
        'google_photos_url' => '',
        'folder' => '',
        'foto_manual' => [],
    ],

    /**
     * TRADISI LISAN DESA
     * Folder: public/images/tradisi lisan
     */
    'tradisi' => [
        'enabled' => true,
        'judul' => 'TRADISI LISAN',
        'deskripsi' => 'Warisan budaya dan tradisi lisan desa',
        'google_photos_url' => '',
        'folder' => 'tradisi lisan',
        'foto_manual' => [
            [
                'file' => 'Omah Mbah Lurah Sepuh.jpg',
                'judul' => 'Omah Mbah Lurah Sepuh',
                'deskripsi' => 'Rumah joglo limasan ini merupakan peninggalan Kepala Desa pertama, Mbah Kromojiyo. Di dalamnya terdapat amben kayu jati bertahun 1808 yang masih terawat, menandakan usia bangunan lebih dari dua abad. Bagian belakang rumah konon pernah menjadi pendapa Bupati Sragen.',
            ],
            [
                'file' => 'Sendang Jurang.jpeg',
                'judul' => 'Sendang Jurang',
                'deskripsi' => 'Sendang di Dukuh Jurang dipercaya dijaga Nyai Putih. Menurut cerita warga, airnya yang jernih dapat berubah kemerahan saat jenazah melewati area tersebut.',
            ],
            [
                'file' => 'Punden Sono.jpg',
                'judul' => 'Punden Sono',
                'deskripsi' => 'Tempat bersejarah yang dikaitkan dengan Nyai Ageng Serang. Di lokasi ini ditemukan tanah putih yang diyakini sebagai kubah masjid, batu bertuliskan lafadz Arab, serta sendang untuk bersuci. Konon pernah menjadi tempat peristirahatan dan strategi perjuangan melawan penjajah Belanda.',
            ],
            [
                'file' => 'Punden Morang.jpg',
                'judul' => 'Punden Morang',
                'deskripsi' => 'Situs di Dukuh Jurang yang dipercaya berkaitan dengan senopati perang masa kolonial Belanda, menyimpan cerita peninggalan caping dan tongkat serta gundukan tanah sebagai jejak sejarah.',
            ],
        ],
    ],

];
