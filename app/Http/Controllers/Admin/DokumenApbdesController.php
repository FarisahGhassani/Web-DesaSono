<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DokumenApbdes;
use Illuminate\Http\Request;

/**
 * Controller Admin untuk Dokumen APBDes
 * 
 * Mengelola CRUD (Create, Read, Update, Delete) dokumen APBDes
 * termasuk validasi dan penyimpanan link Google Drive
 */
class DokumenApbdesController extends Controller
{
    /**
     * Menampilkan daftar semua dokumen APBDes
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $dokumenApbdes = DokumenApbdes::orderBy('tahun_anggaran', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.apbdes.index', [
            'dokumenApbdes' => $dokumenApbdes,
        ]);
    }

    /**
     * Menampilkan form untuk membuat dokumen APBDes baru
     * 
     * @return \Illuminate\View\View
     */
    public function buat()
    {
        return view('admin.apbdes.form', [
            'dokumen' => null,
            'judulHalaman' => 'Tambah Dokumen APBDes Baru',
        ]);
    }

    /**
     * Menyimpan dokumen APBDes baru ke database
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function simpan(Request $request)
    {
        // Validasi input
        $dataValidasi = $request->validate([
            'judul' => 'required|string|max:255',
            'tahun_anggaran' => 'required|integer|min:2000|max:2100',
            'jenis_dokumen' => 'required|in:apbdes_induk,perubahan_apbdes,laporan_realisasi',
            'deskripsi' => 'nullable|string',
            'link_google_drive' => 'required|url',
            'aktif' => 'boolean',
        ], [
            // Pesan error dalam bahasa Indonesia
            'judul.required' => 'Judul dokumen wajib diisi.',
            'judul.max' => 'Judul dokumen maksimal 255 karakter.',
            'tahun_anggaran.required' => 'Tahun anggaran wajib diisi.',
            'tahun_anggaran.integer' => 'Tahun anggaran harus berupa angka.',
            'jenis_dokumen.required' => 'Jenis dokumen wajib dipilih.',
            'jenis_dokumen.in' => 'Jenis dokumen tidak valid.',
            'link_google_drive.required' => 'Link Google Drive wajib diisi.',
            'link_google_drive.url' => 'Link Google Drive harus berupa URL yang valid.',
        ]);

        // Set default aktif jika tidak ada
        $dataValidasi['aktif'] = $request->has('aktif');

        // Simpan ke database
        DokumenApbdes::create($dataValidasi);

        return redirect()
            ->route('admin.apbdes.index')
            ->with('sukses', 'Dokumen APBDes berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit dokumen APBDes
     * 
     * @param int $id ID dokumen
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $dokumen = DokumenApbdes::findOrFail($id);

        return view('admin.apbdes.form', [
            'dokumen' => $dokumen,
            'judulHalaman' => 'Edit Dokumen APBDes',
        ]);
    }

    /**
     * Memperbarui dokumen APBDes di database
     * 
     * @param Request $request
     * @param int $id ID dokumen
     * @return \Illuminate\Http\RedirectResponse
     */
    public function perbarui(Request $request, $id)
    {
        $dokumen = DokumenApbdes::findOrFail($id);

        // Validasi input
        $dataValidasi = $request->validate([
            'judul' => 'required|string|max:255',
            'tahun_anggaran' => 'required|integer|min:2000|max:2100',
            'jenis_dokumen' => 'required|in:apbdes_induk,perubahan_apbdes,laporan_realisasi',
            'deskripsi' => 'nullable|string',
            'link_google_drive' => 'required|url',
            'aktif' => 'boolean',
        ], [
            'judul.required' => 'Judul dokumen wajib diisi.',
            'tahun_anggaran.required' => 'Tahun anggaran wajib diisi.',
            'jenis_dokumen.required' => 'Jenis dokumen wajib dipilih.',
            'link_google_drive.required' => 'Link Google Drive wajib diisi.',
            'link_google_drive.url' => 'Link Google Drive harus berupa URL yang valid.',
        ]);

        // Set default aktif jika tidak ada
        $dataValidasi['aktif'] = $request->has('aktif');

        // Perbarui data
        $dokumen->update($dataValidasi);

        return redirect()
            ->route('admin.apbdes.index')
            ->with('sukses', 'Dokumen APBDes berhasil diperbarui.');
    }

    /**
     * Menghapus dokumen APBDes dari database
     * 
     * @param int $id ID dokumen
     * @return \Illuminate\Http\RedirectResponse
     */
    public function hapus($id)
    {
        $dokumen = DokumenApbdes::findOrFail($id);
        $dokumen->delete();

        return redirect()
            ->route('admin.apbdes.index')
            ->with('sukses', 'Dokumen APBDes berhasil dihapus.');
    }
}
