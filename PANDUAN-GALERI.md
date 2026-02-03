# 📸 PANDUAN GALERI DESA

## Cara Kerja Galeri Baru

Galeri sekarang **TIDAK PAKAI DATABASE** lagi. Semua foto disimpan di **Google Photos** atau **Google Drive**, dan website hanya menampilkan embed-nya.

---

## 🎯 Metode 1: Pakai Google Photos (RECOMMENDED)

### Keunggulan:
- ✅ Paling mudah dan otomatis
- ✅ Upload foto baru = langsung muncul di website
- ✅ Tidak perlu edit kode lagi
- ✅ Gratis unlimited storage (kalitas High quality)

### Langkah-langkah:

#### 1. Buat Album di Google Photos
1. Buka [Google Photos](https://photos.google.com)
2. Login dengan akun Google Anda
3. Klik **Library** > **Albums** > **Create album**
4. Beri nama album (contoh: "Kegiatan Desa 2026" atau "UMKM Desa Sono")

#### 2. Upload Foto ke Album
1. Klik album yang baru dibuat
2. Klik **Add photos**
3. Upload semua foto yang ingin ditampilkan
4. Foto akan otomatis tersimpan di album

#### 3. Dapatkan Link Share Album
1. Buka album yang sudah diisi foto
2. Klik tombol **Share** (icon 👤➕ di kanan atas)
3. Klik **Create link**
4. Pastikan link sharing **ON**
5. **Copy link** yang muncul (contoh: `https://photos.app.goo.gl/ABcdEF12345`)

#### 4. Masukkan Link ke Website
1. Buka file: `config/galeri-desa.php`
2. Cari bagian kategori yang ingin diisi (contoh: `'kegiatan'` atau `'umkm'`)
3. Ganti nilai `'google_photos_url'` dengan link yang dicopy tadi:

```php
'kegiatan' => [
    'enabled' => true,
    'judul' => 'KEGIATAN DESA',
    'deskripsi' => 'Dokumentasi berbagai kegiatan dan acara yang dilakukan di desa',
    'google_photos_url' => 'https://photos.app.goo.gl/ABcdEF12345',  // ← PASTE LINK DI SINI
],
```

4. **Save file**
5. **Refresh website** → Foto langsung muncul!

#### 5. Cara Update Foto (Nanti)
- Upload foto baru ke album Google Photos yang sama
- **Website otomatis update**, TIDAK PERLU edit file `config/galeri-desa.php` lagi!

---

## 🗂️ Metode 2: Pakai Foto Manual dari Google Drive

### Keunggulan:
- ✅ Lebih fleksibel, bisa atur judul & tanggal tiap foto
- ❌ Harus edit file setiap kali tambah foto baru

### Langkah-langkah:

#### 1. Upload Foto ke Google Drive
1. Buka [Google Drive](https://drive.google.com)
2. Buat folder baru (contoh: "Foto Galeri Desa")
3. Upload semua foto ke folder tersebut

#### 2. Dapatkan Link Direct Download Tiap Foto
Untuk setiap foto:
1. Klik kanan foto → **Get link**
2. Pastikan **Anyone with the link** can view
3. Copy link yang didapat (contoh: `https://drive.google.com/file/d/1aBcDeF_xYz/view?usp=sharing`)
4. Ambil **FILE_ID** dari link tersebut (bagian `1aBcDeF_xYz`)
5. Buat URL direct: `https://drive.google.com/uc?id=1aBcDeF_xYz`

#### 3. Masukkan ke Config File
Edit file `config/galeri-desa.php`:

```php
'kegiatan' => [
    'enabled' => true,
    'judul' => 'KEGIATAN DESA',
    'deskripsi' => 'Dokumentasi berbagai kegiatan',
    'google_photos_url' => '',  // Kosongkan ini jika pakai foto manual
    'foto_manual' => [
        [
            'url' => 'https://drive.google.com/uc?id=1aBcDeF_xYz',
            'judul' => 'Gotong Royong Pembersihan Desa',
            'tanggal' => '15 Januari 2026',
        ],
        [
            'url' => 'https://drive.google.com/uc?id=2GhIjKl_MnO',
            'judul' => 'Musyawarah Desa',
            'tanggal' => '20 Januari 2026',
        ],
        // Tambahkan foto lainnya di sini...
    ],
],
```

---

## 🎨 Menambah Kategori Baru

Jika ingin menambah kategori galeri (contoh: "Wisata Desa"):

1. Buka `config/galeri-desa.php`
2. Tambahkan entry baru:

```php
'wisata' => [
    'enabled' => true,
    'judul' => 'WISATA DESA',
    'deskripsi' => 'Keindahan dan destinasi wisata di desa',
    'google_photos_url' => 'https://photos.app.goo.gl/LINK_ALBUM_WISATA',
    'foto_manual' => [],
],
```

---

## ❓ Troubleshooting

### Foto Google Photos tidak muncul?
- Pastikan link album sudah di-share (public)
- Pastikan minimal ada 1 foto di album
- Coba buka link album di browser incognito, jika bisa dibuka berarti sudah benar

### Foto Google Drive tidak muncul?
- Pastikan sharing permission = "Anyone with the link"
- Pastikan format URL benar: `https://drive.google.com/uc?id=FILE_ID`
- Jangan pakai URL view (`/file/d/...`)

### Galeri kosong terus?
- Cek `'enabled' => true` di config
- Cek ada isi di `'google_photos_url'` atau `'foto_manual'`
- Clear cache browser (Ctrl+Shift+R)

---

## 💾 Backup & Restore

### Backup:
- File config: Copy `config/galeri-desa.php`
- Foto: Sudah aman di Google Photos/Drive

### Restore:
- Paste kembali file `config/galeri-desa.php`
- Foto tetap ada di Google, tidak perlu restore

---

## 📌 Tips & Best Practices

1. **Gunakan Google Photos** untuk galeri yang sering update (kegiatan, acara)
2. **Gunakan foto manual** untuk galeri yang jarang berubah (profil UMKM tetap)
3. **Nama album jelas** agar mudah dikelola nanti
4. **Compress foto** sebelum upload (max 2MB per foto) agar loading cepat
5. **Backup link** album Google Photos di notepad, jaga-jaga

---

## 🚀 Kelebihan Sistem Baru

| Aspek | Sistem Lama (Database) | Sistem Baru (Google Photos) |
|-------|------------------------|------------------------------|
| Upload foto | Via admin panel | Langsung ke Google Photos |
| Storage | Server hosting (terbatas) | Google (unlimited) |
| Update foto | Login admin → upload | Upload ke album Google |
| Kompleksitas | Butuh database & admin | Cukup edit 1 file config |
| Backup | Harus manual backup database | Otomatis di Google |

---

Selamat menggunakan! 🎉
