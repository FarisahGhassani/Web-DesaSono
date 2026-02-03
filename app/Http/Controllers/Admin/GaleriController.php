<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Controller Admin untuk Galeri
 * 
 * Mengelola CRUD (Create, Read, Update, Delete) dokumentasi kegiatan
 * dan keunikan desa
 */
class GaleriController extends Controller
{
    /**
     * Menampilkan daftar semua galeri
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $daftarGaleri = Galeri::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.galeri.index', [
            'daftarGaleri' => $daftarGaleri,
        ]);
    }

    /**
     * Menampilkan form untuk membuat galeri baru
     * 
     * @return \Illuminate\View\View
     */
    public function buat()
    {
        return view('admin.galeri.form', [
            'galeri' => null,
            'judulHalaman' => 'Tambah Galeri Baru',
        ]);
    }

    /**
     * Menyimpan galeri baru ke database
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function simpan(Request $request)
    {
        // Validasi input
        $dataValidasi = $request->validate([
            'judul' => 'required|string|max:255',
            'ringkasan' => 'nullable|string|max:500',
            'konten' => 'required|string',
            'gambar_url' => 'nullable|url',
            'kategori' => 'required|in:dokumentasi,keunikan',
            'dipublikasikan' => 'boolean',
        ], [
            // Pesan error dalam bahasa Indonesia
            'judul.required' => 'Judul galeri wajib diisi.',
            'judul.max' => 'Judul galeri maksimal 255 karakter.',
            'konten.required' => 'Konten galeri wajib diisi.',
            'kategori.required' => 'Kategori wajib dipilih.',
            'kategori.in' => 'Kategori tidak valid.',
            'gambar_url.url' => 'URL gambar harus berupa URL yang valid.',
        ]);

        // Generate slug dari judul
        $dataValidasi['slug'] = Str::slug($dataValidasi['judul']) . '-' . time();

        // Set status publikasi
        $dataValidasi['dipublikasikan'] = $request->has('dipublikasikan');

        // Set tanggal publikasi jika dipublikasikan
        if ($dataValidasi['dipublikasikan']) {
            $dataValidasi['tanggal_publikasi'] = now();
        }

        // Simpan ke database
        Galeri::create($dataValidasi);

        return redirect()
            ->route('admin.galeri.index')
            ->with('sukses', 'Galeri berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit galeri
     * 
     * @param int $id ID galeri
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('admin.galeri.form', [
            'galeri' => $galeri,
            'judulHalaman' => 'Edit Galeri',
        ]);
    }

    /**
     * Memperbarui galeri di database
     * 
     * @param Request $request
     * @param int $id ID galeri
     * @return \Illuminate\Http\RedirectResponse
     */
    public function perbarui(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        // Validasi input
        $dataValidasi = $request->validate([
            'judul' => 'required|string|max:255',
            'ringkasan' => 'nullable|string|max:500',
            'konten' => 'required|string',
            'gambar_url' => 'nullable|url',
            'kategori' => 'required|in:dokumentasi,keunikan',
            'dipublikasikan' => 'boolean',
        ], [
            'judul.required' => 'Judul galeri wajib diisi.',
            'konten.required' => 'Konten galeri wajib diisi.',
            'kategori.required' => 'Kategori wajib dipilih.',
        ]);

        // Set status publikasi
        $dipublikasikanBaru = $request->has('dipublikasikan');
        $dataValidasi['dipublikasikan'] = $dipublikasikanBaru;

        // Set tanggal publikasi jika baru dipublikasikan
        if ($dipublikasikanBaru && !$galeri->dipublikasikan) {
            $dataValidasi['tanggal_publikasi'] = now();
        }

        // Perbarui data
        $galeri->update($dataValidasi);

        return redirect()
            ->route('admin.galeri.index')
            ->with('sukses', 'Galeri berhasil diperbarui.');
    }

    /**
     * Menghapus galeri dari database
     * 
     * @param int $id ID galeri
     * @return \Illuminate\Http\RedirectResponse
     */
    public function hapus($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();

        return redirect()
            ->route('admin.galeri.index')
            ->with('sukses', 'Galeri berhasil dihapus.');
    }
}
