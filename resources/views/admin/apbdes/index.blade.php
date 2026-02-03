@extends('admin.layout')

@section('title', 'Kelola Dokumen APBDes')

@section('content')
    <div class="admin-header">
        <div>
            <h1 class="admin-judul">Dokumen APBDes</h1>
            <p style="color: var(--warna-abu-500);">Kelola dokumen Anggaran Pendapatan dan Belanja Desa</p>
        </div>
        <a href="{{ route('admin.apbdes.buat') }}" class="tombol tombol-primer">
            + Tambah Dokumen
        </a>
    </div>

    <div class="kartu">
        @if($dokumenApbdes->count() > 0)
            <div class="tabel-container">
                <table class="tabel">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Tahun</th>
                            <th>Jenis</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dokumenApbdes as $dokumen)
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
                                    <span class="badge badge-primer">{{ $dokumen->tahun_anggaran }}</span>
                                </td>
                                <td>{{ $dokumen->label_jenis }}</td>
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
                                        <a href="{{ route('admin.apbdes.edit', $dokumen->id) }}"
                                            class="tombol tombol-outline tombol-kecil">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.apbdes.hapus', $dokumen->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus dokumen ini?');">
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
                {{ $dokumenApbdes->links() }}
            </div>
        @else
            <div style="text-align: center; padding: var(--spacing-12);">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none"
                    stroke="var(--warna-abu-300)" stroke-width="1.5" style="margin: 0 auto var(--spacing-4);">
                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                    <polyline points="14 2 14 8 20 8" />
                </svg>
                <h3 style="color: var(--warna-abu-500); margin-bottom: var(--spacing-2);">Belum Ada Dokumen</h3>
                <p style="color: var(--warna-abu-400); margin-bottom: var(--spacing-4);">Mulai dengan menambahkan dokumen APBDes
                    pertama.</p>
                <a href="{{ route('admin.apbdes.buat') }}" class="tombol tombol-primer">
                    + Tambah Dokumen Pertama
                </a>
            </div>
        @endif
    </div>
@endsection