<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InputMenuController;
use App\Http\Controllers\Admin\KategoriController;

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('post-login');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', [DashboardController::class, 'showDashboard'])->name('admin.dashboard');
Route::delete('/admin/dashboard/{id}', [DashboardController::class, 'hapusMenu'])->name('admin.dashboard.hapus-menu');
Route::put('/admin/dashboard/{id}', [DashboardController::class, 'updateMenu'])->name('admin.dashboard.update-menu');

Route::get('/admin/input-menu', [InputMenuController::class, 'showInputMenu'])->name('admin.input-menu');
Route::post('/admin/input-menu', [InputMenuController::class, 'storeMenu'])->name('admin.input-menu.store');

Route::get('/admin/kategori', [KategoriController::class, 'showKategori'])->name('admin.kategori');
Route::post('/admin/kategori', [KategoriController::class, 'storeKategori'])->name('admin.kategori.store');
Route::delete('/admin/kategori/{id}', [KategoriController::class, 'hapusKategori'])->name('admin.kategori.hapus');
Route::put('/admin/kategori/{id}', [KategoriController::class, 'updateKategori'])->name('admin.kategori.update');

Route::get('/', [IndexController::class, 'showIndex'])->name('index');
Route::get('/menu', [MenuController::class, 'showMenu'])->name('menu');
Route::get('/about', [AboutController::class, 'showAbout'])->name('about');


Route::prefix('admin')->middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('admin.dashboard');
});
