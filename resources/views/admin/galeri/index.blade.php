@extends('admin.layout')

@section('title', 'Kelola Galeri Desa')

@section('content')
    <div class="admin-header">
        <div>
            <h1 class="admin-judul">Galeri Desa</h1>
            <p style="color: var(--warna-teks-sekunder);">Kelola dokumentasi kegiatan dan keunikan desa</p>
        </div>
        <a href="{{ route('admin.galeri.buat') }}" class="tombol tombol-primer">
            + Tambah Dokumentasi
        </a>
    </div>

    <div class="kartu glass" style="border-radius: var(--radius-2xl);">
        @if($daftarGaleri->count() > 0)
            <div class="tabel-container">
                <table class="tabel">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Tanggal Buat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftarGaleri as $galeri)
                            <tr>
                                <td>
                                    <div>
                                        <strong
                                            style="color: var(--warna-teks-utama);">{{ Str::limit($galeri->judul, 50) }}</strong>
                                        @if($galeri->ringkasan)
                                            <p
                                                style="color: var(--warna-teks-sekunder); font-size: var(--font-size-sm); margin: 0.25rem 0 0;">
                                                {{ Str::limit($galeri->ringkasan, 60) }}
                                            </p>
                                        @endif
                                    </div>
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
                                    {{ $galeri->created_at->format('d/m/Y H:i') }}
                                </td>
                                <td>
                                    <div class="flex gap-2">

                                        <a href="{{ route('admin.galeri.edit', $galeri->id) }}"
                                            class="tombol tombol-outline tombol-kecil">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.galeri.hapus', $galeri->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus dokumentasi ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="tombol tombol-bahaya tombol-kecil">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div style="padding: var(--spacing-4);">
                {{ $daftarGaleri->links() }}
            </div>
        @else
            <div style="text-align: center; padding: var(--spacing-12);">
                <div style="font-size: 4rem; margin-bottom: var(--spacing-4);">🖼️</div>
                <h3 style="color: var(--warna-teks-utama); margin-bottom: var(--spacing-2);">Belum Ada Galeri</h3>
                <p style="color: var(--warna-teks-sekunder); margin-bottom: var(--spacing-4);">Mulai dengan menambahkan
                    dokumentasi kegiatan pertama.</p>
                <a href="{{ route('admin.galeri.buat') }}" class="tombol tombol-primer">
                    + Tambah Dokumentasi Pertama
                </a>
            </div>
        @endif
    </div>
@endsection