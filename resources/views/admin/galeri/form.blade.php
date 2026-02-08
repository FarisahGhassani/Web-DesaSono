@extends('admin.layout')

@section('title', $judulHalaman)

@section('content')
    <div class="admin-header">
        <div>
            <a href="{{ route('admin.galeri.index') }}"
                style="color: #6b7c5a; font-size: 0.875rem; text-decoration: none;">← Kembali</a>
            <h1 class="admin-judul">{{ $judulHalaman }}</h1>
        </div>
    </div>

    <div class="kartu" style="max-width: 700px;">
        <form action="{{ $galeri ? route('admin.galeri.perbarui', $galeri->id) : route('admin.galeri.simpan') }}"
            method="POST">
            @csrf
            @if($galeri) @method('PUT') @endif

            <div class="form-grup">
                <label for="judul" class="form-label">Judul *</label>
                <input type="text" id="judul" name="judul" class="form-input"
                    value="{{ old('judul', $galeri->judul ?? '') }}" required>
            </div>

            <div class="grid grid-2 gap-4">
                <div class="form-grup">
                    <label for="kategori" class="form-label">Kategori *</label>
                    <select id="kategori" name="kategori" class="form-select" required>
                        <option value="dokumentasi" {{ old('kategori', $galeri->kategori ?? '') == 'dokumentasi' ? 'selected' : '' }}>Dokumentasi</option>
                        <option value="keunikan" {{ old('kategori', $galeri->kategori ?? '') == 'keunikan' ? 'selected' : '' }}>Keunikan Desa</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="gambar_url" class="form-label">URL Gambar *</label>
                    <input type="url" id="gambar_url" name="gambar_url" class="form-input"
                        value="{{ old('gambar_url', $galeri->gambar_url ?? '') }}" required>
                </div>
            </div>

            <div class="form-grup">
                <label for="ringkasan" class="form-label">Deskripsi Singkat</label>
                <textarea id="ringkasan" name="ringkasan" class="form-textarea"
                    rows="2">{{ old('ringkasan', $galeri->ringkasan ?? '') }}</textarea>
            </div>

            <div class="form-grup">
                <label for="konten" class="form-label">Konten *</label>
                <textarea id="konten" name="konten" class="form-textarea" rows="8"
                    required>{{ old('konten', $galeri->konten ?? '') }}</textarea>
            </div>

            <div class="form-grup">
                <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <input type="checkbox" name="dipublikasikan" value="1" {{ old('dipublikasikan', $galeri->dipublikasikan ?? false) ? 'checked' : '' }}>
                    <span>Publikasikan</span>
                </label>
            </div>

            <div class="flex gap-3" style="margin-top: 1.5rem;">
                <button type="submit" class="tombol tombol-primer">Simpan</button>
                <a href="{{ route('admin.galeri.index') }}" class="tombol tombol-sekunder">Batal</a>
            </div>
        </form>
    </div>
@endsection