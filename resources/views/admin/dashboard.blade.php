@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="admin-header">
        <h1 class="admin-judul">Dashboard</h1>
        <p style="color: var(--warna-teks-sekunder);">Selamat datang di panel administrasi website desa.</p>
    </div>

    <!-- Statistik Cards -->
    <div class="grid grid-4 gap-6 mb-8">
        <div class="kartu glass" style="padding: var(--spacing-6); border-radius: var(--radius-xl);">
            <div class="flex items-center gap-4">
                <div class="fitur-ikon" style="margin: 0; background: linear-gradient(135deg, #dbeafe, #bfdbfe);">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2563eb"
                        stroke-width="2" style="width: 24px; height: 24px;">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                </div>
                <div>
                    <p style="color: var(--warna-teks-sekunder); font-size: var(--font-size-sm); margin-bottom: 0;">Total
                        Galeri</p>
                    <p
                        style="font-size: var(--font-size-2xl); font-weight: 700; margin: 0; color: var(--warna-teks-utama);">
                        {{ $statistik['totalGaleri'] }}</p>
                </div>
            </div>
        </div>

        <div class="kartu glass" style="padding: var(--spacing-6); border-radius: var(--radius-xl);">
            <div class="flex items-center gap-4">
                <div class="fitur-ikon" style="margin: 0; background: linear-gradient(135deg, #dcfce7, #bbf7d0);">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#16a34a"
                        stroke-width="2" style="width: 24px; height: 24px;">
                        <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                        <line x1="16" y1="13" x2="8" y2="13" />
                        <line x1="16" y1="17" x2="8" y2="17" />
                    </svg>
                </div>
                <div>
                    <p style="color: var(--warna-teks-sekunder); font-size: var(--font-size-sm); margin-bottom: 0;">Dokumen
                        APBDes</p>
                    <p
                        style="font-size: var(--font-size-2xl); font-weight: 700; margin: 0; color: var(--warna-teks-utama);">
                        {{ $statistik['totalDokumenApbdes'] }}</p>
                </div>
            </div>
        </div>

        <div class="kartu glass" style="padding: var(--spacing-6); border-radius: var(--radius-xl);">
            <div class="flex items-center gap-4">
                <div class="fitur-ikon" style="margin: 0; background: linear-gradient(135deg, #fef3c7, #fde68a);">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#d97706"
                        stroke-width="2" style="width: 24px; height: 24px;">
                        <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                    </svg>
                </div>
                <div>
                    <p style="color: var(--warna-teks-sekunder); font-size: var(--font-size-sm); margin-bottom: 0;">
                        Peraturan Desa</p>
                    <p
                        style="font-size: var(--font-size-2xl); font-weight: 700; margin: 0; color: var(--warna-teks-utama);">
                        {{ $statistik['totalDokumenPerdes'] }}</p>
                </div>
            </div>
        </div>

        <div class="kartu glass" style="padding: var(--spacing-6); border-radius: var(--radius-xl);">
            <div class="flex items-center gap-4">
                <div class="fitur-ikon" style="margin: 0; background: linear-gradient(135deg, #fce7f3, #fbcfe8);">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#db2777"
                        stroke-width="2" style="width: 24px; height: 24px;">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
                        <polyline points="22 4 12 14.01 9 11.01" />
                    </svg>
                </div>
                <div>
                    <p style="color: var(--warna-teks-sekunder); font-size: var(--font-size-sm); margin-bottom: 0;">Galeri
                        Aktif</p>
                    <p
                        style="font-size: var(--font-size-2xl); font-weight: 700; margin: 0; color: var(--warna-teks-utama);">
                        {{ $statistik['galeriDipublikasikan'] }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-2 gap-6 mb-8">
        <div class="kartu glass" style="padding: var(--spacing-6); border-radius: var(--radius-xl);">
            <h3 style="margin-bottom: var(--spacing-4); color: var(--warna-teks-utama);">Aksi Cepat</h3>
            <div class="flex gap-2" style="flex-wrap: wrap;">
                <a href="{{ route('admin.galeri.buat') }}" class="tombol tombol-primer tombol-kecil">
                    + Tambah Dokumentasi
                </a>
                <a href="{{ route('admin.apbdes.buat') }}" class="tombol tombol-sekunder tombol-kecil">
                    + Tambah APBDes
                </a>
                <a href="{{ route('admin.perdes.buat') }}" class="tombol tombol-sekunder tombol-kecil">
                    + Tambah PerDes
                </a>
            </div>
        </div>

        <div class="kartu glass" style="padding: var(--spacing-6); border-radius: var(--radius-xl);">
            <h3 style="margin-bottom: var(--spacing-4); color: var(--warna-teks-utama);">Pengaturan</h3>
            <div class="flex gap-2" style="flex-wrap: wrap;">
                <a href="{{ route('admin.pengaturan.informasi-desa') }}" class="tombol tombol-outline tombol-kecil">
                    Informasi Desa
                </a>
                <a href="{{ route('admin.pengaturan.perangkat-desa') }}" class="tombol tombol-outline tombol-kecil">
                    Perangkat Desa
                </a>
            </div>
        </div>
    </div>

    <!-- Galeri Terbaru -->
    <div class="kartu glass" style="padding: var(--spacing-6); border-radius: var(--radius-xl);">
        <div class="flex items-center justify-between mb-4">
            <h3 style="margin: 0; color: var(--warna-teks-utama);">Dokumentasi Terbaru</h3>
            <a href="{{ route('admin.galeri.index') }}"
                style="font-size: var(--font-size-sm); color: var(--warna-aksen);">Lihat Semua →</a>
        </div>

        @if($galeriTerbaru->count() > 0)
            <div class="tabel-container">
                <table class="tabel">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Tanggal Buat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galeriTerbaru as $galeri)
                            <tr>
                                <td>
                                    <a href="{{ route('admin.galeri.edit', $galeri->id) }}"
                                        style="color: var(--warna-teks-utama); font-weight: 500;">{{ Str::limit($galeri->judul, 40) }}</a>
                                </td>
                                <td>
                                    <span class="badge badge-info">{{ $galeri->label_kategori }}</span>
                                </td>
                                <td>
                                    @if($galeri->dipublikasikan)
                                        <span class="badge badge-sukses">Dipublikasikan</span>
                                    @else
                                        <span class="badge badge-peringatan">Draft</span>
                                    @endif
                                </td>
                                <td style="color: var(--warna-teks-sekunder); font-size: var(--font-size-sm);">
                                    {{ $galeri->created_at->format('d/m/Y') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div style="text-align: center; padding: var(--spacing-8);">
                <p style="color: var(--warna-teks-sekunder);">Belum ada dokumentasi. <a href="{{ route('admin.galeri.buat') }}"
                        style="color: var(--warna-aksen);">Tambah dokumentasi pertama</a></p>
            </div>
        @endif
    </div>
@endsection