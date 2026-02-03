@extends('admin.layout')

@section('title', 'Perangkat Desa')

@section('content')
    <div class="admin-header">
        <div>
            <h1 class="admin-judul">Perangkat Desa</h1>
            <p style="color: var(--warna-abu-500);">Kelola struktur organisasi pemerintahan desa</p>
        </div>
        <a href="{{ route('admin.pengaturan.buat-perangkat-desa') }}" class="tombol tombol-primer">
            + Tambah Perangkat
        </a>
    </div>

    <div class="kartu">
        @if($perangkatDesa->count() > 0)
            <div class="tabel-container">
                <table class="tabel">
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($perangkatDesa as $perangkat)
                            <tr>
                                <td>
                                    <span class="badge badge-primer">{{ $perangkat->urutan }}</span>
                                </td>
                                <td>
                                    <div class="flex items-center gap-3">
                                        @if($perangkat->foto_url)
                                            <img src="{{ $perangkat->foto_url }}" alt="{{ $perangkat->nama }}"
                                                style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                                        @else
                                            <div
                                                style="width: 40px; height: 40px; border-radius: 50%; background: var(--warna-abu-200); display: flex; align-items: center; justify-content: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                                    fill="none" stroke="var(--warna-abu-400)" stroke-width="2">
                                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                                                    <circle cx="12" cy="7" r="4" />
                                                </svg>
                                            </div>
                                        @endif
                                        <strong>{{ $perangkat->nama }}</strong>
                                    </div>
                                </td>
                                <td>{{ $perangkat->jabatan }}</td>
                                <td>
                                    @if($perangkat->aktif)
                                        <span class="badge badge-sukses">Aktif</span>
                                    @else
                                        <span class="badge badge-bahaya">Nonaktif</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="{{ route('admin.pengaturan.edit-perangkat-desa', $perangkat->id) }}"
                                            class="tombol tombol-outline tombol-kecil">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.pengaturan.hapus-perangkat-desa', $perangkat->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus perangkat desa ini?');">
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
                {{ $perangkatDesa->links() }}
            </div>
        @else
            <div style="text-align: center; padding: var(--spacing-12);">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none"
                    stroke="var(--warna-abu-300)" stroke-width="1.5" style="margin: 0 auto var(--spacing-4);">
                    <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M23 21v-2a4 4 0 00-3-3.87" />
                    <path d="M16 3.13a4 4 0 010 7.75" />
                </svg>
                <h3 style="color: var(--warna-abu-500); margin-bottom: var(--spacing-2);">Belum Ada Perangkat Desa</h3>
                <p style="color: var(--warna-abu-400); margin-bottom: var(--spacing-4);">Mulai dengan menambahkan perangkat desa
                    pertama.</p>
                <a href="{{ route('admin.pengaturan.buat-perangkat-desa') }}" class="tombol tombol-primer">
                    + Tambah Perangkat Pertama
                </a>
            </div>
        @endif
    </div>
@endsection