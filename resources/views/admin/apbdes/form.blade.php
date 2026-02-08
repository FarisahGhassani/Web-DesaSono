@extends('admin.layout')

@section('title', $judulHalaman)

@section('content')
    <div class="admin-header">
        <div>
            <a href="{{ route('admin.apbdes.index') }}" style="color: #6b7c5a; font-size: 0.875rem; text-decoration: none;">← Kembali</a>
            <h1 class="admin-judul">{{ $judulHalaman }}</h1>
        </div>
    </div>

    <div class="kartu" style="max-width: 600px;">
        <form action="{{ $dokumen ? route('admin.apbdes.perbarui', $dokumen->id) : route('admin.apbdes.simpan') }}" method="POST">
            @csrf
            @if($dokumen) @method('PUT') @endif
            
            <div class="form-grup">
                <label for="judul" class="form-label">Judul *</label>
                <input type="text" id="judul" name="judul" class="form-input" value="{{ old('judul', $dokumen->judul ?? '') }}" required>
            </div>
            
            <div class="grid grid-2 gap-4">
                <div class="form-grup">
                    <label for="tahun_anggaran" class="form-label">Tahun *</label>
                    <input type="number" id="tahun_anggaran" name="tahun_anggaran" class="form-input" value="{{ old('tahun_anggaran', $dokumen->tahun_anggaran ?? date('Y')) }}" required>
                </div>
                <div class="form-grup">
                    <label for="jenis_dokumen" class="form-label">Jenis *</label>
                    <select id="jenis_dokumen" name="jenis_dokumen" class="form-select" required>
                        <option value="apbdes_induk" {{ old('jenis_dokumen', $dokumen->jenis_dokumen ?? '') == 'apbdes_induk' ? 'selected' : '' }}>APBDes Induk</option>
                        <option value="perubahan_apbdes" {{ old('jenis_dokumen', $dokumen->jenis_dokumen ?? '') == 'perubahan_apbdes' ? 'selected' : '' }}>Perubahan APBDes</option>
                        <option value="laporan_realisasi" {{ old('jenis_dokumen', $dokumen->jenis_dokumen ?? '') == 'laporan_realisasi' ? 'selected' : '' }}>Laporan Realisasi</option>
                    </select>
                </div>
            </div>
            
            <div class="form-grup">
                <label for="link_google_drive" class="form-label">Link Google Drive *</label>
                <input type="url" id="link_google_drive" name="link_google_drive" class="form-input" value="{{ old('link_google_drive', $dokumen->link_google_drive ?? '') }}" required>
            </div>
            
            <div class="form-grup">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="form-textarea" rows="2">{{ old('deskripsi', $dokumen->deskripsi ?? '') }}</textarea>
            </div>
            
            <div class="form-grup">
                <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <input type="checkbox" name="aktif" value="1" {{ old('aktif', $dokumen->aktif ?? true) ? 'checked' : '' }}>
                    <span>Aktif</span>
                </label>
            </div>
            
            <div class="flex gap-3" style="margin-top: 1.5rem;">
                <button type="submit" class="tombol tombol-primer">Simpan</button>
                <a href="{{ route('admin.apbdes.index') }}" class="tombol tombol-sekunder">Batal</a>
            </div>
        </form>
    </div>
@endsection
