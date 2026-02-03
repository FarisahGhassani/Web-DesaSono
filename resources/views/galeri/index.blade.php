@extends('layouts.app')

@section('title', 'Galeri Desa')
@section('description', 'Dokumentasi kegiatan desa, potensi desa, dan keunikan yang ada di Desa Sono.')

@section('content')
    <!-- Page Header -->
    <header class="page-header">
        <div class="floating-accent"></div>
        <div class="floating-accent"></div>
        <div class="wadah">
            <div class="page-header-content">
                <span class="page-header-label">Dokumentasi Desa</span>
                <h1 class="page-header-title">Galeri Desa Sono</h1>
                <p class="page-header-desc">
                    Kumpulan dokumentasi berbagai kegiatan warga dan keunikan yang menjadi ciri khas Desa Sono.
                </p>
            </div>
        </div>
    </header>

    @push('styles')
        <style>
            /* Styling untuk galeri */
            .galeri-section {
                margin-bottom: 5rem;
                padding: 0 1.5rem;
            }

            .galeri-section:last-child {
                margin-bottom: 0;
            }

            .judul-kategori {
                font-size: 2.5rem;
                font-weight: 800;
                margin-bottom: 1rem;
                color: var(--warna-teks-utama);
                position: relative;
                padding-left: 1rem;
                border-left: 5px solid var(--warna-primer);
            }

            .deskripsi-kategori {
                font-size: 1.5rem;
                color: var(--warna-abu-600);
                margin-bottom: 2.5rem;
                padding-left: 1rem;
            }

            /* Container untuk Google Photos embed */
            .google-photos-embed {
                width: 100%;
                border-radius: 1.5rem;
                overflow: hidden;
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
                background: var(--warna-putih);
                min-height: 600px;
                position: relative;
            }

            .google-photos-embed iframe {
                width: 100%;
                height: 600px;
                border: none;
                display: block;
            }

            /* Info helper */
            .galeri-info {
                background: linear-gradient(135deg, #f0f7ed, #e8f5e0);
                border-left: 4px solid var(--warna-primer);
                padding: 1.5rem 2rem;
                border-radius: 1rem;
                margin-bottom: 3rem;
            }

            .galeri-info h3 {
                font-size: 1.6rem;
                color: var(--warna-primer-dark);
                margin-bottom: 0.5rem;
                font-weight: 700;
            }

            .galeri-info p {
                font-size: 1.4rem;
                color: var(--warna-abu-700);
                margin: 0;
                line-height: 1.7;
            }

            .galeri-info code {
                background: var(--warna-putih);
                padding: 0.2rem 0.6rem;
                border-radius: 0.4rem;
                font-family: 'Courier New', monospace;
                color: var(--warna-primer-dark);
                font-size: 1.3rem;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .judul-kategori {
                    font-size: 2rem;
                }

                .google-photos-embed iframe {
                    height: 400px;
                }
            }
        </style>
    @endpush

    <!-- Galeri Content -->
    <section class="seksi">
        <div class="wadah">

            {{--
            ============================================================
            PANDUAN SETUP (BACA INI DULU!)
            ============================================================

            CARA SETUP GALERI GOOGLE PHOTOS:

            1. Buka Google Photos (photos.google.com)
            2. Buat album baru, beri nama "Kegiatan Desa Sono"
            3. Upload semua foto kegiatan ke album tersebut
            4. Klik tombol Share (👥) > Create link > Copy link
            5. Ganti LINK_ALBUM_KEGIATAN_DESA di baris 117 dengan link yang Anda copy

            6. Ulangi langkah 2-5 untuk "UMKM Desa Sono"
            7. Ganti LINK_ALBUM_UMKM_DESA di baris 133 dengan link album UMKM

            SETELAH SETUP:
            - Upload foto baru ke album Google Photos = Otomatis muncul di website
            - Hapus foto dari album = Otomatis hilang dari website
            - TIDAK PERLU edit file ini lagi!

            Simpan file ini, dan selamanya tinggal manage foto di Google Photos saja.
            ============================================================
            --}}

            {{-- Info untuk pengelola --}}
            @if(config('app.env') === 'local')
                <div class="galeri-info">
                    <h3>📸 Cara Mengelola Galeri</h3>
                    <p>
                        Galeri ini terhubung dengan <strong>Google Photos</strong>.
                        Untuk menambah/menghapus foto, cukup upload atau hapus foto di album Google Photos Anda.
                        Foto akan otomatis update di website tanpa perlu edit code.
                        <br><br>
                        <strong>Setup pertama kali:</strong> Edit file ini sekali untuk masukkan link album Google Photos Anda
                        (lihat komentar di code).
                    </p>
                </div>
            @endif

            {{-- GALERI KEGIATAN DESA --}}
            <div class="galeri-section">
                <h2 class="judul-kategori">KEGIATAN DESA</h2>
                <p class="deskripsi-kategori">Dokumentasi berbagai kegiatan dan acara yang dilakukan di desa</p>

                <div class="google-photos-embed">
                    {{--
                    GANTI "LINK_ALBUM_KEGIATAN_DESA" dengan link Google Photos album Anda
                    Contoh: https://photos.app.goo.gl/abcd1234567890
                    --}}
                    <iframe src="https://photos.app.goo.gl/LINK_ALBUM_KEGIATAN_DESA" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>

            {{-- GALERI UMKM DESA --}}
            <div class="galeri-section">
                <h2 class="judul-kategori">UMKM DESA</h2>
                <p class="deskripsi-kategori">Produk dan hasil karya UMKM warga desa</p>

                <div class="google-photos-embed">
                    {{--
                    GANTI "LINK_ALBUM_UMKM_DESA" dengan link Google Photos album Anda
                    Contoh: https://photos.app.goo.gl/xyz0987654321
                    --}}
                    <iframe src="https://photos.app.goo.gl/LINK_ALBUM_UMKM_DESA" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>

            {{--
            CATATAN PENTING:
            - Link Google Photos harus dari album yang sudah di-share (public)
            - Setelah setup link, Anda TIDAK PERLU edit file ini lagi
            - Untuk update galeri: Upload/hapus foto langsung di Google Photos
            - Foto akan otomatis sinkron ke website
            --}}

        </div>
    </section>
@endsection