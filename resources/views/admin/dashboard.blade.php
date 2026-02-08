@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="admin-header">
        <div>
            <h1 class="admin-judul">Dashboard</h1>
            <p style="color: #6b7c5a; margin: 0.25rem 0 0 0;">Panel administrasi website desa</p>
        </div>
    </div>

    <!-- Statistik -->
    <div class="grid grid-4 gap-6 mb-8">
        <div class="stat-card">
            <p class="stat-label">Total Galeri</p>
            <p class="stat-value">{{ $statistik['totalGaleri'] }}</p>
        </div>
        <div class="stat-card">
            <p class="stat-label">Dokumen APBDes</p>
            <p class="stat-value">{{ $statistik['totalDokumenApbdes'] }}</p>
        </div>
        <div class="stat-card">
            <p class="stat-label">Peraturan Desa</p>
            <p class="stat-value">{{ $statistik['totalDokumenPerdes'] }}</p>
        </div>
        <div class="stat-card">
            <p class="stat-label">Galeri Aktif</p>
            <p class="stat-value">{{ $statistik['galeriDipublikasikan'] }}</p>
        </div>
    </div>

    <!-- Menu Cepat -->
    <div class="grid grid-2 gap-6">
        <div class="kartu">
            <h3 style="margin: 0 0 1rem 0; font-size: 1rem; font-weight: 600;">Menu Cepat</h3>
            <div class="flex gap-3" style="flex-wrap: wrap;">
                <a href="{{ route('admin.galeri.buat') }}" class="tombol tombol-primer tombol-kecil">+ Galeri</a>
                <a href="{{ route('admin.apbdes.buat') }}" class="tombol tombol-outline tombol-kecil">+ APBDes</a>
                <a href="{{ route('admin.perdes.buat') }}" class="tombol tombol-outline tombol-kecil">+ PerDes</a>
            </div>
        </div>
        <div class="kartu">
            <h3 style="margin: 0 0 1rem 0; font-size: 1rem; font-weight: 600;">Pengaturan</h3>
            <div class="flex gap-3" style="flex-wrap: wrap;">
                <a href="{{ route('admin.pengaturan.informasi-desa') }}" class="tombol tombol-sekunder tombol-kecil">Informasi Desa</a>
                <a href="{{ route('admin.pengaturan.perangkat-desa') }}" class="tombol tombol-sekunder tombol-kecil">Perangkat Desa</a>
            </div>
        </div>
    </div>
@endsection
