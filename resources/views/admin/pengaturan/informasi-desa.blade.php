@extends('admin.layout')

@section('title', 'Informasi Desa')

@section('content')
    <div class="admin-header">
        <div>
            <h1 class="admin-judul">Informasi Desa</h1>
        </div>
    </div>

    <div class="kartu" style="max-width: 700px;">
        <form action="{{ route('admin.pengaturan.simpan-informasi-desa') }}" method="POST">
            @csrf

            <h3 class="form-section-title">Identitas Desa</h3>

            <div class="form-grup">
                <label for="nama_desa" class="form-label">Nama Desa</label>
                <input type="text" id="nama_desa" name="nama_desa" class="form-input"
                    value="{{ $infoDesa['nama_desa'] ?? '' }}">
            </div>

            <div class="grid grid-2 gap-4">
                <div class="form-grup">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <input type="text" id="kecamatan" name="kecamatan" class="form-input"
                        value="{{ $infoDesa['kecamatan'] ?? '' }}">
                </div>
                <div class="form-grup">
                    <label for="kabupaten" class="form-label">Kabupaten</label>
                    <input type="text" id="kabupaten" name="kabupaten" class="form-input"
                        value="{{ $infoDesa['kabupaten'] ?? '' }}">
                </div>
            </div>

            <div class="grid grid-2 gap-4">
                <div class="form-grup">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <input type="text" id="provinsi" name="provinsi" class="form-input"
                        value="{{ $infoDesa['provinsi'] ?? '' }}">
                </div>
                <div class="form-grup">
                    <label for="kode_pos" class="form-label">Kode Pos</label>
                    <input type="text" id="kode_pos" name="kode_pos" class="form-input"
                        value="{{ $infoDesa['kode_pos'] ?? '' }}">
                </div>
            </div>

            <h3 class="form-section-title">Kontak</h3>

            <div class="grid grid-2 gap-4">
                <div class="form-grup">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="text" id="telepon" name="telepon" class="form-input"
                        value="{{ $infoDesa['telepon'] ?? '' }}">
                </div>
                <div class="form-grup">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-input" value="{{ $infoDesa['email'] ?? '' }}">
                </div>
            </div>

            <h3 class="form-section-title">Profil Desa</h3>

            <div class="form-grup">
                <label for="sejarah_desa" class="form-label">Sejarah Desa</label>
                <textarea id="sejarah_desa" name="sejarah_desa" class="form-textarea"
                    rows="4">{{ $infoDesa['sejarah_desa'] ?? '' }}</textarea>
            </div>

            <div class="form-grup">
                <label for="visi" class="form-label">Visi</label>
                <textarea id="visi" name="visi" class="form-textarea" rows="2">{{ $infoDesa['visi'] ?? '' }}</textarea>
            </div>

            <div class="form-grup">
                <label for="misi" class="form-label">Misi</label>
                <textarea id="misi" name="misi" class="form-textarea" rows="3">{{ $infoDesa['misi'] ?? '' }}</textarea>
            </div>

            <div style="margin-top: 1.5rem;">
                <button type="submit" class="tombol tombol-primer">Simpan</button>
            </div>
        </form>
    </div>
@endsection