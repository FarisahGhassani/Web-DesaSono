@extends('admin.layout')

@section('title', 'Informasi Desa')

@section('content')
    <div class="admin-header">
        <div>
            <h1 class="admin-judul">Informasi Desa</h1>
            <p style="color: var(--warna-abu-500);">Kelola informasi umum dan profil desa</p>
        </div>
    </div>

    <div class="kartu" style="padding: var(--spacing-8); max-width: 800px;">
        <form action="{{ route('admin.pengaturan.simpan-informasi-desa') }}" method="POST">
            @csrf

            <h3
                style="margin-bottom: var(--spacing-4); padding-bottom: var(--spacing-2); border-bottom: 1px solid var(--warna-abu-200);">
                Identitas Desa
            </h3>

            <div class="form-grup">
                <label for="nama_desa" class="form-label">Nama Desa</label>
                <input type="text" id="nama_desa" name="nama_desa" class="form-input" placeholder="Contoh: Desa Maju Jaya"
                    value="{{ $infoDesa['nama_desa'] ?? '' }}">
            </div>

            <div class="grid grid-2 gap-4">
                <div class="form-grup">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <input type="text" id="kecamatan" name="kecamatan" class="form-input" placeholder="Nama kecamatan"
                        value="{{ $infoDesa['kecamatan'] ?? '' }}">
                </div>

                <div class="form-grup">
                    <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                    <input type="text" id="kabupaten" name="kabupaten" class="form-input" placeholder="Nama kabupaten/kota"
                        value="{{ $infoDesa['kabupaten'] ?? '' }}">
                </div>
            </div>

            <div class="grid grid-2 gap-4">
                <div class="form-grup">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <input type="text" id="provinsi" name="provinsi" class="form-input" placeholder="Nama provinsi"
                        value="{{ $infoDesa['provinsi'] ?? '' }}">
                </div>

                <div class="form-grup">
                    <label for="kode_pos" class="form-label">Kode Pos</label>
                    <input type="text" id="kode_pos" name="kode_pos" class="form-input" placeholder="12345"
                        value="{{ $infoDesa['kode_pos'] ?? '' }}">
                </div>
            </div>

            <div class="form-grup">
                <label for="alamat_lengkap" class="form-label">Alamat Lengkap Kantor Desa</label>
                <textarea id="alamat_lengkap" name="alamat_lengkap" class="form-textarea" rows="2"
                    placeholder="Jl. Contoh No. 123, RT 01 RW 01">{{ $infoDesa['alamat_lengkap'] ?? '' }}</textarea>
            </div>

            <h3
                style="margin: var(--spacing-8) 0 var(--spacing-4); padding-bottom: var(--spacing-2); border-bottom: 1px solid var(--warna-abu-200);">
                Kontak
            </h3>

            <div class="grid grid-2 gap-4">
                <div class="form-grup">
                    <label for="telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" id="telepon" name="telepon" class="form-input" placeholder="(021) 1234567"
                        value="{{ $infoDesa['telepon'] ?? '' }}">
                </div>

                <div class="form-grup">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="desa@email.com"
                        value="{{ $infoDesa['email'] ?? '' }}">
                </div>
            </div>

            <h3
                style="margin: var(--spacing-8) 0 var(--spacing-4); padding-bottom: var(--spacing-2); border-bottom: 1px solid var(--warna-abu-200);">
                Lokasi (untuk Peta)
            </h3>

            <div class="grid grid-2 gap-4">
                <div class="form-grup">
                    <label for="latitude" class="form-label">Latitude</label>
                    <input type="text" id="latitude" name="latitude" class="form-input" placeholder="-7.5574"
                        value="{{ $infoDesa['latitude'] ?? '' }}">
                </div>

                <div class="form-grup">
                    <label for="longitude" class="form-label">Longitude</label>
                    <input type="text" id="longitude" name="longitude" class="form-input" placeholder="110.8249"
                        value="{{ $infoDesa['longitude'] ?? '' }}">
                </div>
            </div>
            <p style="color: var(--warna-abu-500); font-size: var(--font-size-sm); margin-top: -0.5rem;">
                Koordinat bisa didapat dari Google Maps. Klik kanan lokasi → Copy koordinat.
            </p>

            <h3
                style="margin: var(--spacing-8) 0 var(--spacing-4); padding-bottom: var(--spacing-2); border-bottom: 1px solid var(--warna-abu-200);">
                Profil Desa
            </h3>

            <div class="form-grup">
                <label for="sejarah_desa" class="form-label">Sejarah Desa</label>
                <textarea id="sejarah_desa" name="sejarah_desa" class="form-textarea" rows="6"
                    placeholder="Ceritakan sejarah singkat desa...">{{ $infoDesa['sejarah_desa'] ?? '' }}</textarea>
            </div>

            <div class="form-grup">
                <label for="visi" class="form-label">Visi Desa</label>
                <textarea id="visi" name="visi" class="form-textarea" rows="3"
                    placeholder="Visi pembangunan desa...">{{ $infoDesa['visi'] ?? '' }}</textarea>
            </div>

            <div class="form-grup">
                <label for="misi" class="form-label">Misi Desa</label>
                <textarea id="misi" name="misi" class="form-textarea" rows="5"
                    placeholder="Misi pembangunan desa (bisa beberapa poin, pisahkan dengan enter)...">{{ $infoDesa['misi'] ?? '' }}</textarea>
            </div>

            <h3
                style="margin: var(--spacing-8) 0 var(--spacing-4); padding-bottom: var(--spacing-2); border-bottom: 1px solid var(--warna-abu-200);">
                Sambutan Kepala Desa
            </h3>

            <div class="form-grup">
                <label for="nama_kepala_desa" class="form-label">Nama Kepala Desa</label>
                <input type="text" id="nama_kepala_desa" name="nama_kepala_desa" class="form-input"
                    placeholder="Nama lengkap kepala desa" value="{{ $infoDesa['nama_kepala_desa'] ?? '' }}">
            </div>

            <div class="form-grup">
                <label for="sambutan_kepala_desa" class="form-label">Sambutan Kepala Desa</label>
                <textarea id="sambutan_kepala_desa" name="sambutan_kepala_desa" class="form-textarea" rows="4"
                    placeholder="Kata sambutan yang ditampilkan di halaman beranda...">{{ $infoDesa['sambutan_kepala_desa'] ?? '' }}</textarea>
            </div>

            <h3
                style="margin: var(--spacing-8) 0 var(--spacing-4); padding-bottom: var(--spacing-2); border-bottom: 1px solid var(--warna-abu-200);">
                Link Google Drive (Transparansi)
            </h3>

            <div class="form-grup">
                <label for="folder_google_drive_apbdes" class="form-label">Link Folder APBDes</label>
                <input type="url" id="folder_google_drive_apbdes" name="folder_google_drive_apbdes" class="form-input"
                    placeholder="https://drive.google.com/drive/folders/..."
                    value="{{ $infoDesa['folder_google_drive_apbdes'] ?? '' }}">
            </div>

            <div class="form-grup">
                <label for="folder_google_drive_perdes" class="form-label">Link Folder PerDes</label>
                <input type="url" id="folder_google_drive_perdes" name="folder_google_drive_perdes" class="form-input"
                    placeholder="https://drive.google.com/drive/folders/..."
                    value="{{ $infoDesa['folder_google_drive_perdes'] ?? '' }}">
            </div>

            <div style="margin-top: var(--spacing-8);">
                <button type="submit" class="tombol tombol-primer">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection