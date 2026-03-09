<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Submenu;
use App\Models\Menu;
use App\Models\DonorDarah;
use App\Models\SubmenuDonor;
use App\Models\SubmenuRelawan;


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
        $profilMenus = Menu::where('kategori', 'profil-pmi')->get();
        $profilSubmenus = Submenu::whereHas('menu', fn($q) => $q->where('kategori','profil-pmi'))->get();


        $view->with([
            'profilMenus' => $profilMenus,
            'profilSubmenus' => $profilSubmenus,
            'menuDefault' => $profilMenus->first(),
          
        ]);

        //Donor Darah
        $donorSubmenus = SubmenuDonor::where('is_active', 1)->orderBy('urutan')->get();

        $view->with([
            'profilMenus' => $profilMenus,
            'profilSubmenus' => $profilSubmenus,
            'menuDefault' => $profilMenus->first(),
            'donorSubmenus' => $donorSubmenus,
        ]);

        //Relawan
          $relawanSubmenus = SubmenuRelawan::where('is_active', 1)->orderBy('urutan')->get();

        $view->with([
            'profilMenus' => $profilMenus,
            'profilSubmenus' => $profilSubmenus,
            'menuDefault' => $profilMenus->first(),
            'relawanSubmenus' => $relawanSubmenus,
        ]);
        
    });
}

}