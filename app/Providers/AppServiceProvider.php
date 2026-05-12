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

            // global ke semua view
            View::share('totalrelawan', SubmenuRelawan::where('slug', 'totalrelawan')->first());
            View::share('wba', SubmenuDonor::where('slug', 'wba')->first());
            View::share('wbb', SubmenuDonor::where('slug', 'wbb')->first());
            View::share('wbo', SubmenuDonor::where('slug', 'wbo')->first());
            View::share('wbab', SubmenuDonor::where('slug', 'wbab')->first());

            View::share('prca', SubmenuDonor::where('slug', 'prca')->first());
            View::share('prcb', SubmenuDonor::where('slug', 'prcb')->first());
            View::share('prco', SubmenuDonor::where('slug', 'prco')->first());
            View::share('prcab', SubmenuDonor::where('slug', 'prcab')->first());

            View::share('tca', SubmenuDonor::where('slug', 'tca')->first());
            View::share('tcb', SubmenuDonor::where('slug', 'tcb')->first());
            View::share('tco', SubmenuDonor::where('slug', 'tco')->first());
            View::share('tcab', SubmenuDonor::where('slug', 'tcab')->first());

            View::share('ffpa', SubmenuDonor::where('slug', 'ffpa')->first());
            View::share('ffpb', SubmenuDonor::where('slug', 'ffpb')->first());
            View::share('ffpo', SubmenuDonor::where('slug', 'ffpo')->first());
            View::share('ffpab', SubmenuDonor::where('slug', 'ffpab')->first());
            View::share('totaldonor', SubmenuDonor::where('slug', 'totaldonor')->first());
            View::share('headlineberanda', SubmenuProfil::where('slug', 'headlineberanda')->first());



                    }

}