@extends('admin.layout')

@section('title', $judulHalaman)

@section('content')
    <div class="admin-header">
        <div>
            <a href="{{ route('admin.pengaturan.perangkat-desa') }}"
                style="color: #6b7c5a; font-size: 0.875rem; text-decoration: none;">← Kembali</a>
            <h1 class="admin-judul">{{ $judulHalaman }}</h1>
        </div>
    </div>

    <div class="kartu" style="max-width: 500px;">
        <form
            action="{{ $perangkat ? route('admin.pengaturan.perbarui-perangkat-desa', $perangkat->id) : route('admin.pengaturan.simpan-perangkat-desa') }}"
            method="POST">
            @csrf
            @if($perangkat) @method('PUT') @endif

            <div class="form-grup">
                <label for="nama" class="form-label">Nama *</label>
                <input type="text" id="nama" name="nama" class="form-input"
                    value="{{ old('nama', $perangkat->nama ?? '') }}" required>
            </div>

            <div class="form-grup">
                <label for="jabatan" class="form-label">Jabatan *</label>
                <input type="text" id="jabatan" name="jabatan" class="form-input"
                    value="{{ old('jabatan', $perangkat->jabatan ?? '') }}" required>
            </div>

            <div class="form-grup">
                <label for="foto_url" class="form-label">URL Foto</label>
                <input type="url" id="foto_url" name="foto_url" class="form-input"
                    value="{{ old('foto_url', $perangkat->foto_url ?? '') }}">
            </div>

            <div class="form-grup">
                <label for="urutan" class="form-label">Urutan</label>
                <input type="number" id="urutan" name="urutan" class="form-input"
                    value="{{ old('urutan', $perangkat->urutan ?? 0) }}" min="0" style="max-width: 100px;">
            </div>

            <div class="form-grup">
                <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <input type="checkbox" name="aktif" value="1" {{ old('aktif', $perangkat->aktif ?? true) ? 'checked' : '' }}>
                    <span>Aktif</span>
                </label>
            </div>

            <div class="flex gap-3" style="margin-top: 1.5rem;">
                <button type="submit" class="tombol tombol-primer">Simpan</button>
                <a href="{{ route('admin.pengaturan.perangkat-desa') }}" class="tombol tombol-sekunder">Batal</a>
            </div>
        </form>
    </div>
@endsection