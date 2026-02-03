<?php

namespace App\Http\Controllers;

use App\Models\InformasiDesa;
use Illuminate\Http\Request;

/**
 * Controller untuk halaman Peta Desa
 * 
 * Menampilkan lokasi desa dengan integrasi Google Maps
 * dan informasi wilayah administratif
 */
class PetaController extends Controller
{
    /**
     * Menampilkan halaman peta desa
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil informasi desa untuk koordinat dan alamat
        $infoDesa = InformasiDesa::semuaSebagaiArray();

        // Koordinat default jika tidak ada di database
        $latitude = $infoDesa['latitude'] ?? '-7.5574';
        $longitude = $infoDesa['longitude'] ?? '110.8249';

        return view('peta', [
            'latitude' => $latitude,
            'longitude' => $longitude,
        ]);
    }
}
