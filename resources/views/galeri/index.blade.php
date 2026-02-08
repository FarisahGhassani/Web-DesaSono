@extends('layouts.app')

@section('title', 'Galeri Desa')
@section('description', 'Dokumentasi kegiatan, potensi, dan UMKM desa kami.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/galeri-baru.css') }}">
@endpush

@section('content')
    <!-- 
                                    HEADER HALAMAN GALERI 
                                -->
    <header class="page-header">
        <div class="floating-accent"></div>
        <div class="floating-accent"></div>
        <div class="wadah">
            <div class="page-header-content">
                <span class="page-header-label">Dokumentasi</span>
                <h1 class="page-header-title">Galeri Desa</h1>
                <p class="page-header-desc">
                    Potret kegiatan, potensi, dan perkembangan desa yang kami abadikan sebagai jejak digital transparansi.
                </p>
            </div>
        </div>
    </header>

    <!-- 
                                    GALERI KEGIATAN DESA 
                                    Data diambil dari config/galeri-desa.php
                                -->
    @php
        $kegiatan = config('galeri-desa.kegiatan');
        $umkm = config('galeri-desa.umkm');
        $potensi = config('galeri-desa.potensi');
        $tradisi = config('galeri-desa.tradisi');
    @endphp

    <section class="seksi galeri-wrapper">
        <div class="wadah">

            <!-- KEGIATAN DESA -->
            @if($kegiatan['enabled'])
                <div class="mb-12">
                    <div class="mb-8">
                        <h2 class="text-3xl fw-700 text-dark mb-2">{{ $kegiatan['judul'] }}</h2>
                        <p class="text-lg color-abu-600">{{ $kegiatan['deskripsi'] }}</p>
                    </div>

                    @if(!empty($kegiatan['google_photos_url']))
                        <!-- Embed Google Photos / Link -->
                        <div class="bg-abu-100 p-8 rounded-2xl text-center">
                            <p class="mb-4">Lihat album lengkap di Google Photos:</p>
                            <a href="{{ $kegiatan['google_photos_url'] }}" target="_blank" class="tombol tombol-primer">
                                Buka Album Foto
                            </a>
                        </div>
                    @elseif(!empty($kegiatan['foto_manual']))
                        <div class="galeri-grid">
                            @foreach($kegiatan['foto_manual'] as $foto)
                                <div class="galeri-item">
                                    <img src="{{ asset('images/' . $kegiatan['folder'] . '/' . $foto['file']) }}"
                                        alt="{{ $foto['judul'] }}" loading="lazy">
                                    <div class="galeri-overlay">
                                        <span class="galeri-kategori">Kegiatan</span>
                                        <h3 class="galeri-judul">{{ $foto['judul'] }}</h3>
                                        @if(isset($foto['tanggal']) && $foto['tanggal'])
                                            <span class="galeri-tanggal">{{ $foto['tanggal'] }}</span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center p-12 border rounded-2xl bg-abu-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5" class="mx-auto mb-4 color-abu-400">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            <p class="fw-600 color-abu-500">Belum ada foto kegiatan.</p>
                        </div>
                    @endif
                </div>
            @endif

            <!-- UMKM DESA -->
            @if($umkm['enabled'])
                <div class="mb-12">
                    <div class="mb-8 border-t pt-12">
                        <h2 class="text-3xl fw-700 text-dark mb-2">UMKM</h2>
                        <p class="text-lg color-abu-600">{{ $umkm['deskripsi'] }}</p>
                    </div>

                    @if(!empty($umkm['foto_manual']))
                        <div class="galeri-grid">
                            @foreach($umkm['foto_manual'] as $foto)
                                <div class="galeri-item galeri-item-umkm">
                                    <img src="{{ asset('images/' . $umkm['folder'] . '/' . $foto['file']) }}" alt="{{ $foto['judul'] }}"
                                        loading="lazy">
                                    <div class="galeri-overlay galeri-overlay-umkm">
                                        <span class="galeri-kategori">UMKM</span>
                                        <h3 class="galeri-judul">{{ $foto['judul'] }}</h3>
                                        @if(isset($foto['deskripsi']) && $foto['deskripsi'])
                                            <p class="galeri-deskripsi">{{ $foto['deskripsi'] }}</p>
                                        @endif
                                        @if(isset($foto['kontak']) && $foto['kontak'])
                                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $foto['kontak']) }}" target="_blank"
                                                class="galeri-kontak">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path
                                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                                </svg>
                                                {{ $foto['kontak'] }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center p-12 border rounded-2xl bg-abu-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5" class="mx-auto mb-4 color-abu-400">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            <p class="fw-600 color-abu-500">Belum ada foto UMKM.</p>
                        </div>
                    @endif

                    {{-- YouTube Video Embed --}}
                    @if(!empty($umkm['youtube_videos']))
                        <div class="youtube-embed-section">
                            <h3 class="text-xl fw-600 text-dark mb-4 mt-8">Video UMKM</h3>
                            <div class="youtube-grid">
                                @foreach($umkm['youtube_videos'] as $video)
                                    <div class="youtube-item">
                                        <div class="youtube-wrapper">
                                            <iframe src="https://www.youtube.com/embed/{{ $video['id'] }}"
                                                title="{{ $video['judul'] ?? 'Video UMKM' }}" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                        @if(isset($video['judul']))
                                            <p class="youtube-title">{{ $video['judul'] }}</p>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            @endif


            <!-- TRADISI LISAN -->
            @if($tradisi['enabled'])
                <div class="mb-12">
                    <div class="mb-8 border-t pt-12">
                        <h2 class="text-3xl fw-700 text-dark mb-2">{{ $tradisi['judul'] }}</h2>
                        <p class="text-lg color-abu-600">{{ $tradisi['deskripsi'] }}</p>
                    </div>

                    @if(!empty($tradisi['foto_manual']))
                        <div class="galeri-grid">
                            @foreach($tradisi['foto_manual'] as $foto)
                                <div class="galeri-item galeri-item-tradisi">
                                    <img src="{{ asset('images/' . $tradisi['folder'] . '/' . $foto['file']) }}"
                                        alt="{{ $foto['judul'] }}" loading="lazy">
                                    <div class="galeri-overlay galeri-overlay-tradisi">
                                        <span class="galeri-kategori">Tradisi Lisan</span>
                                        <h3 class="galeri-judul">{{ $foto['judul'] }}</h3>
                                        @if(isset($foto['deskripsi']) && $foto['deskripsi'])
                                            <p class="galeri-deskripsi">{{ $foto['deskripsi'] }}</p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center p-12 border rounded-2xl bg-abu-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5" class="mx-auto mb-4 color-abu-400">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            <p class="fw-600 color-abu-500">Belum ada foto tradisi lisan.</p>
                        </div>
                    @endif
                </div>
            @endif

        </div>
    </section>
@endsection