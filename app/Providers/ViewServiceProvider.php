<?php

namespace App\Providers;

use App\Models\InformasiDesa;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

/**
 * Service Provider untuk View
 * 
 * Menyediakan data global ke semua views, termasuk informasi desa
 */
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services
     * 
     * Menambahkan View Composer untuk menyediakan data $infoDesa ke semua views
     */
    public function boot(): void
    {
        // Bagikan data informasi desa ke semua views
        View::composer('*', function ($view) {
            // Cek apakah tabel sudah ada (untuk menghindari error saat migrate)
            try {
                $infoDesa = InformasiDesa::semuaSebagaiArray();
            } catch (\Exception $e) {
                $infoDesa = [];
            }

            $view->with('infoDesa', $infoDesa);
        });
    }
}
