<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfilPmiController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DonorDarahController;
use App\Http\Controllers\SubmenuDonorController;
use App\Http\Controllers\RelawanController;
use App\Http\Controllers\SubmenuRelawanController;

Route::get('/tes-sederhana', function () {
    return 'TES ROUTE SEDERHANA BERHASIL! (tanpa auth, prefix, middleware)';
});
/*
|--------------------------------------------------------------------------
| FRONTEND (UMUM)
|--------------------------------------------------------------------------
*/

Route::get('/', fn() => view('home'))->name('home');
Route::get('/about', [ProfilPmiController::class, 'show'])
    ->name('about');
Route::get('/relawan', fn() => view('relawan'))->name('relawan');

Route::prefix('layanan')->group(function () {
    Route::get('/ambulans', [LayananController::class, 'ambulans'])->name('layanan.ambulans');
    Route::get('/bencana', [LayananController::class, 'bencana'])->name('layanan.bencana');

});





/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin,superadmin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        /*
        |--------------------------------------------------------------------------
        | MENU PROFIL PMI (Controller: ProfilPmiController)
        |--------------------------------------------------------------------------
        */

        Route::prefix('profil-pmi')->name('profil-pmi.')->group(function () {

            // Tampilkan menu profil PMI
            Route::get('/', [ProfilPmiController::class, 'index'])
                ->name('index');

            // Edit menu
            Route::get('/{id_menu}/edit', [ProfilPmiController::class, 'edit'])
                ->name('edit');

            Route::put('/{id_menu}', [ProfilPmiController::class, 'update'])
                ->name('update');
        });

        /*
        |--------------------------------------------------------------------------
        | SUBMENU (Controller: SubmenuController)
        |--------------------------------------------------------------------------
        */

          // Submenu CRUD
    Route::prefix('submenu')->name('submenu.')->group(function () {
        Route::get('/{id_menu}', [SubmenuController::class, 'index'])->name('index');
        Route::get('/{id_menu}/create', [SubmenuController::class, 'create'])->name('create');
        Route::post('/{id_menu}', [SubmenuController::class, 'store'])->name('store');
        Route::get('/{id_menu}/{id_submenu}/edit', [SubmenuController::class, 'edit'])->name('edit');
        Route::put('/{id_menu}/{id_submenu}', [SubmenuController::class, 'update'])->name('update');
        Route::delete('/{id_menu}/{id_submenu}', [SubmenuController::class, 'destroy'])->name('destroy');
        Route::get('/{id_menu}/{id_submenu}', [SubmenuController::class, 'show'])->name('show');
        });
         /*
        |--------------------------------------------------------------------------
        | MENU DONOR DARAH
        |--------------------------------------------------------------------------
        */

        Route::prefix('donor-darah')->name('donor.')->group(function () {
            
            Route::get('/', [DonorDarahController::class, 'index'])
                ->name('index');

            Route::get('/{slug}', [DonorDarahController::class, 'show'])
                ->name('show');
            

        });
        /*
        |--------------------------------------------------------------------------
        | SUBMENU DONOR DARAH (CRUD)
        |--------------------------------------------------------------------------
        */

        Route::prefix('donor-submenu')->name('donor-submenu.')->group(function () {

            Route::get('/', [SubmenuDonorController::class, 'index'])
                ->name('index');

            Route::get('admin/donor/{slug}', [SubmenuDonorController::class, 'show'])       
                ->name('admin.donor.show');


            Route::get('/create', [SubmenuDonorController::class, 'create'])
                ->name('create');

            Route::post('/', [SubmenuDonorController::class, 'store'])
                ->name('store');

            Route::get('/{id}/edit', [SubmenuDonorController::class, 'edit'])
                ->name('edit');

            Route::put('/{id}', [SubmenuDonorController::class, 'update'])
                ->name('update');

            Route::delete('/{id}', [SubmenuDonorController::class, 'destroy'])
                ->name('destroy');
        });

          /*
        |--------------------------------------------------------------------------
        | MENU RELAWAN PMI
        |--------------------------------------------------------------------------
        */

        Route::prefix('relawan')->name('relawan.')->group(function () {
            Route::get('/', [RelawanController::class, 'index'])
                ->name('index');

            Route::get('/create', [RelawanController::class, 'create'])
                ->name('create');

            Route::post('/', [RelawanController::class, 'store'])
                ->name('store');

            Route::get('/{id}/edit', [RelawanController::class, 'edit'])
                ->name('edit');

            Route::put('/{id}', [RelawanController::class, 'update'])
                ->name('update');

            Route::delete('/{id}', [RelawanController::class, 'destroy'])
                ->name('destroy');
        });
         /*
        |--------------------------------------------------------------------------
        | SUBMENU RELAWAN (CRUD)
        |--------------------------------------------------------------------------
        */
         Route::prefix('relawan/{relawan}/submenu')->name('relawan-submenu.')->group(function () {

            Route::get('/', [SubmenuRelawanController::class, 'index'])->name('index');
            Route::get('/create', [SubmenuRelawanController::class, 'create'])->name('create');
            Route::post('/', [SubmenuRelawanController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [SubmenuRelawanController::class, 'edit'])->name('edit');
            Route::put('/{id}', [SubmenuRelawanController::class, 'update'])->name('update');
            Route::delete('/{id}', [SubmenuRelawanController::class, 'destroy'])->name('destroy');

        });
        /*
        |--------------------------------------------------------------------------
        | SUPERADMIN ONLY
        |--------------------------------------------------------------------------
        */

        Route::middleware('role:superadmin')->group(function () {

            Route::get('/superadmin/dashboard', [DashboardController::class, 'superadmin'])
                ->name('superadmin.dashboard');

            Route::get('/superadmin/kelola-pengguna', [UserController::class, 'index'])
                ->name('superadmin.users.index');
        });
    });
