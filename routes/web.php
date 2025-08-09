<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RTController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/beranda', [HomeController::class, 'index'])->name('beranda');
Route::get('/umkm', [UMKMController::class, 'index'])->name('umkm');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/qr-code', function () {
    return view('qr-code');
})->name('qr-code');

Route::get('/qr-scanner', function () {
    return view('qr-scanner');
})->name('qr-scanner');

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
    
    // Settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::put('/settings', [AdminController::class, 'settingsUpdate'])->name('settings.update');
});

// RT Routes
Route::prefix('rt')->name('rt.')->middleware(['auth', 'rt'])->group(function () {
    Route::get('/', [RTController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [RTController::class, 'dashboard'])->name('dashboard');
    

    
    // RT UMKM Management
    Route::get('/umkm', [RTController::class, 'umkm'])->name('umkm.index');
    Route::get('/umkm/create', [RTController::class, 'umkmCreate'])->name('umkm.create');
    Route::post('/umkm', [RTController::class, 'umkmStore'])->name('umkm.store');
    Route::get('/umkm/{id}/edit', [RTController::class, 'umkmEdit'])->name('umkm.edit');
    Route::put('/umkm/{id}', [RTController::class, 'umkmUpdate'])->name('umkm.update');
    Route::delete('/umkm/{id}', [RTController::class, 'umkmDestroy'])->name('umkm.destroy');
    
    // RT Profile Management
    Route::get('/profile', [RTController::class, 'profile'])->name('profile');
    Route::put('/profile', [RTController::class, 'profileUpdate'])->name('profile.update');
    Route::put('/change-password', [RTController::class, 'changePassword'])->name('change-password');
});
