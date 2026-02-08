<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiDesa;

class WartaController extends Controller
{
    /**
     * Menampilkan detail berita/warta berdasarkan slug
     */
    public function show($slug)
    {
        $wartaList = config('warta');

        // Cari warta yang cocok dengan slug
        $warta = null;
        foreach ($wartaList as $item) {
            if ($item['slug'] === $slug) {
                $warta = $item;
                break;
            }
        }

        // Jika tidak ketemu, lempar 404
        if (!$warta) {
            abort(404);
        }

        $infoDesa = InformasiDesa::semuaSebagaiArray();

        return view('warta.show', [
            'warta' => $warta,
            'infoDesa' => $infoDesa
        ]);
    }
}
