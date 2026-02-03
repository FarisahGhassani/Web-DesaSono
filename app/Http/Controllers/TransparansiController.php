<?php

namespace App\Http\Controllers;

use App\Models\DokumenApbdes;
use App\Models\DokumenPerdes;
use Illuminate\Http\Request;

/**
 * Controller untuk halaman Transparansi
 * 
 * Menampilkan daftar dokumen APBDes dan PerDes
 * dengan link ke Google Drive untuk akses dokumen
 */
class TransparansiController extends Controller
{
    /**
     * Menampilkan halaman Transparansi (APBDes & PerDes)
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $linkApbdes = \App\Models\InformasiDesa::ambil('folder_google_drive_apbdes', '#');
        $linkPerdes = \App\Models\InformasiDesa::ambil('folder_google_drive_perdes', '#');

        return view('transparansi.index', [
            'linkApbdes' => $linkApbdes,
            'linkPerdes' => $linkPerdes,
        ]);
    }
}
