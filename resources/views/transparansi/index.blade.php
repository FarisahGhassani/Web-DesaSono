@extends('layouts.app')

@section('title', 'Transparansi Desa')
@section('description', 'Akses dokumen APBDes dan Peraturan Desa (PerDes) secara transparan melalui Google Drive.')

@section('content')
    <!-- 
                                                HEADER HALAMAN TRANSPARANSI 
                                            -->
    <header class="page-header">
        <div class="floating-accent"></div>
        <div class="floating-accent"></div>
        <div class="wadah">
            <div class="page-header-content">
                <span class="page-header-label">Transparansi & Regulasi</span>
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
                                                Menggunakan desain kartu baru yang lebih informatif
                                            -->
    <section class="seksi">
        <div class="wadah">
            <div class="grid grid-2 gap-8">
                <!-- Kartu APBDes -->
                <div class="kartu-transparansi">
                    <div class="kartu-header">
                        <div class="kartu-ikon ikon-primer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" />
                            </svg>
                        </div>
                        <h2 class="text-2xl mb-0">Dokumen APBDes</h2>
                    </div>

                    <p class="color-abu-500 text-lg mb-6 leading-relaxed">
                        Akses transparansi anggaran desa mulai dari perencanaan, pelaksanaan, hingga laporan realisasi
                        secara akuntabel.
                    </p>

                    <div class="informasi-list">
                        <span class="info-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Laporan Anggaran
                        </span>
                        <span class="info-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Realisasi Belanja
                        </span>
                        <span class="info-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Bukti Dukung
                        </span>
                    </div>

                    <div class="mt-auto pt-6">
                        <a href="{{ $linkApbdes }}" target="_blank" rel="noopener"
                            class="tombol tombol-primer tombol-besar w-full justify-center">
                            <span>Buka Folder APBDes</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Kartu PerDes -->
                <div class="kartu-transparansi">
                    <div class="kartu-header">
                        <div class="kartu-ikon ikon-sekunder">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                        </div>
                        <h2 class="text-2xl mb-0">Peraturan Desa</h2>
                    </div>

                    <p class="color-abu-500 text-lg mb-6 leading-relaxed">
                        Kumpulan regulasi resmi desa meliputi Peraturan Desa, Peraturan Kepala Desa, dan Surat Keputusan.
                    </p>

                    <div class="informasi-list">
                        <span class="info-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            Terbaru
                        </span>
                        <span class="info-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                            </svg>
                            PerDes & PerKaDes
                        </span>
                        <span class="info-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                            SK Kades
                        </span>
                    </div>

                    <div class="mt-auto pt-6">
                        <a href="{{ $linkPerdes }}" target="_blank" rel="noopener"
                            class="tombol tombol-primer tombol-besar w-full justify-center">
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

            <!-- Kartu Dokumen Lainnya - Posisi Di Bawah -->
            <div style="margin-top: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                <div class="kartu-transparansi">
                    <div class="kartu-header">
                        <div class="kartu-ikon ikon-primer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-2xl mb-0">Dokumen Lainnya</h2>
                    </div>

                    <p class="color-abu-500 text-lg mb-6 leading-relaxed">
                        Kumpulan dokumen pendukung lainnya yang tidak termasuk dalam kategori APBDes maupun Peraturan Desa.
                    </p>

                    <div class="mt-auto pt-6">
                        <a href="{{ $linkLainnya }}" target="_blank" rel="noopener"
                            class="tombol tombol-primer tombol-besar w-full justify-center">
                            <span>Buka Folder Lainnya</span>
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
        </div>
    </section>

    <!-- 
                                                INFORMASI TAMBAHAN 
                                            -->
    <section class="seksi seksi-abu" style="padding-top: 0;">
        <div class="wadah">
            <div class="info-box-wrapper">
                <div class="info-box">
                    <div class="info-box-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl fw-600 mb-2">Keterbukaan Informasi</h3>
                        <p class="color-abu-600 text-base mb-0 lh-16">
                            Seluruh dokumen yang tersedia adalah dokumen resmi publik yang dikelola oleh Pemerintah Desa
                            untuk menjamin transparansi.
                        </p>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-box-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path
                                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl fw-600 mb-2">Butuh Bantuan?</h3>
                        <p class="color-abu-600 text-base mb-0 lh-16">
                            Jika Anda membutuhkan penjelasan lebih lanjut, silakan <a href="{{ route('peta') }}"
                                class="text-primer fw-600">Hubungi Kantor Desa</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection