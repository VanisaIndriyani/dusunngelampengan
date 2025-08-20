<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/beranda', [HomeController::class, 'index'])->name('beranda');
Route::get('/umkm', [UMKMController::class, 'index'])->name('umkm');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/qr-code', function () {
    return view('qr-code');
})->name('qr-code');



// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    

    
    // UMKM Management
    Route::get('/umkm', [AdminController::class, 'umkm'])->name('umkm.index');
    Route::get('/umkm/create', [AdminController::class, 'umkmCreate'])->name('umkm.create');
    Route::post('/umkm', [AdminController::class, 'umkmStore'])->name('umkm.store');
    Route::get('/umkm/{id}/edit', [AdminController::class, 'umkmEdit'])->name('umkm.edit');
    Route::put('/umkm/{id}', [AdminController::class, 'umkmUpdate'])->name('umkm.update');
    Route::delete('/umkm/{id}', [AdminController::class, 'umkmDestroy'])->name('umkm.destroy');
    
    // Content Management
    Route::get('/content', [AdminController::class, 'content'])->name('content');
    Route::get('/content/create', [AdminController::class, 'contentCreate'])->name('content.create');
    Route::post('/content', [AdminController::class, 'contentStore'])->name('content.store');
    Route::get('/content/{id}/edit', [AdminController::class, 'contentEdit'])->name('content.edit');
    Route::put('/content/{id}', [AdminController::class, 'contentUpdate'])->name('content.update');
    Route::delete('/content/{id}', [AdminController::class, 'contentDestroy'])->name('content.destroy');
    
    // Kegiatan Management
    Route::resource('kegiatan', \App\Http\Controllers\Admin\KegiatanController::class);
    Route::post('/kegiatan/update-urutan', [\App\Http\Controllers\Admin\KegiatanController::class, 'updateUrutan'])->name('kegiatan.update-urutan');
    
    // Settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::put('/settings', [AdminController::class, 'settingsUpdate'])->name('settings.update');
    
    // User Management
    Route::get('/users', [AdminController::class, 'users'])->name('users.index');
    Route::get('/users/create', [AdminController::class, 'usersCreate'])->name('users.create');
    Route::post('/users', [AdminController::class, 'usersStore'])->name('users.store');
    Route::get('/users/{id}/edit', [AdminController::class, 'usersEdit'])->name('users.edit');
    Route::put('/users/{id}', [AdminController::class, 'usersUpdate'])->name('users.update');
    Route::delete('/users/{id}', [AdminController::class, 'usersDestroy'])->name('users.destroy');
});


