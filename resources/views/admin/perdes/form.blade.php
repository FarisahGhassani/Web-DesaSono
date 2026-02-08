@extends('admin.layout')

@section('title', $judulHalaman)

@section('content')
    <div class="admin-header">
        <div>
            <a href="{{ route('admin.perdes.index') }}"
                style="color: #6b7c5a; font-size: 0.875rem; text-decoration: none;">← Kembali</a>
            <h1 class="admin-judul">{{ $judulHalaman }}</h1>
        </div>
    </div>

    <div class="kartu" style="max-width: 600px;">
        <form action="{{ $dokumen ? route('admin.perdes.perbarui', $dokumen->id) : route('admin.perdes.simpan') }}"
            method="POST">
            @csrf
            @if($dokumen) @method('PUT') @endif

            <div class="form-grup">
                <label for="judul" class="form-label">Judul *</label>
                <input type="text" id="judul" name="judul" class="form-input"
                    value="{{ old('judul', $dokumen->judul ?? '') }}" required>
            </div>

            <div class="grid grid-2 gap-4">
                <div class="form-grup">
                    <label for="nomor_peraturan" class="form-label">Nomor *</label>
                    <input type="text" id="nomor_peraturan" name="nomor_peraturan" class="form-input"
                        value="{{ old('nomor_peraturan', $dokumen->nomor_peraturan ?? '') }}" required>
                </div>
                <div class="form-grup">
                    <label for="tahun" class="form-label">Tahun *</label>
                    <input type="number" id="tahun" name="tahun" class="form-input"
                        value="{{ old('tahun', $dokumen->tahun ?? date('Y')) }}" required>
                </div>
            </div>

            <div class="form-grup">
                <label for="link_google_drive" class="form-label">Link Google Drive *</label>
                <input type="url" id="link_google_drive" name="link_google_drive" class="form-input"
                    value="{{ old('link_google_drive', $dokumen->link_google_drive ?? '') }}" required>
            </div>

            <div class="form-grup">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="form-textarea"
                    rows="2">{{ old('deskripsi', $dokumen->deskripsi ?? '') }}</textarea>
            </div>

            <div class="form-grup">
                <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <input type="checkbox" name="aktif" value="1" {{ old('aktif', $dokumen->aktif ?? true) ? 'checked' : '' }}>
                    <span>Aktif</span>
                </label>
            </div>

            <div class="flex gap-3" style="margin-top: 1.5rem;">
                <button type="submit" class="tombol tombol-primer">Simpan</button>
                <a href="{{ route('admin.perdes.index') }}" class="tombol tombol-sekunder">Batal</a>
            </div>
        </form>
    </div>
@endsection