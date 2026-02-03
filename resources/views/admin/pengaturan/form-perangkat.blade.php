@extends('admin.layout')

@section('title', $judulHalaman)

@section('content')
<div class="admin-header">
    <div>
        <a href="{{ route('admin.pengaturan.perangkat-desa') }}" style="color: var(--warna-abu-500); display: inline-flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
            ← Kembali ke Daftar
        </a>
        <h1 class="admin-judul">{{ $judulHalaman }}</h1>
    </div>
</div>

<div class="kartu" style="padding: var(--spacing-8); max-width: 600px;">
    <form action="{{ $perangkat ? route('admin.pengaturan.perbarui-perangkat-desa', $perangkat->id) : route('admin.pengaturan.simpan-perangkat-desa') }}" method="POST">
        @csrf
        @if($perangkat)
        @method('PUT')
        @endif
        
        <div class="form-grup">
            <label for="nama" class="form-label">Nama Lengkap <span style="color: var(--warna-bahaya);">*</span></label>
            <input 
                type="text" 
                id="nama" 
                name="nama" 
                class="form-input" 
                placeholder="Nama lengkap perangkat desa"
                value="{{ old('nama', $perangkat->nama ?? '') }}"
                required
            >
            @error('nama')
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="form-grup">
            <label for="jabatan" class="form-label">Jabatan <span style="color: var(--warna-bahaya);">*</span></label>
            <input 
                type="text" 
                id="jabatan" 
                name="jabatan" 
                class="form-input" 
                placeholder="Contoh: Kepala Desa, Sekretaris Desa"
                value="{{ old('jabatan', $perangkat->jabatan ?? '') }}"
                required
            >
            @error('jabatan')
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="form-grup">
            <label for="foto_url" class="form-label">URL Foto (Opsional)</label>
            <input 
                type="url" 
                id="foto_url" 
                name="foto_url" 
                class="form-input" 
                placeholder="https://example.com/foto.jpg"
                value="{{ old('foto_url', $perangkat->foto_url ?? '') }}"
            >
            <p style="color: var(--warna-abu-500); font-size: var(--font-size-sm); margin-top: 0.25rem;">
                Gunakan foto dengan rasio 1:1 (persegi) untuk hasil terbaik.
            </p>
            @error('foto_url')
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="form-grup">
            <label for="urutan" class="form-label">Urutan Tampil</label>
            <input 
                type="number" 
                id="urutan" 
                name="urutan" 
                class="form-input" 
                placeholder="0"
                value="{{ old('urutan', $perangkat->urutan ?? 0) }}"
                min="0"
            >
            <p style="color: var(--warna-abu-500); font-size: var(--font-size-sm); margin-top: 0.25rem;">
                Semakin kecil angka, semakin atas posisinya. Kepala Desa biasanya urutan 1.
            </p>
            @error('urutan')
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="form-grup">
            <label class="form-checkbox">
                <input 
                    type="checkbox" 
                    name="aktif" 
                    value="1"
                    {{ old('aktif', $perangkat->aktif ?? true) ? 'checked' : '' }}
                >
                <span>Aktif (tampilkan di website)</span>
            </label>
        </div>
        
        <div class="flex gap-4" style="margin-top: var(--spacing-6);">
            <button type="submit" class="tombol tombol-primer">
                {{ $perangkat ? 'Simpan Perubahan' : 'Tambah Perangkat' }}
            </button>
            <a href="{{ route('admin.pengaturan.perangkat-desa') }}" class="tombol tombol-sekunder">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
