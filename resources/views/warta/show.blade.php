@extends('layouts.app')

@section('title', $warta['title'])
@section('description', $warta['desc'])

@push('styles')
    <style>
        .warta-detail-section {
            padding: 8rem 0 5rem;
            background: var(--warna-abu-50);
            min-height: 100vh;
        }

        .warta-container {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            border-radius: 2rem;
            overflow: hidden;
            box-shadow: var(--shadow-xl);
        }

        .warta-image-wrapper {
            width: 100%;
            height: 500px;
            position: relative;
        }

        .warta-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .warta-content {
            padding: 3rem;
        }

        .warta-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .warta-category {
            background: var(--warna-primer);
            color: white;
            padding: 0.35rem 1rem;
            border-radius: 2rem;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .warta-date {
            color: var(--warna-abu-500);
            font-size: 0.9rem;
            font-weight: 600;
        }

        .warta-title {
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1.2;
            color: var(--warna-primer-dark);
            margin-bottom: 2rem;
        }

        .warta-narasi {
            font-size: 1.15rem;
            line-height: 1.85;
            color: var(--warna-abu-700);
            white-space: pre-line;
        }

        .warta-footer {
            margin-top: 4rem;
            padding-top: 2rem;
            border-top: 1px solid var(--warna-abu-100);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--warna-primer);
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .btn-back:hover {
            transform: translateX(-5px);
        }

        @media (max-width: 768px) {
            .warta-detail-section {
                padding: 6rem 1rem 3rem;
            }

            .warta-image-wrapper {
                height: 300px;
            }

            .warta-content {
                padding: 2rem 1.5rem;
            }

            .warta-title {
                font-size: 1.75rem;
            }
        }
    </style>
@endpush

@section('content')
    <section class="warta-detail-section">
        <div class="wadah">
            <div class="warta-container">
                <div class="warta-image-wrapper">
                    <img src="{{ asset('images/Kegiatan Desa/' . $warta['image']) }}" alt="{{ $warta['title'] }}">

                    <!-- Official Badge (Same as slider) -->
                    <div class="official-badge" style="z-index: 10;">
                        <div class="badge-dot"></div>
                        <div class="badge-info">
                            <span class="badge-title">WARTA DESA</span>
                            <span class="badge-subtitle">Laporan Resmi Pemerintah Desa</span>
                        </div>
                    </div>
                </div>

                <div class="warta-content">
                    <div class="warta-meta">
                        <span class="warta-category">{{ $warta['category'] }}</span>
                    </div>

                    <h1 class="warta-title">{{ $warta['title'] }}</h1>

                    <div class="warta-narasi">
                        {{ $warta['narasi'] }}
                    </div>

                    <div class="warta-footer">
                        <a href="{{ route('beranda') }}#berita-kegiatan" class="btn-back">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg>
                            Kembali ke Beranda
                        </a>

                        <div class="share-links" style="display: flex; gap: 1rem;">
                            <span style="font-weight: 600; color: var(--warna-abu-500);">Bagikan:</span>
                            <a href="https://wa.me/?text={{ urlencode($warta['title'] . ' ' . Request::url()) }}"
                                target="_blank" style="color: #25D366;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 1 1-7.6-14.7 8.38 8.38 0 0 1 3.8.9L21 3z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection