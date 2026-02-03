<?php

namespace App\Http\Controllers;

use App\Models\InformasiDesa;
use App\Models\PerangkatDesa;
use Illuminate\Http\Request;

/**
 * Controller untuk halaman Profil Desa
 * 
 * Menampilkan profil desa, sejarah, visi misi,
 * dan struktur organisasi pemerintahan desa
 */
class ProfilDesaController extends Controller
{
    /**
     * Menampilkan halaman profil desa
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil semua informasi desa
        $infoDesa = InformasiDesa::semuaSebagaiArray();

        // Ambil data perangkat desa yang aktif, diurutkan sesuai urutan
        $perangkatDesa = PerangkatDesa::aktif()
            ->berurutan()
            ->get();

        return view('profil-desa', [
            'perangkatDesa' => $perangkatDesa,
        ]);
    }
}
