<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\InformasiDesa;
use App\Models\PerangkatDesa;
use App\Models\DokumenApbdes;
use App\Models\DokumenPerdes;
use App\Models\Berita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * Seeder Database
 * 
 * Menyiapkan data awal untuk website desa termasuk:
 * - User admin
 * - Informasi desa
 * - Perangkat desa contoh
 * - Dokumen APBDes contoh
 * - Dokumen PerDes contoh
 * - Berita contoh
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Jalankan seeder database
     */
    public function run(): void
    {
        // ========================================
        // Buat User Admin
        // ========================================
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@desa.id',
            'password' => Hash::make('password'),
        ]);

        // ========================================
        // Informasi Desa
        // ========================================
        $informasiDesa = [
            'nama_desa' => 'Desa Sono',
            'kecamatan' => 'Kecamatan Mondokan',
            'kabupaten' => 'Kabupaten Sragen',
            'provinsi' => 'Jawa Tengah',
            'kode_pos' => '57271',
            'alamat_lengkap' => '
Dusun Buras, Sono, Kec. Mondokan, Kabupaten Sragen, Jawa Tengah, Indonesia',
            'telepon' => '081330949672',
            'email' => 'kk.wargasono@gmail.com',
            'latitude' => '-7.3372001',
            'longitude' => '110.912894',
            'sejarah_desa' => 'Desa Sono memiliki sejarah panjang yang dimulai sejak era kemerdekaan Indonesia. Desa ini awalnya merupakan perkampungan kecil yang berkembang menjadi desa mandiri dengan berbagai potensi pertanian dan kerajinan lokal.

Pada tahun 1960-an, desa ini mulai mengembangkan sistem irigasi yang membantu pertanian menjadi lebih produktif. Hingga kini, Desa Sono Makmur terus berkembang sebagai desa yang mengedepankan gotong royong dan kemajuan bersama.',
            'visi' => 'Terwujudnya Desa Sono Makmur yang Mandiri, Sejahtera, dan Berbudaya berbasis Pertanian dan Ekonomi Kreatif.',
            'misi' => '1. Meningkatkan kualitas pelayanan publik yang transparan dan akuntabel
2. Mengembangkan infrastruktur desa yang memadai dan berkelanjutan
3. Meningkatkan kesejahteraan masyarakat melalui pemberdayaan ekonomi lokal
4. Melestarikan nilai-nilai budaya dan kearifan lokal
5. Meningkatkan kualitas pendidikan dan kesehatan masyarakat',
            'nama_kepala_desa' => 'H. Ahmad Suryanto, S.Pd.',
            'sambutan_kepala_desa' => 'Selamat datang di website resmi Desa Sono Makmur. Website ini hadir sebagai wujud komitmen kami dalam memberikan pelayanan informasi yang transparan kepada seluruh masyarakat. Mari bersama-sama membangun desa kita menuju masa depan yang lebih baik.',
            'folder_google_drive_apbdes' => 'https://drive.google.com/drive/folders/1ZDba606dOvYDDx9DvddzoVNjE9F6dZBt?usp=sharing', // Default link dari permintaan user
            'folder_google_drive_perdes' => 'https://drive.google.com/drive/folders/1ZDba606dOvYDDx9DvddzoVNjE9F6dZBt?usp=sharing',
        ];

        foreach ($informasiDesa as $kunci => $nilai) {
            InformasiDesa::simpan($kunci, $nilai, "Pengaturan: {$kunci}");
        }

        // ========================================
        // Perangkat Desa
        // ========================================
        $perangkatDesa = [
            [
                'nama' => 'H. Ahmad Suryanto, S.Pd.',
                'jabatan' => 'Kepala Desa',
                'urutan' => 1,
                'aktif' => true,
            ],
            [
                'nama' => 'Budi Santoso, S.E.',
                'jabatan' => 'Sekretaris Desa',
                'urutan' => 2,
                'aktif' => true,
            ],
            [
                'nama' => 'Siti Aminah',
                'jabatan' => 'Kaur Keuangan',
                'urutan' => 3,
                'aktif' => true,
            ],
            [
                'nama' => 'Rudi Hartono',
                'jabatan' => 'Kaur Perencanaan',
                'urutan' => 4,
                'aktif' => true,
            ],
            [
                'nama' => 'Sri Wahyuni',
                'jabatan' => 'Kasi Pemerintahan',
                'urutan' => 5,
                'aktif' => true,
            ],
            [
                'nama' => 'Agus Widodo',
                'jabatan' => 'Kasi Kesejahteraan',
                'urutan' => 6,
                'aktif' => true,
            ],
        ];

        foreach ($perangkatDesa as $perangkat) {
            PerangkatDesa::create($perangkat);
        }

        // ========================================
        // Dokumen APBDes Contoh
        // ========================================
        $dokumenApbdes = [
            [
                'judul' => 'APBDes Tahun 2024',
                'tahun_anggaran' => 2024,
                'jenis_dokumen' => 'apbdes_induk',
                'deskripsi' => 'Anggaran Pendapatan dan Belanja Desa Tahun Anggaran 2024',
                'link_google_drive' => 'https://drive.google.com/file/d/contoh-apbdes-2024',
                'aktif' => true,
            ],
            [
                'judul' => 'Perubahan APBDes Tahun 2024',
                'tahun_anggaran' => 2024,
                'jenis_dokumen' => 'perubahan_apbdes',
                'deskripsi' => 'Perubahan Anggaran Pendapatan dan Belanja Desa Tahun 2024',
                'link_google_drive' => 'https://drive.google.com/file/d/contoh-perubahan-apbdes-2024',
                'aktif' => true,
            ],
            [
                'judul' => 'APBDes Tahun 2023',
                'tahun_anggaran' => 2023,
                'jenis_dokumen' => 'apbdes_induk',
                'deskripsi' => 'Anggaran Pendapatan dan Belanja Desa Tahun Anggaran 2023',
                'link_google_drive' => 'https://drive.google.com/file/d/contoh-apbdes-2023',
                'aktif' => true,
            ],
            [
                'judul' => 'Laporan Realisasi APBDes 2023',
                'tahun_anggaran' => 2023,
                'jenis_dokumen' => 'laporan_realisasi',
                'deskripsi' => 'Laporan Pertanggungjawaban Realisasi Pelaksanaan APBDes Tahun 2023',
                'link_google_drive' => 'https://drive.google.com/file/d/contoh-realisasi-2023',
                'aktif' => true,
            ],
        ];

        foreach ($dokumenApbdes as $dokumen) {
            DokumenApbdes::create($dokumen);
        }

        // ========================================
        // Dokumen PerDes Contoh
        // ========================================
        $dokumenPerdes = [
            [
                'judul' => 'Peraturan Desa tentang APBDes Tahun 2024',
                'nomor_peraturan' => '01/PerDes/2024',
                'tahun' => 2024,
                'deskripsi' => 'Peraturan Desa yang mengatur tentang Anggaran Pendapatan dan Belanja Desa',
                'link_google_drive' => 'https://drive.google.com/file/d/contoh-perdes-apbdes-2024',
                'aktif' => true,
            ],
            [
                'judul' => 'Peraturan Desa tentang BUMDes',
                'nomor_peraturan' => '02/PerDes/2024',
                'tahun' => 2024,
                'deskripsi' => 'Peraturan Desa tentang Pendirian dan Pengelolaan Badan Usaha Milik Desa',
                'link_google_drive' => 'https://drive.google.com/file/d/contoh-perdes-bumdes',
                'aktif' => true,
            ],
            [
                'judul' => 'Peraturan Desa tentang Pungutan Desa',
                'nomor_peraturan' => '03/PerDes/2023',
                'tahun' => 2023,
                'deskripsi' => 'Peraturan Desa yang mengatur tentang jenis dan besaran pungutan desa',
                'link_google_drive' => 'https://drive.google.com/file/d/contoh-perdes-pungutan',
                'aktif' => true,
            ],
        ];

        foreach ($dokumenPerdes as $dokumen) {
            DokumenPerdes::create($dokumen);
        }

        // ========================================
        // Berita Contoh
        // ========================================
        $berita = [
            [
                'judul' => 'Musyawarah Desa Pembahasan APBDes 2025',
                'slug' => 'musyawarah-desa-apbdes-2025',
                'ringkasan' => 'Pemerintah Desa Sono Makmur menggelar musyawarah desa untuk membahas rancangan APBDes tahun 2025.',
                'konten' => '<p>Pemerintah Desa Sono Makmur menggelar musyawarah desa (Musdes) untuk membahas Rancangan Anggaran Pendapatan dan Belanja Desa (RAPBDes) Tahun Anggaran 2025. Acara ini dihadiri oleh seluruh perangkat desa, BPD, dan perwakilan masyarakat dari setiap RT.</p>

<p>Dalam musyawarah tersebut, dibahas berbagai program prioritas pembangunan desa meliputi:</p>
<ul>
<li>Pembangunan infrastruktur jalan desa</li>
<li>Pengembangan sarana pendidikan</li>
<li>Program pemberdayaan masyarakat</li>
<li>Pengembangan BUMDes</li>
</ul>

<p>Kepala Desa H. Ahmad Suryanto menyampaikan bahwa musyawarah ini merupakan wujud demokrasi di tingkat desa dan pentingnya partisipasi masyarakat dalam menentukan arah pembangunan desa.</p>',
                'gambar_url' => 'https://images.unsplash.com/photo-1573167243872-43c6433b9d40?w=800',
                'kategori' => 'kegiatan',
                'tanggal_publikasi' => now()->subDays(2),
                'dipublikasikan' => true,
            ],
            [
                'judul' => 'Pengumuman: Jadwal Posyandu Bulan Januari 2026',
                'slug' => 'jadwal-posyandu-januari-2026',
                'ringkasan' => 'Informasi jadwal pelaksanaan Posyandu untuk bulan Januari 2026.',
                'konten' => '<p>Diberitahukan kepada seluruh warga Desa Sono Makmur bahwa kegiatan Posyandu bulan Januari 2026 akan dilaksanakan sesuai jadwal berikut:</p>

<p><strong>Posyandu Balita</strong></p>
<ul>
<li>Tanggal: 15 Januari 2026</li>
<li>Waktu: 08.00 - 12.00 WIB</li>
<li>Tempat: Balai Desa Sono Makmur</li>
</ul>

<p><strong>Posyandu Lansia</strong></p>
<ul>
<li>Tanggal: 22 Januari 2026</li>
<li>Waktu: 08.00 - 11.00 WIB</li>
<li>Tempat: Balai Desa Sono Makmur</li>
</ul>

<p>Dimohon kepada seluruh warga untuk membawa Buku KIA/KMS dan hadir tepat waktu.</p>',
                'gambar_url' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800',
                'kategori' => 'pengumuman',
                'tanggal_publikasi' => now()->subDays(5),
                'dipublikasikan' => true,
            ],
            [
                'judul' => 'Desa Sono Makmur Terima Penghargaan Desa Terbaik',
                'slug' => 'penghargaan-desa-terbaik',
                'ringkasan' => 'Desa Sono Makmur menerima penghargaan sebagai Desa Terbaik tingkat Kabupaten.',
                'konten' => '<p>Desa Sono Makmur berhasil meraih penghargaan sebagai Desa Terbaik tingkat Kabupaten Sejahtera Tahun 2024. Penghargaan ini diserahkan langsung oleh Bupati dalam acara Hari Desa Nasional.</p>

<p>Penghargaan ini diberikan atas keberhasilan desa dalam berbagai aspek, antara lain:</p>
<ul>
<li>Tata kelola pemerintahan yang baik dan transparan</li>
<li>Inovasi pelayanan publik</li>
<li>Pembangunan infrastruktur yang merata</li>
<li>Pemberdayaan ekonomi masyarakat</li>
</ul>

<p>"Penghargaan ini adalah hasil kerja keras seluruh warga desa. Kami akan terus berupaya memberikan yang terbaik untuk kemajuan desa," ujar Kepala Desa H. Ahmad Suryanto.</p>',
                'gambar_url' => 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=800',
                'kategori' => 'berita',
                'tanggal_publikasi' => now()->subDays(10),
                'dipublikasikan' => true,
            ],
        ];

        foreach ($berita as $item) {
            Berita::create($item);
        }

        $this->command->info('✅ Database seeder berhasil dijalankan!');
        $this->command->info('📧 Email admin: admin@desa.id');
        $this->command->info('🔑 Password: password');
    }
}
