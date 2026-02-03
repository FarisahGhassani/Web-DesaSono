<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Admin Desa</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>

<body>
    <div class="admin-layout">
        <!-- Sidebar -->
        <aside class="admin-sidebar" id="adminSidebar">
            <div class="admin-sidebar-brand">
                <h3>🏡 Admin Desa</h3>
                <span>Panel Administrasi</span>
            </div>

            <nav class="admin-menu">
                <div class="admin-menu-label">Menu Utama</div>

                <a href="{{ route('admin.dashboard') }}"
                    class="admin-menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <rect x="3" y="3" width="7" height="7" />
                        <rect x="14" y="3" width="7" height="7" />
                        <rect x="14" y="14" width="7" height="7" />
                        <rect x="3" y="14" width="7" height="7" />
                    </svg>
                    Dashboard
                </a>

                <div class="admin-menu-label" style="margin-top: 1rem;">Konten</div>

                <a href="{{ route('admin.galeri.index') }}"
                    class="admin-menu-item {{ request()->routeIs('admin.galeri.*') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    Galeri Desa
                </a>

                <div class="admin-menu-label" style="margin-top: 1rem;">Transparansi</div>

                <a href="{{ route('admin.apbdes.index') }}"
                    class="admin-menu-item {{ request()->routeIs('admin.apbdes.*') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                        <line x1="16" y1="13" x2="8" y2="13" />
                        <line x1="16" y1="17" x2="8" y2="17" />
                    </svg>
                    Dokumen APBDes
                </a>

                <a href="{{ route('admin.perdes.index') }}"
                    class="admin-menu-item {{ request()->routeIs('admin.perdes.*') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                    </svg>
                    Peraturan Desa
                </a>

                <div class="admin-menu-label" style="margin-top: 1rem;">Pengaturan</div>

                <a href="{{ route('admin.pengaturan.informasi-desa') }}"
                    class="admin-menu-item {{ request()->routeIs('admin.pengaturan.informasi-desa') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    Informasi Desa
                </a>

                <a href="{{ route('admin.pengaturan.perangkat-desa') }}"
                    class="admin-menu-item {{ request()->routeIs('admin.pengaturan.perangkat-desa') || request()->routeIs('admin.pengaturan.*-perangkat-desa') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 00-3-3.87" />
                        <path d="M16 3.13a4 4 0 010 7.75" />
                    </svg>
                    Perangkat Desa
                </a>

                <div style="margin-top: 2rem; padding: 0 0.75rem;">
                    <a href="{{ route('beranda') }}" class="admin-menu-item" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6" />
                            <polyline points="15 3 21 3 21 9" />
                            <line x1="10" y1="14" x2="21" y2="3" />
                        </svg>
                        Lihat Website
                    </a>

                    <form action="{{ route('admin.logout') }}" method="POST" style="margin-top: 0.5rem;">
                        @csrf
                        <button type="submit" class="admin-menu-item"
                            style="width: 100%; border: none; background: transparent; cursor: pointer; text-align: left;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4" />
                                <polyline points="16 17 21 12 16 7" />
                                <line x1="21" y1="12" x2="9" y2="12" />
                            </svg>
                            Keluar
                        </button>
                    </form>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="admin-konten">
            <!-- Mobile Toggle -->
            <button class="tombol tombol-sekunder tombol-kecil" id="sidebarToggle"
                style="display: none; margin-bottom: 1rem;">
                ☰ Menu
            </button>

            <!-- Flash Messages -->
            @if(session('sukses'))
                <div class="alert alert-sukses">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
                        <polyline points="22 4 12 14.01 9 11.01" />
                    </svg>
                    {{ session('sukses') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-bahaya">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="15" y1="9" x2="9" y2="15" />
                        <line x1="9" y1="9" x2="15" y2="15" />
                    </svg>
                    <div>
                        <strong>Terjadi kesalahan:</strong>
                        <ul style="margin: 0.5rem 0 0;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <script>
        // Mobile sidebar toggle
        const toggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('adminSidebar');

        if (window.innerWidth <= 1024) {
            toggle.style.display = 'block';
        }

        toggle.addEventListener('click', function () {
            sidebar.classList.toggle('open');
        });

        window.addEventListener('resize', function () {
            if (window.innerWidth <= 1024) {
                toggle.style.display = 'block';
            } else {
                toggle.style.display = 'none';
                sidebar.classList.remove('open');
            }
        });
    </script>

    @stack('scripts')
</body>

</html>