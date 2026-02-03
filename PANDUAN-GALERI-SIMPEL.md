# 📸 PANDUAN GALERI DESA (SUPER SIMPEL!)

## Cara Setup Pertama Kali (Cuma Sekali Aja!)

### Langkah 1: Buat Album di Google Photos
1. Buka [Google Photos](https://photos.google.com)
2. Klik **Albums** di sidebar kiri
3. Klik **Create album** (tombol +)
4. Beri nama: **"Kegiatan Desa Sono"**
5. Upload semua foto kegiatan desa ke album ini

### Langkah 2: Dapatkan Link Album
1. Buka album "Kegiatan Desa Sono" yang baru dibuat
2. Klik tombol **Share** (icon 👥 di pojok kanan atas)
3. Klik **Create link**
4. **COPY** link yang muncul (contoh: `https://photos.app.goo.gl/abc123xyz`)

### Langkah 3: Masukkan Link ke Website
1. Buka file: `resources/views/galeri/index.blade.php`
2. Cari baris 117 yang ada tulisan:
   ```html
   src="https://photos.app.goo.gl/LINK_ALBUM_KEGIATAN_DESA"
   ```
3. **GANTI** `LINK_ALBUM_KEGIATAN_DESA` dengan link yang Anda copy tadi
4. Hasilnya jadi seperti ini:
   ```html
   src="https://photos.app.goo.gl/abc123xyz"
   ```
5. **SAVE** file

### Langkah 4: Ulangi untuk UMKM (Opsional)
1. Buat album baru: **"UMKM Desa Sono"**
2. Upload foto produk UMKM
3. Dapatkan link share
4. Ganti di baris 133 (bagian UMKM)

### ✅ SELESAI!

---

## Cara Update Galeri (Selamanya)

Setelah setup di atas, Anda **TIDAK PERLU EDIT CODE LAGI**.

### Cara Tambah Foto Baru:
1. Buka Google Photos
2. Buka album "Kegiatan Desa Sono" 
3. Upload foto baru
4. **SELESAI!** Foto otomatis muncul di website

### Cara Hapus Foto:
1. Buka Google Photos
2. Buka album "Kegiatan Desa Sono"
3. Hapus foto yang tidak ingin ditampilkan
4. **SELESAI!** Foto otomatis hilang dari website

### Cara Ganti Foto:
1. Hapus foto lama
2. Upload foto baru
3. **SELESAI!**

---

## FAQ (Pertanyaan Sering Ditanya)

### Q: Apa bedanya dengan yang tadi (config file)?
**A:** Yang tadi masih harus edit file config setiap kategori baru. Yang sekarang **cukup edit sekali** saat setup awal, selamanya tinggal manage di Google Photos.

### Q: Kalau mau tambah kategori galeri baru (misalnya "Wisata Desa")?
**A:** Tinggal copy-paste section yang ada di view, ganti judul dan link album saja. Cuma 1x edit code.

### Q: Foto tidak muncul?
**A:** Pastikan:
- Link album sudah di-share (public)
- Link sudah benar (coba buka link di browser)
- Minimal ada 1 foto di album

### Q: Berapa lama foto muncul setelah upload?
**A:** Instant! Begitu upload ke Google Photos, langsung muncul di website.

---

## Ringkasan

| Aksi | Frekuensi | Cara |
|------|-----------|------|
| Setup awal | **1x saja** | Edit file view, masukkan link album |
| Tambah foto | **Kapan saja** | Upload ke Google Photos |
| Hapus foto | **Kapan saja** | Hapus dari Google Photos |
| Edit code | **Tidak perlu lagi** | ❌ |

---

**Enjoy! 🎉**
