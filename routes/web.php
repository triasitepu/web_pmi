<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SubmenuProfilController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DonorDarahController;
use App\Http\Controllers\SubmenuDonorController;
use App\Http\Controllers\RelawanController;
use App\Http\Controllers\SubmenuRelawanController;
use App\Http\Controllers\KebencanaanController;
use App\Http\Controllers\SubmenuKebencanaanController;
use App\Http\Controllers\DiklatController;
use App\Http\Controllers\SubmenuDiklatController;
use App\Http\Controllers\PengaduanController;


Route::get('/tes-sederhana', function () {
    return 'TES ROUTE SEDERHANA BERHASIL! (tanpa auth, prefix, middleware)';
});
/*
|--------------------------------------------------------------------------
| FRONTEND (UMUM)
|--------------------------------------------------------------------------
*/

Route::get('/', fn() => view('home'))->name('home');
Route::get('/about', [SubmenuProfilController::class, 'landing'])->name('about');
Route::get('/relawan', [SubmenuRelawanController::class, 'landing'])->name('relawan');
Route::get('/bencana', [SubmenuKebencanaanController::class, 'landing'])->name('bencana');
Route::get('/ambulans', fn() => view('ambulans'))->name('ambulans');
Route::get('/donor', [SubmenuDonorController::class, 'landing'])->name('donor');
Route::get('/diklat', [SubmenuDiklatController::class, 'landing'])->name('diklat');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');






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

    Route::middleware(['auth'])->group(function () {

    Route::get('/kelola-admin', [UserController::class, 'index'])
        ->name('admin.index');

    Route::get('/kelola-admin/create', [UserController::class, 'create'])
        ->name('admin.create');

    Route::post('/kelola-admin/store', [UserController::class, 'store'])
        ->name('admin.store');

    Route::get('/kelola-admin/edit/{id_pengguna}', [UserController::class, 'edit'])
        ->name('admin.edit');

    Route::post('/kelola-admin/update/{id_pengguna}', [UserController::class, 'update'])
        ->name('admin.update');

    Route::post('/kelola-admin/toggle/{id_pengguna}', [UserController::class, 'toggleStatus'])
        ->name('admin.toggle');
    Route::delete('/kelola-admin/destroy/{id_pengguna}', [UserController::class, 'destroy'])
        ->name('admin.destroy');

});

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

         /*
        |--------------------------------------------------------------------------
        | MENU  PROFIL PMI
        |--------------------------------------------------------------------------
        */

        Route::prefix('profil')->name('profil.')->group(function () {
            Route::get('/', [ProfilController::class, 'index'])
                ->name('index');

            Route::get('/create', [ProfilController::class, 'create'])
                ->name('create');

            Route::post('/', [ProfilController::class, 'store'])
                ->name('store');

            Route::get('/{id}/edit', [ProfilController::class, 'edit'])
                ->name('edit');

            Route::put('/{id}', [ProfilController::class, 'update'])
                ->name('update');

            Route::delete('/{id}', [ProfilController::class, 'destroy'])
                ->name('destroy');
        });
         /*
        |--------------------------------------------------------------------------
        | SUBMENU PROFIL(CRUD)
        |--------------------------------------------------------------------------
        */
         Route::prefix('profil-submenu')->name('profil-submenu.')->group(function () {

            Route::get('/', [SubmenuProfilController::class, 'index'])->name('index');
            Route::get('/create', [SubmenuProfilController::class, 'create'])->name('create');
            Route::post('/', [SubmenuProfilController::class, 'store'])->name('store');
            Route::get('/{id}', [SubmenuProfilController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [SubmenuProfilController::class, 'edit'])->name('edit');
            Route::put('/{id}', [SubmenuProfilController::class, 'update'])->name('update');
            Route::delete('/{id}', [SubmenuProfilController::class, 'destroy'])->name('destroy');

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

            Route::get('/create', [SubmenuDonorController::class, 'create'])
                ->name('create');

            Route::post('/', [SubmenuDonorController::class, 'store'])
                ->name('store');

            Route::get('/{id}', [SubmenuDonorController::class, 'show'])->name('show');

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
         Route::prefix('relawan-submenu')->name('relawan-submenu.')->group(function () {

            Route::get('/', [SubmenuRelawanController::class, 'index'])->name('index');
            Route::get('/create', [SubmenuRelawanController::class, 'create'])->name('create');
            Route::post('/', [SubmenuRelawanController::class, 'store'])->name('store');
            Route::get('/{id}', [SubmenuRelawanController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [SubmenuRelawanController::class, 'edit'])->name('edit');
            Route::put('/{id}', [SubmenuRelawanController::class, 'update'])->name('update');
            Route::delete('/{id}', [SubmenuRelawanController::class, 'destroy'])->name('destroy');

        });

         /*
        |--------------------------------------------------------------------------
        | MENU DIKLAT PMI
        |--------------------------------------------------------------------------
        */

        Route::prefix('diklat')->name('diklat.')->group(function () {
            Route::get('/', [DiklatController::class, 'index'])
                ->name('index');

            Route::get('/create', [DiklatController::class, 'create'])
                ->name('create');

            Route::post('/', [DiklatController::class, 'store'])
                ->name('store');

            Route::get('/{id}/edit', [DiklatController::class, 'edit'])
                ->name('edit');

            Route::put('/{id}', [DiklatController::class, 'update'])
                ->name('update');

            Route::delete('/{id}', [DiklatController::class, 'destroy'])
                ->name('destroy');
        });
         /*
        |--------------------------------------------------------------------------
        | SUBMENU DIKLAT (CRUD)
        |--------------------------------------------------------------------------
        */
         Route::prefix('diklat-submenu')->name('diklat-submenu.')->group(function () {

            Route::get('/', [SubmenuDiklatController::class, 'index'])->name('index');
            Route::get('/create', [SubmenuDiklatController::class, 'create'])->name('create');
            Route::post('/', [SubmenuDiklatController::class, 'store'])->name('store');
            Route::get('/{id}', [SubmenuDiklatController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [SubmenuDiklatController::class, 'edit'])->name('edit');
            Route::put('/{id}', [SubmenuDiklatController::class, 'update'])->name('update');
            Route::delete('/{id}', [SubmenuDiklatController::class, 'destroy'])->name('destroy');

        });
          /*
        |--------------------------------------------------------------------------
        | MENU  KEBENCANAAN PMI
        |--------------------------------------------------------------------------
        */

        Route::prefix('kebencanaan')->name('kebencanaan.')->group(function () {
            Route::get('/', [KebencanaanController::class, 'index'])
                ->name('index');

            Route::get('/create', [KebencanaanController::class, 'create'])
                ->name('create');

            Route::post('/', [KebencanaanController::class, 'store'])
                ->name('store');

            Route::get('/{id}/edit', [KebencanaanController::class, 'edit'])
                ->name('edit');

            Route::put('/{id}', [KebencanaanController::class, 'update'])
                ->name('update');

            Route::delete('/{id}', [KebencanaanController::class, 'destroy'])
                ->name('destroy');
        });
         /*
        |--------------------------------------------------------------------------
        | SUBMENU KEBENCANAAN (CRUD)
        |--------------------------------------------------------------------------
        */
         Route::prefix('kebencanaan-submenu')->name('kebencanaan-submenu.')->group(function () {

            Route::get('/', [SubmenuKebencanaanController::class, 'index'])->name('index');
            Route::get('/create', [SubmenuKebencanaanController::class, 'create'])->name('create');
            Route::post('/', [SubmenuKebencanaanController::class, 'store'])->name('store');
            Route::get('/{id}', [SubmenuKebencanaanController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [SubmenuKebencanaanController::class, 'edit'])->name('edit');
            Route::put('/{id}', [SubmenuKebencanaanController::class, 'update'])->name('update');
            Route::delete('/{id}', [SubmenuKebencanaanController::class, 'destroy'])->name('destroy');

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
