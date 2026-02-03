<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InformasiDesa;
use App\Models\PerangkatDesa;
use Illuminate\Http\Request;

/**
 * Controller Admin untuk Pengaturan Desa
 * 
 * Mengelola informasi umum desa, perangkat desa,
 * dan pengaturan website lainnya
 */
class PengaturanController extends Controller
{
    /**
     * Menampilkan form pengaturan informasi desa
     * 
     * @return \Illuminate\View\View
     */
    public function informasiDesa()
    {
        $infoDesa = InformasiDesa::semuaSebagaiArray();

        return view('admin.pengaturan.informasi-desa', [
            'infoDesa' => $infoDesa,
        ]);
    }

    /**
     * Menyimpan pengaturan informasi desa
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function simpanInformasiDesa(Request $request)
    {
        // Daftar kunci yang akan disimpan
        $daftarKunci = [
            'nama_desa' => 'Nama desa',
            'kecamatan' => 'Nama kecamatan',
            'kabupaten' => 'Nama kabupaten',
            'provinsi' => 'Nama provinsi',
            'kode_pos' => 'Kode pos',
            'alamat_lengkap' => 'Alamat lengkap kantor desa',
            'telepon' => 'Nomor telepon',
            'email' => 'Alamat email',
            'website' => 'URL website',
            'sejarah_desa' => 'Sejarah singkat desa',
            'visi' => 'Visi desa',
            'misi' => 'Misi desa',
            'sambutan_kepala_desa' => 'Sambutan kepala desa',
            'nama_kepala_desa' => 'Nama kepala desa',
            'latitude' => 'Koordinat latitude',
            'longitude' => 'Koordinat longitude',
            'folder_google_drive_apbdes' => 'Link Folder Google Drive APBDes',
            'folder_google_drive_perdes' => 'Link Folder Google Drive PerDes',
        ];

        // Simpan setiap kunci yang ada di request
        foreach ($daftarKunci as $kunci => $deskripsi) {
            if ($request->has($kunci)) {
                InformasiDesa::simpan($kunci, $request->input($kunci), $deskripsi);
            }
        }

        return redirect()
            ->route('admin.pengaturan.informasi-desa')
            ->with('sukses', 'Informasi desa berhasil disimpan.');
    }

    /**
     * Menampilkan daftar perangkat desa
     * 
     * @return \Illuminate\View\View
     */
    public function perangkatDesa()
    {
        $perangkatDesa = PerangkatDesa::berurutan()->paginate(10);

        return view('admin.pengaturan.perangkat-desa', [
            'perangkatDesa' => $perangkatDesa,
        ]);
    }

    /**
     * Menampilkan form untuk menambah perangkat desa
     * 
     * @return \Illuminate\View\View
     */
    public function buatPerangkatDesa()
    {
        return view('admin.pengaturan.form-perangkat', [
            'perangkat' => null,
            'judulHalaman' => 'Tambah Perangkat Desa',
        ]);
    }

    /**
     * Menyimpan perangkat desa baru
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function simpanPerangkatDesa(Request $request)
    {
        $dataValidasi = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto_url' => 'nullable|url',
            'urutan' => 'nullable|integer|min:0',
            'aktif' => 'boolean',
        ], [
            'nama.required' => 'Nama perangkat desa wajib diisi.',
            'jabatan.required' => 'Jabatan wajib diisi.',
            'foto_url.url' => 'URL foto harus berupa URL yang valid.',
        ]);

        $dataValidasi['aktif'] = $request->has('aktif');
        $dataValidasi['urutan'] = $request->input('urutan', 0);

        PerangkatDesa::create($dataValidasi);

        return redirect()
            ->route('admin.pengaturan.perangkat-desa')
            ->with('sukses', 'Perangkat desa berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit perangkat desa
     * 
     * @param int $id ID perangkat desa
     * @return \Illuminate\View\View
     */
    public function editPerangkatDesa($id)
    {
        $perangkat = PerangkatDesa::findOrFail($id);

        return view('admin.pengaturan.form-perangkat', [
            'perangkat' => $perangkat,
            'judulHalaman' => 'Edit Perangkat Desa',
        ]);
    }

    /**
     * Memperbarui perangkat desa
     * 
     * @param Request $request
     * @param int $id ID perangkat desa
     * @return \Illuminate\Http\RedirectResponse
     */
    public function perbaruiPerangkatDesa(Request $request, $id)
    {
        $perangkat = PerangkatDesa::findOrFail($id);

        $dataValidasi = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto_url' => 'nullable|url',
            'urutan' => 'nullable|integer|min:0',
            'aktif' => 'boolean',
        ]);

        $dataValidasi['aktif'] = $request->has('aktif');
        $dataValidasi['urutan'] = $request->input('urutan', 0);

        $perangkat->update($dataValidasi);

        return redirect()
            ->route('admin.pengaturan.perangkat-desa')
            ->with('sukses', 'Perangkat desa berhasil diperbarui.');
    }

    /**
     * Menghapus perangkat desa
     * 
     * @param int $id ID perangkat desa
     * @return \Illuminate\Http\RedirectResponse
     */
    public function hapusPerangkatDesa($id)
    {
        $perangkat = PerangkatDesa::findOrFail($id);
        $perangkat->delete();

        return redirect()
            ->route('admin.pengaturan.perangkat-desa')
            ->with('sukses', 'Perangkat desa berhasil dihapus.');
    }
}
