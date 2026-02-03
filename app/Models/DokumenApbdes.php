<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Model DokumenApbdes
 * 
 * Merepresentasikan dokumen APBDes (Anggaran Pendapatan dan Belanja Desa)
 * Digunakan untuk menyimpan dan menampilkan dokumen transparansi keuangan desa
 */
class DokumenApbdes extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'dokumen_apbdes';

    // Kolom yang boleh diisi secara massal (mass assignment)
    protected $fillable = [
        'judul',
        'tahun_anggaran',
        'jenis_dokumen',
        'deskripsi',
        'link_google_drive',
        'aktif',
    ];

    // Tipe data untuk casting
    protected $casts = [
        'tahun_anggaran' => 'integer',
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
     * Scope untuk mengambil dokumen berdasarkan tahun anggaran
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $tahun
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTahun($query, $tahun)
    {
        return $query->where('tahun_anggaran', $tahun);
    }

    /**
     * Mendapatkan label jenis dokumen dalam bahasa Indonesia
     * 
     * @return string
     */
    public function getLabelJenisAttribute(): string
    {
        $labels = [
            'apbdes_induk' => 'APBDes Induk',
            'perubahan_apbdes' => 'Perubahan APBDes',
            'laporan_realisasi' => 'Laporan Realisasi',
        ];

        return $labels[$this->jenis_dokumen] ?? $this->jenis_dokumen;
    }
}
