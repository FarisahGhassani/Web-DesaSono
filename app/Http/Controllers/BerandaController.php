<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\InformasiDesa;
use App\Models\DokumenApbdes;
use App\Models\PerangkatDesa;
use Illuminate\Http\Request;

/**
 * Controller untuk halaman Beranda
 * 
 * Menampilkan halaman utama website desa dengan ringkasan informasi,
 * dokumentasi terbaru, dan highlight penting
 */
class BerandaController extends Controller
{
    /**
     * Menampilkan halaman beranda
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil galeri terbaru yang sudah dipublikasikan (maksimal 3)
        $galeriTerbaru = Galeri::dipublikasikan()
            ->orderBy('tanggal_publikasi', 'desc')
            ->limit(3)
            ->get();

        // Ambil informasi desa untuk ditampilkan
        $infoDesa = InformasiDesa::semuaSebagaiArray();

        // Ambil data perangkat desa yang aktif, diurutkan sesuai urutan
        $perangkatDesa = PerangkatDesa::aktif()
            ->berurutan()
            ->get();

        return view('beranda', [
            'galeriTerbaru' => $galeriTerbaru,
            'perangkatDesa' => $perangkatDesa,
            'wartaManual' => config('warta'),
        ]);
    }
}
