@extends('admin.layout')

@section('title', 'Dokumen APBDes')

@section('content')
    <div class="admin-header">
        <div>
            <h1 class="admin-judul">Dokumen APBDes</h1>
        </div>
        <a href="{{ route('admin.apbdes.buat') }}" class="tombol tombol-primer">+ Tambah</a>
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
                                <td><strong>{{ $dokumen->judul }}</strong></td>
                                <td><span class="badge badge-primer">{{ $dokumen->tahun_anggaran }}</span></td>
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
                                            class="tombol tombol-sekunder tombol-kecil">Lihat</a>
                                        <a href="{{ route('admin.apbdes.edit', $dokumen->id) }}"
                                            class="tombol tombol-outline tombol-kecil">Edit</a>
                                        <form action="{{ route('admin.apbdes.hapus', $dokumen->id) }}" method="POST"
                                            onsubmit="return confirm('Hapus dokumen ini?');">
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
            <div style="padding: 1rem; border-top: 1px solid #e2e8f0;">{{ $dokumenApbdes->links() }}</div>
        @else
            <div class="empty-state">
                <h3>Belum Ada Dokumen</h3>
                <p>Klik tombol tambah untuk menambahkan dokumen pertama.</p>
            </div>
        @endif
    </div>
@endsection