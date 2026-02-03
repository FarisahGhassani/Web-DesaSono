<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Controllers Publik
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TransparansiController;

// Controllers Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DokumenApbdesController;
use App\Http\Controllers\Admin\DokumenPerdesController;
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;
use App\Http\Controllers\Admin\PengaturanController;

/*
|--------------------------------------------------------------------------
| Routes Publik (Halaman Masyarakat)
|--------------------------------------------------------------------------
| Routes ini dapat diakses oleh semua pengunjung tanpa login
*/

// Halaman Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// Halaman Profil Desa
Route::get('/profil-desa', [ProfilDesaController::class, 'index'])->name('profil-desa');

// Halaman Peta Desa
Route::get('/peta', [PetaController::class, 'index'])->name('peta');

// Halaman Galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');


// Halaman Transparansi
Route::get('/transparansi', [TransparansiController::class, 'index'])->name('transparansi');

/*
|--------------------------------------------------------------------------
| Routes Autentikasi
|--------------------------------------------------------------------------
| Routes untuk login dan logout admin
*/

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login')->middleware('guest');

Route::post('/admin/login', function () {
    $credentials = request()->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect()->intended(route('admin.dashboard'));
    }

    return back()->withErrors([
        'email' => 'Email atau password tidak valid.',
    ])->onlyInput('email');
})->name('admin.login.proses');

Route::post('/admin/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('beranda');
})->name('admin.logout');

/*
|--------------------------------------------------------------------------
| Routes Admin (Memerlukan Login)
|--------------------------------------------------------------------------
| Routes ini hanya dapat diakses setelah login sebagai admin
*/

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Manajemen Dokumen APBDes
    Route::prefix('apbdes')->name('apbdes.')->group(function () {
        Route::get('/', [DokumenApbdesController::class, 'index'])->name('index');
        Route::get('/buat', [DokumenApbdesController::class, 'buat'])->name('buat');
        Route::post('/simpan', [DokumenApbdesController::class, 'simpan'])->name('simpan');
        Route::get('/edit/{id}', [DokumenApbdesController::class, 'edit'])->name('edit');
        Route::put('/perbarui/{id}', [DokumenApbdesController::class, 'perbarui'])->name('perbarui');
        Route::delete('/hapus/{id}', [DokumenApbdesController::class, 'hapus'])->name('hapus');
    });

    // Manajemen Dokumen PerDes
    Route::prefix('perdes')->name('perdes.')->group(function () {
        Route::get('/', [DokumenPerdesController::class, 'index'])->name('index');
        Route::get('/buat', [DokumenPerdesController::class, 'buat'])->name('buat');
        Route::post('/simpan', [DokumenPerdesController::class, 'simpan'])->name('simpan');
        Route::get('/edit/{id}', [DokumenPerdesController::class, 'edit'])->name('edit');
        Route::put('/perbarui/{id}', [DokumenPerdesController::class, 'perbarui'])->name('perbarui');
        Route::delete('/hapus/{id}', [DokumenPerdesController::class, 'hapus'])->name('hapus');
    });

    // Manajemen Galeri
    Route::prefix('galeri')->name('galeri.')->group(function () {
        Route::get('/', [AdminGaleriController::class, 'index'])->name('index');
        Route::get('/buat', [AdminGaleriController::class, 'buat'])->name('buat');
        Route::post('/simpan', [AdminGaleriController::class, 'simpan'])->name('simpan');
        Route::get('/edit/{id}', [AdminGaleriController::class, 'edit'])->name('edit');
        Route::put('/perbarui/{id}', [AdminGaleriController::class, 'perbarui'])->name('perbarui');
        Route::delete('/hapus/{id}', [AdminGaleriController::class, 'hapus'])->name('hapus');
    });

    // Pengaturan
    Route::prefix('pengaturan')->name('pengaturan.')->group(function () {
        // Informasi Desa
        Route::get('/informasi-desa', [PengaturanController::class, 'informasiDesa'])->name('informasi-desa');
        Route::post('/informasi-desa', [PengaturanController::class, 'simpanInformasiDesa'])->name('simpan-informasi-desa');

        // Perangkat Desa
        Route::get('/perangkat-desa', [PengaturanController::class, 'perangkatDesa'])->name('perangkat-desa');
        Route::get('/perangkat-desa/buat', [PengaturanController::class, 'buatPerangkatDesa'])->name('buat-perangkat-desa');
        Route::post('/perangkat-desa/simpan', [PengaturanController::class, 'simpanPerangkatDesa'])->name('simpan-perangkat-desa');
        Route::get('/perangkat-desa/edit/{id}', [PengaturanController::class, 'editPerangkatDesa'])->name('edit-perangkat-desa');
        Route::put('/perangkat-desa/perbarui/{id}', [PengaturanController::class, 'perbaruiPerangkatDesa'])->name('perbarui-perangkat-desa');
        Route::delete('/perangkat-desa/hapus/{id}', [PengaturanController::class, 'hapusPerangkatDesa'])->name('hapus-perangkat-desa');
    });
});
