@extends('layouts.app')

@section('title', 'Profil Desa')
@section('description', 'Profil lengkap desa termasuk informasi desa, visi misi, dan struktur organisasi pemerintahan desa.')

@section('content')
    <!-- 
                                                                HEADER HALAMAN PROFIL DESA 
                                                                Bagian atas dengan judul halaman.
                                                            -->
    <!-- 
                                                            HEADER HALAMAN PROFIL DESA 
                                                            Bagian atas dengan judul halaman.
                                                        -->
    <header class="page-header">
        <div class="floating-accent"></div>
        <div class="floating-accent"></div>
        <div class="wadah">
            <div class="page-header-content">
                <span class="page-header-label">Profil Desa</span>
                <h1 class="page-header-title">Profil {{ $infoDesa['nama_desa'] ?? 'Desa Kami' }}</h1>
                <p class="page-header-desc">
                    Mengenal lebih dekat dengan desa kami: informasi desa, visi misi, dan para pelayan masyarakat.
                </p>
            </div>
        </div>
    </header>

    <!-- 
                                                                Tentang DESA 
                                                                Berisi deskripsi tentang desa yang bisa diedit via admin.
                                                            -->
    <section class="seksi" id="tentang-desa">
        <div class="wadah wadah-sempit">
            <div class="kartu p-8">
                <h2 class="seksi-judul mb-6">Tentang Desa</h2>
                <div class="teks-konten color-abu-600 lh-18">
                    {!! nl2br(e($infoDesa['tentang_desa'] ?? 'Desa Sono merupakan salah satu desa di Kecamatan Mondokan, Kabupaten Sragen. Desa ini terdiri dari beberapa dukuh, yaitu Sono, Buras, Jetis, Jurang, dan Glugu, serta mengalami perkembangan wilayah hingga mencakup Tegalrejo. Dengan luas wilayah sekitar 4,45 km², Desa Sono menjadi bagian penting dalam kehidupan sosial dan pemerintahan wilayah setempat.')) !!}
                </div>
            </div>
        </div>
    </section>

    <!-- 
                                                                VISI & MISI 
                                                                Menampilkan visi utama dan poin-poin misi desa.
                                                            -->
    <section class="seksi seksi-abu" id="visi-misi">
        <div class="wadah">
            <div class="seksi-header">
                <span class="seksi-label">Arah Pembangunan</span>
                <h2 class="seksi-judul">Visi & Misi Desa</h2>
            </div>

            <div class="grid grid-2 gap-8">
                <!-- Bagian Visi -->
                <div class="kartu p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="fitur-ikon mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="12" r="6" />
                                <circle cx="12" cy="12" r="2" />
                            </svg>
                        </div>
                        <h3 class="mb-0 text-2xl">Visi</h3>
                    </div>
                    <div class="teks-konten color-abu-600 lh-18 text-lg">
                        "{{ $infoDesa['visi'] ?? 'Visi desa akan ditampilkan di sini.' }}"
                    </div>
                </div>

                <!-- Bagian Misi -->
                <div class="kartu p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="fitur-ikon mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                        </div>
                        <h3 class="mb-0 text-2xl">Misi</h3>
                    </div>
                    <div class="teks-konten color-abu-600 lh-18">
                        {!! nl2br(e($infoDesa['misi'] ?? 'Misi desa akan ditampilkan di sini.')) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 
                                                                STRUKTUR ORGANISASI 
                                                                Menampilkan daftar perangkat desa dengan foto mereka.
                                                            -->
    @if($perangkatDesa->count() > 0)
        <section class="seksi" id="struktur">
            <div class="wadah">
                <div class="seksi-header">
                    <span class="seksi-label">Pemerintahan Desa</span>
                    <h2 class="seksi-judul">Struktur Organisasi</h2>
                    <p class="seksi-deskripsi">
                        Para pelayan masyarakat yang bertugas mengabdi untuk kemajuan desa.
                    </p>
                </div>

                <div class="tim-grid">
                    @foreach($perangkatDesa as $perangkat)
                        <div class="tim-item">
                            @if($perangkat->foto_url)
                                <img src="{{ $perangkat->foto_url }}" alt="{{ $perangkat->nama }}" class="tim-foto">
                            @else
                                <!-- Foto placeholder jika tidak ada foto -->
                                <div class="tim-foto placeholder-foto flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                                        stroke="var(--warna-primer)" stroke-width="1.5">
                                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                                        <circle cx="12" cy="7" r="4" />
                                    </svg>
                                </div>
                            @endif
                            <h4 class="tim-nama">{{ $perangkat->nama }}</h4>
                            <p class="tim-jabatan">{{ $perangkat->jabatan }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- 
                                                                INFO KONTAK 
                                                                Informasi detail cara menghubungi kantor desa.
                                                            -->
    <section class="seksi seksi-gradient">
        <div class="wadah wadah-sempit">
            <div class="kartu p-8 text-center">
                <h3 class="seksi-judul mb-6">Informasi Kontak</h3>

                <div class="grid grid-3 gap-6 text-center">
                    <!-- Alamat -->
                    <div>
                        <div class="fitur-ikon mb-4 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <h4 class="mb-2">Alamat</h4>
                        <p class="color-abu-500 text-sm">
                            {{ $infoDesa['alamat_lengkap'] ?? 'Alamat kantor desa' }}
                        </p>
                    </div>

                    <!-- Telepon -->
                    <div>
                        <div class="fitur-ikon mb-4 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path
                                    d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
                            </svg>
                        </div>
                        <h4 class="mb-2">Telepon</h4>
                        <p class="color-abu-500 text-sm">
                            {{ $infoDesa['telepon'] ?? '-' }}
                        </p>
                    </div>

                    <!-- Email -->
                    <div>
                        <div class="fitur-ikon mb-4 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                <polyline points="22,6 12,13 2,6" />
                            </svg>
                        </div>
                        <h4 class="mb-2">Email</h4>
                        <p class="color-abu-500 text-sm">
                            {{ $infoDesa['email'] ?? '-' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection