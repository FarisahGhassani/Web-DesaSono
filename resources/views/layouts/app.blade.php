<!-- 
       HALAMAN INI BERISI HEADER NAVBAR
    -->

<!DOCTYPE html>
<html lang="id" data-tema="terang">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- 
        JUDUL & META TAGS 
    -->
    <title>@yield('title', 'Website Resmi Desa') - {{ $infoDesa['nama_desa'] ?? 'Desa Kami' }}</title>
    <meta name="description"
        content="@yield('description', 'Website resmi desa yang menyediakan informasi profil desa, galeri kegiatan, dan transparansi APBDes.')">
    <meta name="keywords" content="desa, pemerintahan desa, APBDes, transparansi, perdes, peraturan desa">
    <meta name="author" content="{{ $infoDesa['nama_desa'] ?? 'Desa Kami' }}">

    <!-- Preview saat link dibagikan di WhatsApp/Media Sosial -->
    <meta property="og:title" content="@yield('title', 'Website Resmi Desa')">
    <meta property="og:description"
        content="@yield('description', 'Website resmi desa yang menyediakan informasi profil desa, galeri kegiatan, dan transparansi APBDes.')">
    <meta property="og:type" content="website">

    <!-- Ikon kecil di tab browser -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- 
        FILE CSS UTAMA 
        File ini mengatur tampilan seluruh website.
        Lihat public/css/app.css untuk melihat daftar file yang di-import.
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('styles')
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="navbar-inner">
            <!-- Brand / Logo -->
            <a href="{{ route('beranda') }}" class="navbar-brand">
                <div class="brand-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        <path d="M9 22V12h6v10" />
                        <circle cx="12" cy="7" r="1.5" fill="currentColor" />
                    </svg>
                </div>
                <div class="brand-text">
                    <span class="brand-name">Desa Sono</span>
                    <span class="brand-tagline">Kab. Sragen</span>
                </div>
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggle" id="navbarToggle" aria-label="Toggle menu">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Menu -->
            <div class="navbar-menu" id="navbarMenu">
                <a href="{{ route('beranda') }}"
                    class="navbar-link {{ request()->routeIs('beranda') ? 'active' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('peta') }}" class="navbar-link {{ request()->routeIs('peta') ? 'active' : '' }}">
                    Peta Desa
                </a>
                <a href="{{ route('galeri.index') }}"
                    class="navbar-link {{ request()->routeIs('galeri.*') ? 'active' : '' }}">
                    Galeri Desa
                </a>
                <a href="{{ route('transparansi') }}"
                    class="navbar-link {{ request()->routeIs('transparansi') ? 'active' : '' }}">
                    Transparansi
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="wadah">
            <div class="footer-grid">
                <!-- Brand Column -->
                <div class="footer-brand">
                    <h2>{{ $infoDesa['nama_desa'] ?? 'Desa Kami' }}</h2>
                    <p>
                        {{ $infoDesa['alamat_lengkap'] ?? 'Alamat Kantor Desa' }}<br>
                        Kecamatan {{ $infoDesa['kecamatan'] ?? '-' }}<br>
                        Kabupaten {{ $infoDesa['kabupaten'] ?? '-' }}<br>
                        Provinsi {{ $infoDesa['provinsi'] ?? '-' }}
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="footer-heading">Menu Utama</h4>
                    <div class="footer-links">
                        <a href="{{ route('beranda') }}">Beranda</a>
                        <a href="{{ route('peta') }}">Peta Desa</a>
                        <a href="{{ route('galeri.index') }}">Galeri Desa</a>
                        <a href="{{ route('transparansi') }}">Transparansi</a>
                    </div>
                </div>

                <!-- Transparansi -->
                <div>
                    <h4 class="footer-heading">Transparansi</h4>
                    <div class="footer-links">
                        <a href="{{ route('transparansi') }}">Dokumen APBDes & PerDes</a>
                    </div>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="footer-heading">Kontak Kami</h4>
                    <div class="footer-contact-info">
                        <!-- Alamat -->
                        <div class="footer-contact-item">
                            <div class="footer-contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                            </div>
                            <span>{{ $infoDesa['alamat_lengkap'] ?? 'Alamat kantor desa' }}</span>
                        </div>
                        <!-- Telepon -->
                        @if(isset($infoDesa['telepon']))
                        <div class="footer-contact-item">
                            <div class="footer-contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
                                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
                                </svg>
                            </div>
                            <a href="tel:{{ $infoDesa['telepon'] }}">{{ $infoDesa['telepon'] }}</a>
                        </div>
                        @endif
                        <!-- Email -->
                        @if(isset($infoDesa['email']))
                        <div class="footer-contact-item">
                            <div class="footer-contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                    <polyline points="22,6 12,13 2,6" />
                                </svg>
                            </div>
                            <a href="mailto:{{ $infoDesa['email'] }}">{{ $infoDesa['email'] }}</a>
                        </div>
                        @endif
                    </div>
                    
                    <!-- Social Media -->
                    <h4 class="footer-heading" style="margin-top: 1.5rem;">Ikuti Kami</h4>
                    <div class="footer-social">
                        <!-- Instagram -->
                        <a href="{{ $infoDesa['instagram'] ?? '#' }}" target="_blank" rel="noopener" class="footer-social-link footer-social-instagram" title="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" />
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                            </svg>
                        </a>
                        <!-- YouTube -->
                        <a href="{{ $infoDesa['youtube'] ?? '#' }}" target="_blank" rel="noopener" class="footer-social-link footer-social-youtube" title="YouTube">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22">
                                <path d="M22.54 6.42a2.78 2.78 0 00-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 00-1.94 2A29 29 0 001 11.75a29 29 0 00.46 5.33A2.78 2.78 0 003.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 001.94-2 29 29 0 00.46-5.25 29 29 0 00-.46-5.33z" />
                                <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} {{ $infoDesa['nama_desa'] ?? 'Desa Kami' }}. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        document.getElementById('navbarToggle').addEventListener('click', function () {
            document.getElementById('navbarMenu').classList.toggle('open');
        });

        // Dark mode toggle (jika diperlukan)
        function toggleTema() {
            const html = document.documentElement;
            const currentTema = html.getAttribute('data-tema');
            const newTema = currentTema === 'terang' ? 'gelap' : 'terang';
            html.setAttribute('data-tema', newTema);
            localStorage.setItem('tema', newTema);
        }

        // Load saved theme
        const savedTema = localStorage.getItem('tema');
        if (savedTema) {
            document.documentElement.setAttribute('data-tema', savedTema);
        }
    </script>

    @stack('scripts')
</body>

</html>