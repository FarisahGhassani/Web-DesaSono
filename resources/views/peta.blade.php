@extends('layouts.app')

@section('title', 'Peta Desa')
@section('description', 'Lokasi dan peta wilayah desa dengan integrasi Google Maps.')

@section('content')
    <!-- 
                                                                            HEADER HALAMAN PETA 
                                                                            Memberikan konteks lokasi desa kepada pengunjung.
                                                                        -->
    <!-- 
                                                                            HEADER HALAMAN PETA 
                                                                            Memberikan konteks lokasi desa kepada pengunjung.
                                                                        -->
    <header class="page-header">
        <div class="floating-accent"></div>
        <div class="floating-accent"></div>
        <div class="wadah">
            <div class="page-header-content">
                <span class="page-header-label">Lokasi</span>
                <h1 class="page-header-title">Peta Desa</h1>
                <p class="page-header-desc">
                    Temukan lokasi desa kami dan petunjuk arah menuju kantor desa.
                </p>
            </div>
        </div>
    </header>

    <!-- 
                                                                            BAGIAN PETA (GOOGLE MAPS) 
                                                                            Menampilkan frame peta interaktif.
                                                                        -->
    <section class="seksi">
        <div class="wadah">
            <!-- Keterangan Peta -->
            <h4 class="info-judul">Lokasi Kantor Desa</h4>
            <p class="peta-keterangan">Klik peta untuk mendapatkan petunjuk arah</p>

            <!-- Peta Container -->
            <div class="peta-container">
                <iframe class="peta-frame"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d500!2d110.912894!3d-7.3372001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid"
                    style="border:0;" loading="lazy" allowfullscreen>
                </iframe>
            </div>

            <!-- Kartu Informasi di Bawah Peta -->
            <div class="grid grid-3 gap-6 mt-8">
                <!-- Alamat -->
                <div class="info-card-peta alamat">
                    <div class="flex-row">
                        <div class="info-ikon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <div class="info-konten">
                            <h4 class="info-judul">Alamat Lengkap</h4>
                            <p class="info-detail">
                                {{ $infoDesa['alamat_lengkap'] ?? 'Alamat kantor desa' }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Jam Operasional -->
                <div class="info-card-peta jam">
                    <div class="flex-row">
                        <div class="info-ikon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                        </div>
                        <div class="info-konten">
                            <h4 class="info-judul">Jam Operasional</h4>
                            <p class="info-detail">
                                Senin - Jumat: 08.00 - 15.00 WIB
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Telepon -->
                <div class="info-card-peta telepon">
                    <div class="flex-row">
                        <div class="info-ikon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path
                                    d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
                            </svg>
                        </div>
                        <div class="info-konten">
                            <h4 class="info-judul">Telepon</h4>
                            <p class="info-detail">
                                {{ $infoDesa['telepon'] ?? '-' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 
                                                                            INFO ADMINISTRATIF 
                                                                            Pembagian wilayah kerja desa secara administratif.
                                                                        -->
    <section class="seksi seksi-abu">
        <div class="wadah wadah-sempit">
            <div class="seksi-header">
                <span class="seksi-label">Wilayah</span>
                <h2 class="seksi-judul">Informasi Administratif</h2>
            </div>

            <div class="kartu p-8">
                <div class="grid grid-2 gap-6 mb-6">
                    <div>
                        <p class="text-sm color-abu-500 mb-1">Desa/Kelurahan</p>
                        <p class="text-lg fw-600 mb-4">{{ $infoDesa['nama_desa'] ?? 'Sono' }}</p>

                        <p class="text-sm color-abu-500 mb-1">Kecamatan</p>
                        <p class="text-lg fw-600 mb-4">{{ $infoDesa['kecamatan'] ?? 'Mondokan' }}</p>

                        <p class="text-sm color-abu-500 mb-1">Kabupaten/Kota</p>
                        <p class="text-lg fw-600 mb-0">{{ $infoDesa['kabupaten'] ?? 'Kab. Sragen' }}</p>
                    </div>
                    <div>
                        <p class="text-sm color-abu-500 mb-1">Provinsi</p>
                        <p class="text-lg fw-600 mb-4">{{ $infoDesa['provinsi'] ?? 'Jawa Tengah' }}</p>

                        <p class="text-sm color-abu-500 mb-1">Kode Pos</p>
                        <p class="text-lg fw-600 mb-4">{{ $infoDesa['kode_pos'] ?? '57271' }}</p>

                        <p class="text-sm color-abu-500 mb-1">Kode Kemendagri</p>
                        <p class="text-lg fw-600 mb-0">{{ $infoDesa['kode_kemendagri'] ?? '33.14.16.2001' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection