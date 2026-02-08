@extends('admin.layout')

@section('title', 'Galeri Desa')

@section('content')
    <div class="admin-header">
        <div>
            <h1 class="admin-judul">Galeri Desa</h1>
        </div>
        <a href="{{ route('admin.galeri.buat') }}" class="tombol tombol-primer">+ Tambah</a>
    </div>

    <div class="kartu">
        @if($daftarGaleri->count() > 0)
            <div class="tabel-container">
                <table class="tabel">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftarGaleri as $galeri)
                            <tr>
                                <td><strong>{{ Str::limit($galeri->judul, 40) }}</strong></td>
                                <td><span class="badge badge-info">{{ $galeri->label_kategori }}</span></td>
                                <td>
                                    @if($galeri->dipublikasikan)
                                        <span class="badge badge-sukses">Aktif</span>
                                    @else
                                        <span class="badge badge-peringatan">Draft</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="{{ route('admin.galeri.edit', $galeri->id) }}"
                                            class="tombol tombol-outline tombol-kecil">Edit</a>
                                        <form action="{{ route('admin.galeri.hapus', $galeri->id) }}" method="POST"
                                            onsubmit="return confirm('Hapus galeri ini?');">
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
            <div style="padding: 1rem; border-top: 1px solid #e2e8f0;">{{ $daftarGaleri->links() }}</div>
        @else
            <div class="empty-state">
                <h3>Belum Ada Galeri</h3>
                <p>Klik tombol tambah untuk menambahkan galeri pertama.</p>
            </div>
        @endif
    </div>
@endsection