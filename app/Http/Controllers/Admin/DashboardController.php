<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\DokumenApbdes;
use App\Models\DokumenPerdes;
use Illuminate\Http\Request;

/**
 * Controller untuk Dashboard Admin
 * 
 * Menampilkan ringkasan statistik dan informasi penting
 * untuk administrator website desa
 */
class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard admin
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Hitung statistik untuk ditampilkan di dashboard
        $statistik = [
            'totalGaleri' => Galeri::count(),
            'galeriDipublikasikan' => Galeri::dipublikasikan()->count(),
            'totalDokumenApbdes' => DokumenApbdes::count(),
            'dokumenApbdesAktif' => DokumenApbdes::aktif()->count(),
            'totalDokumenPerdes' => DokumenPerdes::count(),
            'dokumenPerdesAktif' => DokumenPerdes::aktif()->count(),
        ];

        // Ambil galeri terbaru untuk quick view
        $galeriTerbaru = Galeri::orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('admin.dashboard', [
            'statistik' => $statistik,
            'galeriTerbaru' => $galeriTerbaru,
        ]);
    }
}
