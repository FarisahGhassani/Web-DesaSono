<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

/**
 * Model Galeri
 * 
 * Merepresentasikan dokumentasi kegiatan dan keunikan desa
 */
class Galeri extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'galeri';

    // Kolom yang boleh diisi secara massal (mass assignment)
    protected $fillable = [
        'judul',
        'slug',
        'ringkasan',
        'konten',
        'gambar_url',
        'kategori',
        'tanggal_publikasi',
        'dipublikasikan',
    ];

    // Tipe data untuk casting
    protected $casts = [
        'tanggal_publikasi' => 'datetime',
        'dipublikasikan' => 'boolean',
    ];

    /**
     * Boot method untuk event model
     * Otomatis membuat slug dari judul saat membuat galeri baru
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($galeri) {
            if (empty($galeri->slug)) {
                $galeri->slug = Str::slug($galeri->judul);
            }
        });
    }

    /**
     * Scope untuk mengambil galeri yang sudah dipublikasikan
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDipublikasikan($query)
    {
        return $query->where('dipublikasikan', true)
            ->whereNotNull('tanggal_publikasi')
            ->where('tanggal_publikasi', '<=', now());
    }

    /**
     * Scope untuk mengambil galeri berdasarkan kategori
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $kategori
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeKategori($query, $kategori)
    {
        return $query->where('kategori', $kategori);
    }

    /**
     * Mendapatkan label kategori dalam bahasa Indonesia
     * 
     * @return string
     */
    public function getLabelKategoriAttribute(): string
    {
        $labels = [
            'dokumentasi' => 'Dokumentasi Kegiatan',
            'keunikan' => 'Keunikan Desa',
        ];

        return $labels[$this->kategori] ?? $this->kategori;
    }

    /**
     * Mendapatkan tanggal publikasi dalam format Indonesia
     * 
     * @return string
     */
    public function getTanggalFormatAttribute(): string
    {
        if (!$this->tanggal_publikasi) {
            return '-';
        }

        return $this->tanggal_publikasi->translatedFormat('d F Y');
    }
}
