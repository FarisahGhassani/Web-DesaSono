<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Controller untuk halaman Galeri Desa
 * 
 * Menampilkan galeri foto dari Google Photos atau Google Drive
 * tanpa perlu database
 */
class GaleriController extends Controller
{
    /**
     * Menampilkan halaman galeri desa
     * 
     * Data galeri diambil dari config/galeri-desa.php
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // View sudah self-contained dengan Google Photos embed
        // Tidak perlu kirim data apapun
        return view('galeri.index');
    }
}
