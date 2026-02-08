@extends('layouts.app')

@section('title', 'Beranda')
@section('description', 'Selamat datang di website resmi desa. Temukan informasi profil desa, berita terkini, dan transparansi APBDes.')

@section('content')
    <!-- 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            BAGIAN HERO 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Ini adalah bagian paling atas dari halaman beranda.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Kamu bisa mengubah teks sambutan atau judul di sini.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        -->
    <section class="hero">
        <div class="hero-batik hero-batik-left"></div>
        <div class="hero-batik hero-batik-right"></div>
        <div class="wadah">
            <div class="hero-main-layout">
                <div class="hero-konten animate-slide-up">
                    <span class="hero-label">Website Resmi Desa</span>
                    <h1 class="hero-judul">
                        Selamat Datang di<br>
                        <span class="desa-sono-infografis" data-text="Desa Sono">Desa Sono</span>
                    </h1>
                    <p class="hero-deskripsi">
                        Website ini merupakan media informasi resmi desa sono yang menyajikan berbagai informasi dan
                        transparansi anggaran untuk masyarakat.
                    </p>
                    <div class="hero-tombol">
                        <a href="#tentang-desa" class="tombol tombol-primer tombol-besar">
                            Profil Desa
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M12 5v14M5 12l7 7 7-7" />
                            </svg>
                        </a>
                        <a href="{{ $infoDesa['folder_google_drive_apbdes'] ?? route('transparansi') }}" target="_blank"
                            rel="noopener" class="tombol tombol-outline tombol-besar text-white border-white-50">
                            Lihat APBDes
                        </a>
                    </div>
                </div>

                <div class="hero-map-decor animate-slide-up delay-1">
                    <img src="{{ asset('images/no bg maps.png') }}" class="hero-map-img-blur" alt="Peta Desa Dekorasi">
                </div>
            </div>
        </div>
        <div class="hero-scroll">
            <span>Geser ke bawah</span>
            <div class="scroll-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="M12 5v14M5 12l7 7 7-7" />
                </svg>
            </div>
        </div>
    </section>

    <!--    TENTANG DESA                                                                                                                                                                                                                                                                                                                                                                                                                                                                                -->
    <section class="seksi tentang-desa-seksi" id="tentang-desa">
        <!-- Decorative Map Background -->
        <div class="tentang-map-decor">
            <img src="{{ asset('images/no bg maps.png') }}" alt="" aria-hidden="true">
        </div>
        <div class="wadah">
            <div class="tentang-desa-wrapper">
                <!-- Decorative accent -->
                <div class="tentang-accent-line"></div>

                <!-- Header -->
                <div class="tentang-header">
                    <h2 class="tentang-judul">Tentang Desa Sono</h2>
                    <div class="tentang-subtitle">Kecamatan Mondokan, Kabupaten Sragen</div>
                </div>

                <!-- Content dengan 2 paragraf -->
                <div class="tentang-content">
                    <p class="tentang-paragraph">
                        <span class="tentang-dropcap">D</span>esa Sono merupakan salah satu desa di Kecamatan Mondokan,
                        Kabupaten Sragen. Desa ini terdiri dari beberapa dukuh, yaitu <strong>Sono, Buras, Jetis, Jurang,
                            dan Glugu</strong>, serta mengalami perkembangan wilayah hingga mencakup
                        <strong>Tegalrejo</strong>. Dengan luas wilayah sekitar <em>4,45 km²</em>, Desa Sono menjadi bagian
                        penting dalam kehidupan sosial dan pemerintahan wilayah setempat.
                    </p>

                    <p class="tentang-paragraph">
                        Desa Sono menyimpan nilai sejarah yang kaya melalui keberadaan <strong>rumah joglo</strong> yang
                        dipercaya sebagai peninggalan kepala desa pertama yaitu <em>Kromojiyo</em>, serta
                        <strong>amben</strong> yang telah ada sejak tahun <em>1808</em> dan masih terawat dengan baik hingga
                        kini. Warisan budaya ini menjadi kebanggaan dan identitas masyarakat Desa Sono.
                    </p>
                </div>

                <!-- Statistik Desa -->
                <div class="statistik-desa">
                    <div class="statistik-item">
                        <div class="statistik-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <path
                                    d="M3 21h18M9 8h1M9 12h1M9 16h1M14 8h1M14 12h1M14 16h1M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16" />
                            </svg>
                        </div>
                        <div class="statistik-angka">4,45</div>
                        <div class="statistik-satuan">km²</div>
                        <div class="statistik-label">Luas Wilayah</div>
                    </div>

                    <div class="statistik-item">
                        <div class="statistik-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                        </div>
                        <div class="statistik-angka">21</div>
                        <div class="statistik-satuan">RT</div>
                        <div class="statistik-label">Rukun Tetangga</div>
                    </div>

                    <div class="statistik-item statistik-highlight">
                        <div class="statistik-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 00-3-3.87" />
                                <path d="M16 3.13a4 4 0 010 7.75" />
                            </svg>
                        </div>
                        <div class="statistik-angka">2.912</div>
                        <div class="statistik-satuan">jiwa</div>
                        <div class="statistik-label">Total Penduduk</div>
                        <div class="statistik-tahun">Data 2021</div>
                    </div>

                    <div class="statistik-item statistik-pria">
                        <div class="statistik-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <circle cx="12" cy="7" r="4" />
                                <path d="M5.5 21v-2a6.5 6.5 0 0113 0v2" />
                            </svg>
                        </div>
                        <div class="statistik-angka">1.439</div>
                        <div class="statistik-satuan">jiwa</div>
                        <div class="statistik-label">Laki-laki</div>
                    </div>

                    <div class="statistik-item statistik-wanita">
                        <div class="statistik-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <circle cx="12" cy="7" r="4" />
                                <path d="M5.5 21v-2a6.5 6.5 0 0113 0v2" />
                            </svg>
                        </div>
                        <div class="statistik-angka">1.473</div>
                        <div class="statistik-satuan">jiwa</div>
                        <div class="statistik-label">Perempuan</div>
                    </div>
                </div>
                <div class="tentang-content">
                    <li>*catatan terakhir pada tahun 2021</li>
                </div>
            </div>
        </div>
    </section>

    <!-- 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    VISI & MISI 
                                                                                                                                                                                                                                                                                                                                                                                                        Menampilkan visi utama dan poin-poin misi desa.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                -->
    <section class="seksi seksi-abu" id="visi-misi">
        <div class="wadah">
            <div class="seksi-header">
                <span class="seksi-label">Arah Pembangunan</span>
                <h2 class="seksi-judul">Visi & Misi Desa</h2>
            </div>

            <!-- VISI - Full Width Hero Quote -->
            <div class="visi-container"
                style="text-align: center; margin-bottom: 3rem; padding: 2rem; background: linear-gradient(135deg, var(--warna-primer) 0%, #3d4a3d 100%); border-radius: 1rem; position: relative; overflow: hidden;">
                <div
                    style="position: absolute; top: -20px; left: -20px; font-size: 8rem; opacity: 0.1; color: #fff; font-family: serif;">
                    "</div>
                <div
                    style="position: absolute; bottom: -60px; right: -20px; font-size: 8rem; opacity: 0.1; color: #fff; font-family: serif;">
                    "</div>
                <div
                    style="display: inline-block; background: linear-gradient(135deg, var(--warna-aksen) 0%, #e0c078 100%); color: var(--warna-primer-dark); padding: 0.5rem 1.5rem; border-radius: 2rem; font-size: 1.5rem; font-weight: 700; margin-bottom: 1.5rem; box-shadow: 0 4px 20px rgba(197, 160, 89, 0.4);">
                    VISI
                </div>
                <p
                    style="font-size: 1.25rem; color: #fff; font-style: italic; line-height: 1.6; margin: 0 auto 1rem; max-width: 800px;">
                    DENGAN SEMANGAT MEMBANGUN, MEWUJUDKAN DESA SONO MENCAPAI ADIL MAKMUR SEHAT DAN SEJAHTERA "AMURSETRA"
                </p>
            </div>

            <!-- MISI - Two Column Layout with Icons -->
            <div style="text-align: center; margin-bottom: 1.5rem;">
                <div
                    style="display: inline-block; background: linear-gradient(135deg, var(--warna-aksen) 0%, #e0c078 100%); color: var(--warna-primer-dark); padding: 0.5rem 1.5rem; border-radius: 2rem; font-size: 1.5rem; font-weight: 700; box-shadow: 0 4px 20px rgba(197, 160, 89, 0.4);">
                    MISI
                </div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem;">
                <!-- Misi Kategori 1 -->
                <div
                    style="background: #fff; border-radius: 1rem; padding: 1.5rem; border-left: 4px solid var(--warna-primer);">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                        <div
                            style="width: 40px; height: 40px; background: rgba(76, 90, 76, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="var(--warna-primer)" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 00-3-3.87" />
                                <path d="M16 3.13a4 4 0 010 7.75" />
                            </svg>
                        </div>
                        <h4 style="margin: 0; font-size: 1.25rem; color: var(--warna-primer);">Desa Demokratis & Transparan
                        </h4>
                    </div>
                    <ul
                        style="margin: 0; padding-left: 1.25rem; font-size: 1.25rem; color: var(--warna-abu-600); line-height: 1.8;">
                        <li>Menjadikan BPD sebagai leader dalam pengambilan kebijakan Pemerintah Desa melalui forum
                            Musyawarah Desa</li>
                        <li>Memfasilitasi BPD dalam menjalankan Tupoksinya pada pelaksanaan Musyawarah Desa</li>
                        <li>Memberikan porsi dalam APBDesa untuk kegiatan Musyawarah Desa</li>
                        <li>Membangun Papan Informasi desa di setiap sudut desa yang strategis</li>
                        <li>Memanfaatkan Teknologi dalam membangun transparansi penyelenggaraan Pemerintah Desa</li>
                        <li>Membuat kotak pengaduan</li>
                        <li>Membentuk Tim Pengawas penyelenggaraan Pemerintah Desa sebagai mitra BPD dalam menjalankan
                            pengawasan pembangunan Desa</li>
                    </ul>
                </div>

                <!-- Misi Kategori 2 -->
                <div
                    style="background: #fff; border-radius: 1rem; padding: 1.5rem; border-left: 4px solid var(--warna-primer);">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                        <div
                            style="width: 40px; height: 40px; background: rgba(76, 90, 76, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="var(--warna-primer)" stroke-width="2">
                                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                        </div>
                        <h4 style="margin: 0; font-size: 1.25rem; color: var(--warna-primer);">Desa Sejahtera & Religius
                        </h4>
                    </div>
                    <ul
                        style="margin: 0; padding-left: 1.25rem; font-size: 1.25rem; color: var(--warna-abu-600); line-height: 1.8;">
                        <li>Membangun Pasar Desa di tanah kas desa sebagai wadah perdagangan masyarakat</li>
                        <li>Membentuk BUMDesa sebagai wadah pengelola Unit Usaha milik Desa</li>
                        <li>Memberikan penyertaan Modal bagi BUMDesa</li>
                        <li>Membangun Masjid raya desa sebagai sentra kegiatan agama Islam</li>
                        <li>Membangun Gereja desa sebagai sentra kegiatan agama Nasrani</li>
                        <li>Membentuk lembaga komunikasi antar tokoh agama sebagai jembatan ketahanan toleransi beragama
                        </li>
                        <li>Memberikan perhatian bagi pelaksanaan pendidikan agama</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    STRUKTUR ORGANISASI 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                Menampilkan daftar perangkat desa dengan foto mereka.
                                                                                                                                                                                                                                                                                                                                                                                                                                                            -->
    <section class="seksi seksi-struktur" id="struktur">
        <div class="wadah">
            <div class="seksi-header">
                <span class="seksi-label">Pemerintahan Desa</span>
                <h2 class="seksi-judul">Struktur Organisasi</h2>
                <p class="seksi-deskripsi">
                    Susunan Organisasi dan Tata Kerja Pemerintah Desa Sono
                </p>
            </div>

            <!-- Bagan Organisasi Hierarki -->
            <div class="org-chart">

                <!-- Level 0: BPD dan Kepala Desa (Sejajar) -->
                <div class="org-level org-level-top">
                    <!-- BPD di kiri dengan connector horizontal -->
                    <div class="org-bpd-wrapper">
                        <div class="org-card">
                            <div class="org-card-image org-card-placeholder">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 00-3-3.87" />
                                    <path d="M16 3.13a4 4 0 010 7.75" />
                                </svg>
                            </div>
                            <div class="org-card-info">
                                <span class="org-jabatan">BPD</span>
                                <h4 class="org-nama">WARLAN</h4>
                            </div>
                        </div>
                        <!-- Horizontal connector to center -->
                        <div class="org-connector-horizontal"></div>
                    </div>

                    <!-- Kepala Desa di kanan -->
                    <div class="org-card org-card-kades">
                        <div class="org-card-image">
                            <img src="{{ asset('images/Pak Parjiyo KADES.jpeg') }}" alt="Parjiyo">
                        </div>
                        <div class="org-card-info">
                            <span class="org-jabatan">Kepala Desa</span>
                            <h4 class="org-nama">PARJIYO</h4>
                        </div>
                    </div>
                </div>


                <!-- Level 2: Sekretaris Desa -->
                <div class="org-level org-level-2">
                    <div class="org-card">
                        <div class="org-card-image">
                            <img src="{{ asset('images/Pak Sutardi SEKDES.jpeg') }}" alt="Sutardi">
                        </div>
                        <div class="org-card-info">
                            <span class="org-jabatan">Sekretaris Desa</span>
                            <h4 class="org-nama">SUTARDI</h4>
                        </div>
                    </div>
                </div>



                <!-- Level 3: Kepala Urusan (3 orang) -->
                <div class="org-level org-level-3">
                    <div class="org-card">
                        <div class="org-card-image">
                            <img src="{{ asset('images/Pak Sugiri.jpeg') }}" alt="Sugiri">
                        </div>
                        <div class="org-card-info">
                            <span class="org-jabatan">Kepala Urusan TU & Umum</span>
                            <h4 class="org-nama">SUGIRI</h4>
                        </div>
                    </div>
                    <div class="org-card">
                        <div class="org-card-image">
                            <img src="{{ asset('images/Pak Ma\'ruf.jpeg') }}" alt="Mahruf">
                        </div>
                        <div class="org-card-info">
                            <span class="org-jabatan">Kepala Urusan Keuangan</span>
                            <h4 class="org-nama">MAHRUF</h4>
                        </div>
                    </div>
                    <div class="org-card">
                        <div class="org-card-image">
                            <img src="{{ asset('images/Bu Dhevy.jpeg') }}" alt="Dhevy">
                        </div>
                        <div class="org-card-info">
                            <span class="org-jabatan">Kepala Urusan Perencanaan</span>
                            <h4 class="org-nama">DHEVY PERWITASARI</h4>
                        </div>
                    </div>
                </div>


                <!-- Level 4: Kepala Seksi (3 orang) -->
                <div class="org-level org-level-4">
                    <div class="org-card org-card-empty">
                        <div class="org-card-image org-card-placeholder">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                        </div>
                        <div class="org-card-info">
                            <span class="org-jabatan">Kepala Seksi Pemerintahan</span>
                            <h4 class="org-nama">KOSONG</h4>
                        </div>
                    </div>
                    <div class="org-card">
                        <div class="org-card-image">
                            <img src="{{ asset('images/Pak Sumanto.jpeg') }}" alt="Sumanto">
                        </div>
                        <div class="org-card-info">
                            <span class="org-jabatan">Kepala Seksi Kesejahteraan</span>
                            <h4 class="org-nama">SUMANTO</h4>
                        </div>
                    </div>
                    <div class="org-card">
                        <div class="org-card-image">
                            <img src="{{ asset('images/Bu Diana.jpeg') }}" alt="Diana">
                        </div>
                        <div class="org-card-info">
                            <span class="org-jabatan">Kepala Seksi Pelayanan</span>
                            <h4 class="org-nama">DIANA LESTARI</h4>
                        </div>
                    </div>
                </div>


                <!-- Level 5: Kebayan Dukuh (3 orang) -->
                <div class="org-level org-level-5">
                    <div class="org-card">
                        <div class="org-card-image">
                            <img src="{{ asset('images/Pak Supriyono .jpeg') }}" alt="Supriyono">
                        </div>
                        <div class="org-card-info">
                            <span class="org-jabatan">Kebayan Dukuh Buras</span>
                            <h4 class="org-nama">SUPRIYONO</h4>
                        </div>
                    </div>
                    <div class="org-card">
                        <div class="org-card-image">
                            <img src="{{ asset('images/Pak Ponco.jpeg') }}" alt="Ponco">
                        </div>
                        <div class="org-card-info">
                            <span class="org-jabatan">Kebayan Dukuh Glugu</span>
                            <h4 class="org-nama">PONCO SUSILO</h4>
                        </div>
                    </div>
                    <div class="org-card">
                        <div class="org-card-image">
                            <img src="{{ asset('images/Pak Mukhlis.jpeg') }}" alt="Mukhlis">
                        </div>
                        <div class="org-card-info">
                            <span class="org-jabatan">Kebayan Dukuh Sono</span>
                            <h4 class="org-nama">M MUKHLIS A</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--                                                                                                                                                                         BAGIAN LAYANAN/FITUR 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                       Menampilkan 4 keunggulan atau layanan utama desa.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            -->
    <section class="seksi seksi-gradient">
        <div class="wadah">
            <div class="seksi-header">
                <span class="seksi-label">Layanan Kami</span>
                <h2 class="seksi-judul">Informasi Desa yang Transparan</h2>
                <p class="seksi-deskripsi">
                    Kami berkomitmen untuk menyediakan informasi yang jelas, akurat, dan mudah diakses bagi seluruh
                    masyarakat.
                </p>
            </div>

            <div class="fitur-grid">
                <!-- Profil Desa -->
                <div class="fitur-item animate-slide-up delay-1">
                    <div class="fitur-ikon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>
                    </div>
                    <h3 class="fitur-judul">Profil Desa</h3>
                    <p class="fitur-teks">Informasi tentang desa sono, visi misi, dan struktur pemerintahan desa.</p>
                </div>

                <!-- Transparansi -->
                <div class="fitur-item animate-slide-up delay-2">
                    <div class="fitur-ikon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                        </svg>
                    </div>
                    <h3 class="fitur-judul">Transparansi APBDes</h3>
                    <p class="fitur-teks">Akses dokumen anggaran desa secara terbuka untuk publik.</p>
                </div>

                <!-- Peta Desa -->
                <div class="fitur-item animate-slide-up delay-3">
                    <div class="fitur-ikon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                    </div>
                    <h3 class="fitur-judul">Peta Desa</h3>
                    <p class="fitur-teks">Lokasi dan wilayah administratif desa dalam peta interaktif.</p>
                </div>

                <!-- Galeri Desa -->
                <div class="fitur-item animate-slide-up delay-4">
                    <div class="fitur-ikon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                            <circle cx="12" cy="13" r="4" />
                        </svg>
                    </div>
                    <h3 class="fitur-judul">Galeri Desa</h3>
                    <p class="fitur-teks">Dokumentasi berbagai kegiatan dan keunikan yang ada di desa kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    PATIENT GALLERY SECTION 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    Only appears if documentation is published.
                                                                                                                                                                                                                                                                                                                                                                                                                                                -->


    <section class="seksi" id="berita-kegiatan">
        <div class="wadah">
            <div class="seksi-header">
                <span class="seksi-label">WARTA DESA</span>
                <h2 class="seksi-judul">Dokumentasi & Reportase Resmi Desa</h2>
                <p class="seksi-deskripsi">
                    Portal informasi resmi seputar program, kegiatan kemasyarakatan, dan warta harian Desa Sono.
                </p>
            </div>

            <div class="galeri-slider">
                <div class="galeri-slides">
                    @foreach ($wartaManual as $index => $item)
                        <div class="galeri-slide {{ $index === 0 ? 'active' : '' }}" data-title="{{ $item['title'] }}"
                            data-narasi="{{ Str::limit(explode("\n\n", $item['narasi'])[0], 150) }}"
                            data-url="{{ route('warta.show', $item['slug']) }}">
                            <img src="{{ asset('images/Kegiatan Desa/' . $item['image']) }}" alt="{{ $item['title'] }}">


                            <div class="galeri-caption">
                                <!-- Category Metadata -->
                                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                                    <span
                                        style="background: var(--warna-primer, #0B1A0B); color: white; padding: 0.2rem 0.6rem; border-radius: 0.3rem; font-size: 0.75rem; font-weight: 700;">
                                        {{ $item['category'] }}
                                    </span>
                                </div>
                                <h3 style="font-size: 1.4rem; margin-bottom: 0.4rem;">{{ $item['title'] }}</h3>
                                <p style="font-size: 0.95rem; line-height: 1.4; opacity: 0.9;">{{ $item['desc'] }}</p>
                            </div>

                            <!-- Detail button at bottom-right of photo -->
                            <button class="galeri-detail-btn"
                                style="position: absolute; right: 1rem; bottom: 1.5rem; display: flex; align-items: center; gap: 0.35rem; padding: 0.5rem 1rem; background: #ffffff; backdrop-filter: blur(4px); color: var(--warna-primer, #0B1A0B); border: none; border-radius: 2rem; font-size: 0.85rem; font-weight: 600; cursor: pointer; z-index: 10; box-shadow: 0 2px 10px rgba(0,0,0,0.2);">
                                <span>Detail</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                        </div>
                    @endforeach
                </div>

                <button class="galeri-nav prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <button class="galeri-nav next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>

            <!-- Narasi Dropdown Card - 1 Layer Hijau Primer -->
            <div class="narasi-dropdown" id="narasiDropdown"
                style="max-height: 0; overflow: hidden; opacity: 0; transition: all 0.4s ease; margin-top: 0;">
                <!-- Card 1 layer hijau primer 50% opacity  -->
                <div
                    style="background: rgba(11, 26, 11, 0.5); border-radius: 0rem; padding: 1.5rem; box-shadow: 0 4px 20px rgba(0,0,0,0.15); max-width: 950px; margin: 0 auto;">
                    <!-- Header: Judul & Tombol X -->
                    <div
                        style="display: flex; justify-content: space-between; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                        <h4 id="narasiDropdownTitle"
                            style="margin: 0; font-size: 1.25rem; font-weight: 700; color: #ffffff; line-height: 1.3; flex: 1;">
                        </h4>
                        <button id="narasiDropdownClose"
                            style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; padding: 0; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3); border-radius: 50%; color: #ffffff; cursor: pointer;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <!-- Teks Narasi -->
                    <p id="narasiDropdownText"
                        style="margin: 0; font-size: 1rem; line-height: 1.85; color: white; white-space: pre-line;">
                    </p>
                    <!-- Link to standalone page for SEO -->
                    <div style="margin-top: 1.5rem; text-align: right;">
                        <a id="narasiDropdownLink" href="#" class="tombol tombol-aksen"
                            style="font-size: 0.85rem; padding: 0.6rem 1.25rem;">
                            Baca Berita Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                style="margin-left: 0.35rem;">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                <polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 
                                                                                                                                                                                                                                    VIDEO PROFIL 
                                                                                                                                                                                                                                    Video profil desa dari YouTube.
                                                                                                                                                                                                                                -->
    <section class="seksi" id="video-profil">
        <div class="wadah">
            <div class="seksi-header text-center mx-auto max-w-800">
                <span class="seksi-label">Kenali Lebih Dekat</span>
                <h2 class="seksi-judul">Video Profil Desa</h2>
            </div>

            <div class="video-container-wrapper">
                <div class="video-container"
                    style="background: linear-gradient(135deg, var(--warna-primer) 0%, #3d4a3d 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 400px;">
                    {{-- Video akan diupdate di sini ketika sudah tersedia --}}
                    {{-- Contoh: <iframe src="https://www.youtube.com/embed/VIDEO_ID" ...></iframe> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none"
                        stroke="rgba(255,255,255,0.5)" stroke-width="1.5">
                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                    </svg>
                    <p style="color: rgba(255,255,255,0.8); font-size: 1.25rem; margin-top: 1.5rem; font-weight: 600;">Video
                        Profil Segera Hadir</p>
                    <p style="color: rgba(255,255,255,0.5); font-size: 1rem; margin-top: 0.5rem;">Video sedang dalam proses
                        produksi</p>
                </div>
            </div>
        </div>
    </section>

    <!--                                                                                                                                                                                                                                                          RINGKASAN TRANSPARANSI 

                                                                                                                                                                                                                                    // Buatkan section untuk embed video profile dari youtube                                                                                                                                                                                                                                                                Menghubungkan ke halaman transparansi atau folder Google Drive.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                             -->
    <section class="seksi seksi-abu">
        <div class="wadah">
            <div class="seksi-header text-center mx-auto max-w-800">
                <span class="seksi-label">Transparansi Keuangan</span>
                <h2 class="seksi-judul">Transparansi & Akuntabilitas Desa</h2>
                <p class="seksi-deskripsi">
                    Kami berkomitmen untuk mewujudkan tata kelola pemerintahan desa yang terbuka. Seluruh dokumen anggaran,
                    laporan realisasi, dan peraturan desa dapat diakses secara publik.
                </p>
                <div class="mt-8 flex justify-center">
                    <a href="{{ route('transparansi') }}" class="tombol tombol-primer tombol-besar">
                        Lihat Dokumen Transparansi
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 BAGIAN KONTAK / CTA 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 Mengajak pengunjung untuk menghubungi desa.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                             -->
    <section class="seksi bg-cta text-white" id="faq">
        <div class="wadah" style="position: relative; z-index: 2;">
            <div class="max-w-800 mx-auto glass-card">
                <div class="text-center mb-10">
                    <h2 class="seksi-judul text-white">Pertanyaan Umum</h2>
                    <p class="teks-cta">
                        Informasi seputar Desa Sono yang sering ditanyakan.
                    </p>
                </div>

                <div class="faq-accordion">
                    <!-- FAQ 1 -->
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>Apakah website ini sudah selesai?</span>
                            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-content">
                                Website ini akan dikembangkan lagi dan masih dalam tahap pengembangan.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>Apa tujuan dibuatnya website ini?</span>
                            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-content">
                                Tujuan dibuatnya website ini adalah sebagai media informasi resmi Desa Sono yang dapat
                                diakses oleh masyarakat luas.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>Bagaimana cara mengurus persuratan?</span>
                            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-content">
                                Silahkan datang langsung ke kantor Balai Desa Sono pada jam kerja (Senin - Jumat, 08.00 -
                                15.00) dengan membawa KTP dan KK asli serta fotokopi.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>Bagaimana cara menghubungi Perangkat Desa?</span>
                            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-content">
                                Anda dapat menghubungi perangkat desa melalui nomor WhatsApp yang tersedia di website ini
                                atau datang langsung ke kantor desa.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>Apakah masyarakat dapat mengirim saran atau masukan lewat website?</span>
                            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-content">
                                Untuk saat ini, masukan hanya dapat disampaikan melalui kontak desa yang tersedia karena
                                website masih dalam tahap pengembangan.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-center flex-col items-center">
                    <p class="teks-cta mb-4">Masih punya pertanyaan lain?</p>
                    <a href="https://wa.me/6281330949672" target="_blank" rel="noopener"
                        class="tombol tombol-primer tombol-besar"
                        style="background: #25D366; color: white; border-color: #25D366; display: inline-flex; align-items: center; gap: 0.5rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        Hubungi via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // --- GALERI SLIDER ---
            const slides = document.querySelectorAll('.galeri-slide');
            const prevBtn = document.querySelector('.galeri-nav.prev');
            const nextBtn = document.querySelector('.galeri-nav.next');
            let currentSlide = 0;
            let slideInterval;
            const totalSlides = slides.length;
            let isSliderPaused = false;

            function updateSlides() {
                if (totalSlides === 0) return;
                slides.forEach(slide => {
                    slide.classList.remove('active', 'prev', 'next');
                });

                // Active
                slides[currentSlide].classList.add('active');

                // Prev
                const prevIndex = (currentSlide - 1 + totalSlides) % totalSlides;
                slides[prevIndex].classList.add('prev');

                // Next
                const nextIndex = (currentSlide + 1) % totalSlides;
                slides[nextIndex].classList.add('next');
            }

            function nextSlide() {
                if (isSliderPaused) return;
                currentSlide = (currentSlide + 1) % totalSlides;
                updateSlides();
            }

            function prevSlide() {
                if (isSliderPaused) return;
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateSlides();
            }

            function resetInterval() {
                clearInterval(slideInterval);
                if (totalSlides > 1 && !isSliderPaused) {
                    slideInterval = setInterval(nextSlide, 5000);
                }
            }

            function pauseSlider() {
                isSliderPaused = true;
                clearInterval(slideInterval);
            }

            function resumeSlider() {
                isSliderPaused = false;
                resetInterval();
            }

            if (prevBtn && nextBtn && totalSlides > 0) {
                prevBtn.addEventListener('click', () => {
                    closeDropdown(); // Auto close popup saat ganti slide
                    prevSlide();
                    resetInterval();
                });
                nextBtn.addEventListener('click', () => {
                    closeDropdown(); // Auto close popup saat ganti slide
                    nextSlide();
                    resetInterval();
                });

                // Initial State
                updateSlides();
                resetInterval();
            }

            // --- FAQ ACCORDION ---
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                if (question) {
                    question.addEventListener('click', () => {
                        const isActive = item.classList.contains('active');

                        // Close all other items
                        faqItems.forEach(otherItem => {
                            if (otherItem !== item) {
                                otherItem.classList.remove('active');
                                const answer = otherItem.querySelector('.faq-answer');
                                if (answer) answer.style.maxHeight = null;
                            }
                        });

                        // Toggle current item
                        if (!isActive) {
                            item.classList.add('active');
                            const answer = item.querySelector('.faq-answer');
                            if (answer) answer.style.maxHeight = answer.scrollHeight + "px";
                        } else {
                            item.classList.remove('active');
                            const answer = item.querySelector('.faq-answer');
                            if (answer) answer.style.maxHeight = null;
                        }
                    });
                }
            });

            // --- NARASI DROPDOWN (ACCORDION STYLE) ---
            const narasiDropdown = document.getElementById('narasiDropdown');
            const narasiDropdownClose = document.getElementById('narasiDropdownClose');
            const narasiDropdownTitle = document.getElementById('narasiDropdownTitle');
            const narasiDropdownText = document.getElementById('narasiDropdownText');
            const narasiDropdownLink = document.getElementById('narasiDropdownLink');

            let isDropdownOpen = false;

            function openDropdown(title, narasi, url) {
                if (!narasiDropdown) return;

                if (narasiDropdownTitle) narasiDropdownTitle.textContent = title;
                if (narasiDropdownText) narasiDropdownText.textContent = narasi;
                if (narasiDropdownLink) narasiDropdownLink.href = url;

                // Pause slider when dropdown is open
                pauseSlider();

                // Apply open styles
                narasiDropdown.style.maxHeight = '600px';
                narasiDropdown.style.opacity = '1';
                narasiDropdown.style.marginTop = '1.5rem';
                isDropdownOpen = true;

                // Scroll to show dropdown
                setTimeout(() => {
                    narasiDropdown.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 150);
            }

            function closeDropdown() {
                if (!narasiDropdown) return;

                // Apply close styles
                narasiDropdown.style.maxHeight = '0';
                narasiDropdown.style.opacity = '0';
                narasiDropdown.style.marginTop = '0';
                isDropdownOpen = false;

                // Resume slider when dropdown is closed
                resumeSlider();
            }

            // Toggle dropdown on Detail button click
            document.addEventListener('click', function (e) {
                const detailBtn = e.target.closest('.galeri-detail-btn');
                if (detailBtn) {
                    e.preventDefault();
                    e.stopPropagation();

                    // Get data from parent slide
                    const slide = detailBtn.closest('.galeri-slide');
                    if (slide) {
                        const title = slide.getAttribute('data-title') || '';
                        const narasi = slide.getAttribute('data-narasi') || '';
                        const url = slide.getAttribute('data-url') || '#';

                        if (isDropdownOpen) {
                            // Just update content without closing/opening
                            if (narasiDropdownTitle) narasiDropdownTitle.textContent = title;
                            if (narasiDropdownText) narasiDropdownText.textContent = narasi;
                            if (narasiDropdownLink) narasiDropdownLink.href = url;
                        } else {
                            openDropdown(title, narasi, url);
                        }
                    }
                }
            });

            // Close button
            if (narasiDropdownClose) {
                narasiDropdownClose.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    closeDropdown();
                });
            }
        });
    </script>
@endpush