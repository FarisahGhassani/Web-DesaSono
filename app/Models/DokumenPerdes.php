<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Model DokumenPerdes
 * 
 * Merepresentasikan dokumen PerDes (Peraturan Desa)
 * Digunakan untuk menyimpan dan menampilkan peraturan desa
 */
class DokumenPerdes extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'dokumen_perdes';

    // Kolom yang boleh diisi secara massal (mass assignment)
    protected $fillable = [
        'judul',
        'nomor_peraturan',
        'tahun',
        'deskripsi',
        'link_google_drive',
        'aktif',
    ];

    // Tipe data untuk casting
    protected $casts = [
        'tahun' => 'integer',
        'aktif' => 'boolean',
    ];

    /**
     * Scope untuk mengambil dokumen yang aktif saja
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAktif($query)
    {
        return $query->where('aktif', true);
    }

    /**
     * Scope untuk mengambil dokumen berdasarkan tahun
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $tahun
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTahun($query, $tahun)
    {
        return $query->where('tahun', $tahun);
    }
}
