<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Model InformasiDesa
 * 
 * Merepresentasikan pengaturan dan informasi desa dalam format key-value
 * Digunakan untuk menyimpan data seperti nama desa, visi, misi, alamat, dll
 */
class InformasiDesa extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'informasi_desa';

    // Kolom yang boleh diisi secara massal (mass assignment)
    protected $fillable = [
        'kunci',
        'nilai',
        'deskripsi',
    ];

    /**
     * Mengambil nilai informasi berdasarkan kunci
     * 
     * @param string $kunci Kunci pengaturan yang dicari
     * @param mixed $default Nilai default jika tidak ditemukan
     * @return mixed
     */
    public static function ambil(string $kunci, $default = null)
    {
        $informasi = static::where('kunci', $kunci)->first();

        return $informasi ? $informasi->nilai : $default;
    }

    /**
     * Menyimpan atau memperbarui nilai informasi
     * 
     * @param string $kunci Kunci pengaturan
     * @param mixed $nilai Nilai yang akan disimpan
     * @param string|null $deskripsi Deskripsi pengaturan
     * @return InformasiDesa
     */
    public static function simpan(string $kunci, $nilai, ?string $deskripsi = null): InformasiDesa
    {
        return static::updateOrCreate(
            ['kunci' => $kunci],
            [
                'nilai' => $nilai,
                'deskripsi' => $deskripsi,
            ]
        );
    }

    /**
     * Mengambil semua informasi sebagai array key-value
     * 
     * @return array
     */
    public static function semuaSebagaiArray(): array
    {
        return static::pluck('nilai', 'kunci')->toArray();
    }
}
