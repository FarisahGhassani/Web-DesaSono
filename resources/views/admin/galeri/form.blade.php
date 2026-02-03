@extends('admin.layout')

@section('title', $judulHalaman)

@section('content')
    <div class="admin-header">
        <div>
            <a href="{{ route('admin.galeri.index') }}"
                style="color: var(--warna-teks-sekunder); display: inline-flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                ← Kembali ke Daftar
            </a>
            <h1 class="admin-judul">{{ $judulHalaman }}</h1>
        </div>
    </div>

    <div class="kartu glass" style="padding: var(--spacing-8); max-width: 800px; border-radius: var(--radius-2xl);">
        <form action="{{ $galeri ? route('admin.galeri.perbarui', $galeri->id) : route('admin.galeri.simpan') }}"
            method="POST">
            @csrf
            @if($galeri)
                @method('PUT')
            @endif

            <div class="form-grup">
                <label for="judul" class="form-label">Judul Dokumentasi <span
                        style="color: var(--warna-bahaya);">*</span></label>
                <input type="text" id="judul" name="judul" class="form-input" placeholder="Masukkan judul dokumentasi..."
                    value="{{ old('judul', $galeri->judul ?? '') }}" required>
                @error('judul')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-2 gap-4">
                <div class="form-grup">
                    <label for="kategori" class="form-label">Kategori <span
                            style="color: var(--warna-bahaya);">*</span></label>
                    <select id="kategori" name="kategori" class="form-select" required>
                        <option value="dokumentasi" {{ old('kategori', $galeri->kategori ?? '') == 'dokumentasi' ? 'selected' : '' }}>
                            Dokumentasi Kegiatan
                        </option>
                        <option value="keunikan" {{ old('kategori', $galeri->kategori ?? '') == 'keunikan' ? 'selected' : '' }}>
                            Keunikan Desa
                        </option>
                    </select>
                    @error('kategori')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-grup">
                    <label for="gambar_url" class="form-label">URL Gambar (Wajib)</label>
                    <input type="url" id="gambar_url" name="gambar_url" class="form-input"
                        placeholder="https://example.com/gambar.jpg"
                        value="{{ old('gambar_url', $galeri->gambar_url ?? '') }}" required>
                    @error('gambar_url')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-grup">
                <label for="ringkasan" class="form-label">Deskripsi Singkat (Opsional)</label>
                <textarea id="ringkasan" name="ringkasan" class="form-textarea" rows="2"
                    placeholder="Deskripsi singkat untuk preview..."
                    maxlength="500">{{ old('ringkasan', $galeri->ringkasan ?? '') }}</textarea>
                <p style="color: var(--warna-teks-sekunder); font-size: var(--font-size-sm); margin-top: 0.25rem;">
                    Maksimal 500 karakter.
                </p>
                @error('ringkasan')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-grup">
                <label for="konten" class="form-label">Konten Lengkap <span
                        style="color: var(--warna-bahaya);">*</span></label>
                <textarea id="konten" name="konten" class="form-textarea" rows="12"
                    placeholder="Tulis cerita atau detail lengkap di sini..."
                    required>{{ old('konten', $galeri->konten ?? '') }}</textarea>
                <p style="color: var(--warna-teks-sekunder); font-size: var(--font-size-sm); margin-top: 0.25rem;">
                    Anda dapat menggunakan HTML untuk format teks.
                </p>
                @error('konten')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-grup">
                <label class="form-checkbox">
                    <input type="checkbox" name="dipublikasikan" value="1" {{ old('dipublikasikan', $galeri->dipublikasikan ?? false) ? 'checked' : '' }}>
                    <span style="color: var(--warna-teks-utama);">Publikasikan sekarang</span>
                </label>
                <p style="color: var(--warna-teks-sekunder); font-size: var(--font-size-sm); margin-top: 0.25rem;">
                    Jika tidak dicentang, dokumentasi akan disimpan sebagai draft.
                </p>
            </div>

            <div class="flex gap-4" style="margin-top: var(--spacing-6);">
                <button type="submit" class="tombol tombol-primer">
                    {{ $galeri ? 'Simpan Perubahan' : 'Tambah Dokumentasi' }}
                </button>
                <a href="{{ route('admin.galeri.index') }}" class="tombol tombol-sekunder">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection