<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Berbagi data info desa ke semua view agar tidak perlu dipas di setiap controller
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('informasi_desa')) {
                $infoDesa = \App\Models\InformasiDesa::semuaSebagaiArray();
                \Illuminate\Support\Facades\View::share('infoDesa', $infoDesa);
            }
        } catch (\Exception $e) {
            // Jika ada error saat akses database (misal belum migrasi), diamkan saja
            \Illuminate\Support\Facades\View::share('infoDesa', []);
        }
    }
}
