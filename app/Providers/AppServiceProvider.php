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
use App\Models\Pengaduan;


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
            View::share('whole_blood_a', SubmenuDonor::where('slug', 'whole-blood-a')->first());
            View::share('whole_blood_b', SubmenuDonor::where('slug', 'whole-blood-b')->first());
            View::share('whole_blood_o', SubmenuDonor::where('slug', 'whole-blood-o')->first());
            View::share('whole_blood_ab', SubmenuDonor::where('slug', 'whole-blood-ab')->first());

            View::share('packed_red_cell_a', SubmenuDonor::where('slug', 'packed-red-cell-a')->first());
            View::share('packed_red_cell_b', SubmenuDonor::where('slug', 'packed-red-cell-b')->first());
            View::share('packed_red_cell_o', SubmenuDonor::where('slug', 'packed-red-cell-o')->first());
            View::share('packed_red_cell_ab', SubmenuDonor::where('slug', 'packed-red-cell-ab')->first());

            View::share('trombocyte_concentrate_a', SubmenuDonor::where('slug', 'trombocyte-concentrate-a')->first());
            View::share('trombocyte_concentrate_b', SubmenuDonor::where('slug', 'trombocyte-concentrate-b')->first());
            View::share('trombocyte_concentrate_o', SubmenuDonor::where('slug', 'trombocyte-concentrate-o')->first());
            View::share('trombocyte_concentrate_ab', SubmenuDonor::where('slug', 'trombocyte-concentrate-ab')->first());

            View::share('fresh_frozen_plasma_a', SubmenuDonor::where('slug', 'fresh-frozen-plasma-a')->first());
            View::share('fresh_frozen_plasma_b', SubmenuDonor::where('slug', 'fresh-frozen-plasma-b')->first());
            View::share('fresh_frozen_plasma_o', SubmenuDonor::where('slug', 'fresh-frozen-plasma-o')->first());
            View::share('fresh_frozen_plasma_ab', SubmenuDonor::where('slug', 'fresh-frozen-plasma-ab')->first());
            View::share('totaldonor', SubmenuDonor::where('slug', 'totaldonor')->first());
           View::share('totalstokdarah',\App\Models\SubmenuDonor::whereIn('slug', [
                    'whole-blood-a','whole-blood-b','whole-blood-o','whole-blood-ab',
                    'packed-red-cell-a','packed-red-cell-b','packed-red-cell-o','packed-red-cell-ab',
                    'trombocyte-concentrate-a','trombocyte-concentrate-b','trombocyte-concentrate-o','trombocyte-concentrate-ab',
                    'fresh-frozen-plasma-a','fresh-frozen-plasma-b','fresh-frozen-plasma-o','fresh-frozen-plasma-ab'
                ])->get()->sum(function($item){
                    return (int) filter_var($item->isi, FILTER_SANITIZE_NUMBER_INT);
                })
            );
            View::share('headlineberanda', SubmenuProfil::where('slug', 'headlineberanda')->first());
            
            View::share('bencana', Pengaduan::where('kategori', 'Bencana Daerah')
                ->latest()
                ->first());

            View::share('totalBencana', Pengaduan::where('kategori', 'Bencana Daerah')
                ->count());



                    }

}