<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SubmenuProfil;
use App\Models\Profil;
use App\Models\DonorDarah;
use App\Models\SubmenuDonor;
use App\Models\SubmenuRelawan;
use App\Models\SubmenuKebencanaan;
use App\Models\SubmenuDiklat;


class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

        public function boot()
        {
            View::composer(['layouts.admin', 'admin.sidebar'], function ($view) {
                // Profil PMI
                $profilMenus = Profil::where('kategori', 'profil')->get();
                $profilSubmenus = SubmenuProfil::whereHas('profil', fn($q) => $q->where('kategori','profil'))->get();

                $view->with([
                    'profilMenus' => $profilMenus,
                    'profilSubmenus' => $profilSubmenus,
                    'menuDefault' => $profilMenus->first(),
                ]);

                // Donor
                $donorSubmenus = SubmenuDonor::where('is_active', 1)->orderBy('urutan')->get();
                $view->with(['donorSubmenus' => $donorSubmenus]);

                // Relawan
                $relawanSubmenus = SubmenuRelawan::where('is_active', 1)->orderBy('urutan')->get();
                $view->with(['relawanSubmenus' => $relawanSubmenus]);

                // Kebencanaan
                $kebencanaanSubmenus = SubmenuKebencanaan::where('is_active', 1)->orderBy('urutan')->get();
                $view->with(['kebencanaanSubmenus' => $kebencanaanSubmenus]);

                // Diklat
                $diklatSubmenus = SubmenuDiklat::where('is_active', 1)->orderBy('urutan')->get();
                $view->with(['diklatSubmenus' => $diklatSubmenus]);
            });

            // ✅ INI YANG BENAR (global ke semua view)
            View::share('totalrelawan', SubmenuRelawan::where('slug', 'totalrelawan')->first());
        }

}