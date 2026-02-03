@extends('admin.layout')

@section('title', $judulHalaman)

@section('content')
<div class="admin-header">
    <div>
        <a href="{{ route('admin.perdes.index') }}" style="color: var(--warna-abu-500); display: inline-flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
            ← Kembali ke Daftar
        </a>
        <h1 class="admin-judul">{{ $judulHalaman }}</h1>
    </div>
</div>

<div class="kartu" style="padding: var(--spacing-8); max-width: 700px;">
    <form action="{{ $dokumen ? route('admin.perdes.perbarui', $dokumen->id) : route('admin.perdes.simpan') }}" method="POST">
        @csrf
        @if($dokumen)
        @method('PUT')
        @endif
        
        <div class="form-grup">
            <label for="judul" class="form-label">Judul Peraturan <span style="color: var(--warna-bahaya);">*</span></label>
            <input 
                type="text" 
                id="judul" 
                name="judul" 
                class="form-input" 
                placeholder="Contoh: Peraturan Desa tentang BUMDes"
                value="{{ old('judul', $dokumen->judul ?? '') }}"
                required
            >
            @error('judul')
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="grid grid-2 gap-4">
            <div class="form-grup">
                <label for="nomor_peraturan" class="form-label">Nomor Peraturan <span style="color: var(--warna-bahaya);">*</span></label>
                <input 
                    type="text" 
                    id="nomor_peraturan" 
                    name="nomor_peraturan" 
                    class="form-input" 
                    placeholder="Contoh: 01/PerDes/2024"
                    value="{{ old('nomor_peraturan', $dokumen->nomor_peraturan ?? '') }}"
                    required
                >
                @error('nomor_peraturan')
                <p class="form-error">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-grup">
                <label for="tahun" class="form-label">Tahun <span style="color: var(--warna-bahaya);">*</span></label>
                <input 
                    type="number" 
                    id="tahun" 
                    name="tahun" 
                    class="form-input" 
                    placeholder="{{ date('Y') }}"
                    value="{{ old('tahun', $dokumen->tahun ?? date('Y')) }}"
                    min="2000"
                    max="2100"
                    required
                >
                @error('tahun')
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
                placeholder="Deskripsi singkat tentang peraturan ini..."
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
                {{ $dokumen ? 'Simpan Perubahan' : 'Tambah Peraturan' }}
            </button>
            <a href="{{ route('admin.perdes.index') }}" class="tombol tombol-sekunder">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
