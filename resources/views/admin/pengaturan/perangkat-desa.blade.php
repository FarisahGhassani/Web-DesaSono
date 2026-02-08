@extends('admin.layout')

@section('title', 'Perangkat Desa')

@section('content')
    <div class="admin-header">
        <div>
            <h1 class="admin-judul">Perangkat Desa</h1>
        </div>
        <a href="{{ route('admin.pengaturan.buat-perangkat-desa') }}" class="tombol tombol-primer">+ Tambah</a>
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
                                <td><span class="badge badge-primer">{{ $perangkat->urutan }}</span></td>
                                <td><strong>{{ $perangkat->nama }}</strong></td>
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
                                            class="tombol tombol-outline tombol-kecil">Edit</a>
                                        <form action="{{ route('admin.pengaturan.hapus-perangkat-desa', $perangkat->id) }}"
                                            method="POST" onsubmit="return confirm('Hapus perangkat ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="tombol tombol-bahaya tombol-kecil">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="padding: 1rem; border-top: 1px solid #e2e8f0;">{{ $perangkatDesa->links() }}</div>
        @else
            <div class="empty-state">
                <h3>Belum Ada Perangkat</h3>
                <p>Klik tombol tambah untuk menambahkan perangkat pertama.</p>
            </div>
        @endif
    </div>
@endsection