<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Model PerangkatDesa
 * 
 * Merepresentasikan data perangkat/aparatur desa
 * Digunakan untuk menampilkan struktur organisasi pemerintahan desa
 */
class PerangkatDesa extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'perangkat_desa';

    // Kolom yang boleh diisi secara massal (mass assignment)
    protected $fillable = [
        'nama',
        'jabatan',
        'foto_url',
        'urutan',
        'aktif',
    ];

    // Tipe data untuk casting
    protected $casts = [
        'urutan' => 'integer',
        'aktif' => 'boolean',
    ];

    /**
     * Scope untuk mengambil perangkat desa yang aktif saja
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAktif($query)
    {
        return $query->where('aktif', true);
    }

    /**
     * Scope untuk mengurutkan berdasarkan urutan tampil
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeBerurutan($query)
    {
        return $query->orderBy('urutan', 'asc');
    }
}
