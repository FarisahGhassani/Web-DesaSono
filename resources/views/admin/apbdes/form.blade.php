@extends('admin.layout')

@section('title', $judulHalaman)

@section('content')
<div class="admin-header">
    <div>
        <a href="{{ route('admin.apbdes.index') }}" style="color: var(--warna-abu-500); display: inline-flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
            ← Kembali ke Daftar
        </a>
        <h1 class="admin-judul">{{ $judulHalaman }}</h1>
    </div>
</div>

<div class="kartu" style="padding: var(--spacing-8); max-width: 700px;">
    <form action="{{ $dokumen ? route('admin.apbdes.perbarui', $dokumen->id) : route('admin.apbdes.simpan') }}" method="POST">
        @csrf
        @if($dokumen)
        @method('PUT')
        @endif
        
        <div class="form-grup">
            <label for="judul" class="form-label">Judul Dokumen <span style="color: var(--warna-bahaya);">*</span></label>
            <input 
                type="text" 
                id="judul" 
                name="judul" 
                class="form-input" 
                placeholder="Contoh: APBDes Tahun 2024"
                value="{{ old('judul', $dokumen->judul ?? '') }}"
                required
            >
            @error('judul')
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="grid grid-2 gap-4">
            <div class="form-grup">
                <label for="tahun_anggaran" class="form-label">Tahun Anggaran <span style="color: var(--warna-bahaya);">*</span></label>
                <input 
                    type="number" 
                    id="tahun_anggaran" 
                    name="tahun_anggaran" 
                    class="form-input" 
                    placeholder="{{ date('Y') }}"
                    value="{{ old('tahun_anggaran', $dokumen->tahun_anggaran ?? date('Y')) }}"
                    min="2000"
                    max="2100"
                    required
                >
                @error('tahun_anggaran')
                <p class="form-error">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-grup">
                <label for="jenis_dokumen" class="form-label">Jenis Dokumen <span style="color: var(--warna-bahaya);">*</span></label>
                <select id="jenis_dokumen" name="jenis_dokumen" class="form-select" required>
                    <option value="apbdes_induk" {{ old('jenis_dokumen', $dokumen->jenis_dokumen ?? '') == 'apbdes_induk' ? 'selected' : '' }}>
                        APBDes Induk
                    </option>
                    <option value="perubahan_apbdes" {{ old('jenis_dokumen', $dokumen->jenis_dokumen ?? '') == 'perubahan_apbdes' ? 'selected' : '' }}>
                        Perubahan APBDes
                    </option>
                    <option value="laporan_realisasi" {{ old('jenis_dokumen', $dokumen->jenis_dokumen ?? '') == 'laporan_realisasi' ? 'selected' : '' }}>
                        Laporan Realisasi
                    </option>
                </select>
                @error('jenis_dokumen')
                <p class="form-error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        
        <div class="form-grup">
            <label for="link_google_drive" class="form-label">Link Google Drive <span style="color: var(--warna-bahaya);">*</span></label>
            <input 
                type="url" 
                id="link_google_drive" 
                name="link_google_drive" 
                class="form-input" 
                placeholder="https://drive.google.com/file/d/..."
                value="{{ old('link_google_drive', $dokumen->link_google_drive ?? '') }}"
                required
            >
            <p style="color: var(--warna-abu-500); font-size: var(--font-size-sm); margin-top: 0.5rem;">
                Pastikan file di Google Drive sudah diatur agar dapat diakses oleh "Siapa saja yang memiliki link".
            </p>
            @error('link_google_drive')
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="form-grup">
            <label for="deskripsi" class="form-label">Deskripsi (Opsional)</label>
            <textarea 
                id="deskripsi" 
                name="deskripsi" 
                class="form-textarea" 
                rows="3"
                placeholder="Deskripsi singkat tentang dokumen ini..."
            >{{ old('deskripsi', $dokumen->deskripsi ?? '') }}</textarea>
            @error('deskripsi')
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="form-grup">
            <label class="form-checkbox">
                <input 
                    type="checkbox" 
                    name="aktif" 
                    value="1"
                    {{ old('aktif', $dokumen->aktif ?? true) ? 'checked' : '' }}
                >
                <span>Aktif (tampilkan di website)</span>
            </label>
        </div>
        
        <div class="flex gap-4" style="margin-top: var(--spacing-6);">
            <button type="submit" class="tombol tombol-primer">
                {{ $dokumen ? 'Simpan Perubahan' : 'Tambah Dokumen' }}
            </button>
            <a href="{{ route('admin.apbdes.index') }}" class="tombol tombol-sekunder">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
