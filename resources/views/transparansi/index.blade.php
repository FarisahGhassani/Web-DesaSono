@extends('layouts.app')

@section('title', 'Transparansi Desa')
@section('description', 'Akses dokumen APBDes dan Peraturan Desa (PerDes) secara transparan melalui Google Drive.')

@section('content')
    <!-- 
                        HEADER HALAMAN TRANSPARANSI 
                    -->
    <!-- 
                        HEADER HALAMAN TRANSPARANSI 
                    -->
    <header class="page-header">
        <div class="floating-accent"></div>
        <div class="floating-accent"></div>
        <div class="wadah">
            <div class="page-header-content">
                <span class="page-header-label">📊 Transparansi & Regulasi</span>
                <h1 class="page-header-title">Transparansi Desa</h1>
                <p class="page-header-desc">
                    Akses informasi Anggaran Pendapatan dan Belanja Desa (APBDes) serta Peraturan Desa (PerDes) yang
                    dikelola secara transparan dan akuntabel.
                </p>
            </div>
        </div>
    </header>

    <!-- 
                        KONTEN UTAMA 
                        Menghubungkan ke folder Google Drive masing-masing kategori dokumen.
                    -->
    <section class="seksi">
        <div class="wadah">
            <div class="grid grid-2 gap-8">
                <!-- Kartu APBDes -->
                <div class="kartu-transparansi">
                    <div class="kartu-ikon-besar ikon-primer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" />
                        </svg>
                    </div>
                    <h2 class="text-2xl mb-2">Dokumen APBDes</h2>
                    <p class="color-abu-500 text-lg mb-8">
                        Kumpulan dokumen Anggaran Pendapatan dan Belanja Desa (APBDes) dari tahun ke tahun.
                    </p>
                    <a href="{{ $linkApbdes }}" target="_blank" rel="noopener"
                        class="tombol tombol-primer tombol-besar w-full">
                        <span>Buka Folder APBDes</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6" />
                            <polyline points="15 3 21 3 21 9" />
                            <line x1="10" y1="14" x2="21" y2="3" />
                        </svg>
                    </a>
                </div>

                <!-- Kartu PerDes -->
                <div class="kartu-transparansi">
                    <div class="kartu-ikon-besar ikon-sekunder">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                        </svg>
                    </div>
                    <h2 class="text-2xl mb-2">Peraturan Desa</h2>
                    <p class="color-abu-500 text-lg mb-8">
                        Kumpulan Peraturan Desa (PerDes) dan regulasi desa yang berlaku.
                    </p>
                    <a href="{{ $linkPerdes }}" target="_blank" rel="noopener"
                        class="tombol tombol-sekunder tombol-besar w-full">
                        <span>Buka Folder PerDes</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6" />
                            <polyline points="15 3 21 3 21 9" />
                            <line x1="10" y1="14" x2="21" y2="3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 
                        INFORMASI TAMBAHAN 
                    -->
    <section class="seksi seksi-abu">
        <div class="wadah">
            <div class="grid grid-2 gap-8">
                <div class="kartu p-8">
                    <h3 class="text-xl mb-4">Informasi Tambahan</h3>
                    <p class="color-abu-600 lh-18 mb-0">
                        Dokumen-dokumen di atas tersimpan dalam folder Google Drive resmi Pemerintah Desa. Anda dapat
                        melihat, mengunduh, dan mencetak dokumen tersebut sebagai bentuk keterbukaan informasi publik.
                    </p>
                </div>
                <div class="kartu p-8">
                    <h3 class="text-xl mb-4">Butuh Bantuan?</h3>
                    <p class="color-abu-600 lh-18 mb-4">
                        Jika Anda kesulitan mengakses dokumen atau membutuhkan informasi lebih lanjut mengenai anggaran dan
                        regulasi desa, silakan hubungi kami.
                    </p>
                    <a href="{{ route('peta') }}" class="text-primer fw-600">Hubungi Kantor Desa &rarr;</a>
                </div>
            </div>
        </div>
    </section>
@endsection