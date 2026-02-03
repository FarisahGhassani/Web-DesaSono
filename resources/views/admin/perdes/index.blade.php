@extends('admin.layout')

@section('title', 'Kelola Peraturan Desa')

@section('content')
    <div class="admin-header">
        <div>
            <h1 class="admin-judul">Peraturan Desa</h1>
            <p style="color: var(--warna-abu-500);">Kelola dokumen Peraturan Desa (PerDes)</p>
        </div>
        <a href="{{ route('admin.perdes.buat') }}" class="tombol tombol-primer">
            + Tambah Peraturan
        </a>
    </div>

    <div class="kartu">
        @if($dokumenPerdes->count() > 0)
            <div class="tabel-container">
                <table class="tabel">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Nomor</th>
                            <th>Tahun</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dokumenPerdes as $dokumen)
                            <tr>
                                <td>
                                    <div>
                                        <strong>{{ $dokumen->judul }}</strong>
                                        @if($dokumen->deskripsi)
                                            <p
                                                style="color: var(--warna-abu-500); font-size: var(--font-size-sm); margin: 0.25rem 0 0;">
                                                {{ Str::limit($dokumen->deskripsi, 60) }}
                                            </p>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-info">{{ $dokumen->nomor_peraturan }}</span>
                                </td>
                                <td>
                                    <span class="badge badge-primer">{{ $dokumen->tahun }}</span>
                                </td>
                                <td>
                                    @if($dokumen->aktif)
                                        <span class="badge badge-sukses">Aktif</span>
                                    @else
                                        <span class="badge badge-bahaya">Nonaktif</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="{{ $dokumen->link_google_drive }}" target="_blank"
                                            class="tombol tombol-sekunder tombol-kecil">
                                            Lihat
                                        </a>
                                        <a href="{{ route('admin.perdes.edit', $dokumen->id) }}"
                                            class="tombol tombol-outline tombol-kecil">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.perdes.hapus', $dokumen->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus peraturan ini?');">
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
                {{ $dokumenPerdes->links() }}
            </div>
        @else
            <div style="text-align: center; padding: var(--spacing-12);">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none"
                    stroke="var(--warna-abu-300)" stroke-width="1.5" style="margin: 0 auto var(--spacing-4);">
                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                    <polyline points="14 2 14 8 20 8" />
                </svg>
                <h3 style="color: var(--warna-abu-500); margin-bottom: var(--spacing-2);">Belum Ada Peraturan</h3>
                <p style="color: var(--warna-abu-400); margin-bottom: var(--spacing-4);">Mulai dengan menambahkan peraturan desa
                    pertama.</p>
                <a href="{{ route('admin.perdes.buat') }}" class="tombol tombol-primer">
                    + Tambah Peraturan Pertama
                </a>
            </div>
        @endif
    </div>
@endsection