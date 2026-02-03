<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DokumenPerdes;
use Illuminate\Http\Request;

/**
 * Controller Admin untuk Dokumen PerDes (Peraturan Desa)
 * 
 * Mengelola CRUD (Create, Read, Update, Delete) dokumen PerDes
 * termasuk validasi dan penyimpanan link Google Drive
 */
class DokumenPerdesController extends Controller
{
    /**
     * Menampilkan daftar semua dokumen PerDes
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $dokumenPerdes = DokumenPerdes::orderBy('tahun', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.perdes.index', [
            'dokumenPerdes' => $dokumenPerdes,
        ]);
    }

    /**
     * Menampilkan form untuk membuat dokumen PerDes baru
     * 
     * @return \Illuminate\View\View
     */
    public function buat()
    {
        return view('admin.perdes.form', [
            'dokumen' => null,
            'judulHalaman' => 'Tambah Peraturan Desa Baru',
        ]);
    }

    /**
     * Menyimpan dokumen PerDes baru ke database
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function simpan(Request $request)
    {
        // Validasi input
        $dataValidasi = $request->validate([
            'judul' => 'required|string|max:255',
            'nomor_peraturan' => 'required|string|max:100',
            'tahun' => 'required|integer|min:2000|max:2100',
            'deskripsi' => 'nullable|string',
            'link_google_drive' => 'required|url',
            'aktif' => 'boolean',
        ], [
            // Pesan error dalam bahasa Indonesia
            'judul.required' => 'Judul peraturan wajib diisi.',
            'judul.max' => 'Judul peraturan maksimal 255 karakter.',
            'nomor_peraturan.required' => 'Nomor peraturan wajib diisi.',
            'tahun.required' => 'Tahun wajib diisi.',
            'tahun.integer' => 'Tahun harus berupa angka.',
            'link_google_drive.required' => 'Link Google Drive wajib diisi.',
            'link_google_drive.url' => 'Link Google Drive harus berupa URL yang valid.',
        ]);

        // Set default aktif jika tidak ada
        $dataValidasi['aktif'] = $request->has('aktif');

        // Simpan ke database
        DokumenPerdes::create($dataValidasi);

        return redirect()
            ->route('admin.perdes.index')
            ->with('sukses', 'Peraturan Desa berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit dokumen PerDes
     * 
     * @param int $id ID dokumen
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $dokumen = DokumenPerdes::findOrFail($id);

        return view('admin.perdes.form', [
            'dokumen' => $dokumen,
            'judulHalaman' => 'Edit Peraturan Desa',
        ]);
    }

    /**
     * Memperbarui dokumen PerDes di database
     * 
     * @param Request $request
     * @param int $id ID dokumen
     * @return \Illuminate\Http\RedirectResponse
     */
    public function perbarui(Request $request, $id)
    {
        $dokumen = DokumenPerdes::findOrFail($id);

        // Validasi input
        $dataValidasi = $request->validate([
            'judul' => 'required|string|max:255',
            'nomor_peraturan' => 'required|string|max:100',
            'tahun' => 'required|integer|min:2000|max:2100',
            'deskripsi' => 'nullable|string',
            'link_google_drive' => 'required|url',
            'aktif' => 'boolean',
        ], [
            'judul.required' => 'Judul peraturan wajib diisi.',
            'nomor_peraturan.required' => 'Nomor peraturan wajib diisi.',
            'tahun.required' => 'Tahun wajib diisi.',
            'link_google_drive.required' => 'Link Google Drive wajib diisi.',
            'link_google_drive.url' => 'Link Google Drive harus berupa URL yang valid.',
        ]);

        // Set default aktif jika tidak ada
        $dataValidasi['aktif'] = $request->has('aktif');

        // Perbarui data
        $dokumen->update($dataValidasi);

        return redirect()
            ->route('admin.perdes.index')
            ->with('sukses', 'Peraturan Desa berhasil diperbarui.');
    }

    /**
     * Menghapus dokumen PerDes dari database
     * 
     * @param int $id ID dokumen
     * @return \Illuminate\Http\RedirectResponse
     */
    public function hapus($id)
    {
        $dokumen = DokumenPerdes::findOrFail($id);
        $dokumen->delete();

        return redirect()
            ->route('admin.perdes.index')
            ->with('sukses', 'Peraturan Desa berhasil dihapus.');
    }
}
