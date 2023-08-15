<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KarirController;
Use App\Http\Controllers\ClientController;
use App\Http\Controllers\KontakController;
Use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/layanan', [HomeController::class, 'layanan']);
Route::get('/karir', [HomeController::class, 'karir']);
Route::get('/contact-us', [HomeController::class, 'kontak']);
Route::get('/karir/{position}', [HomeController::class, 'showBySlug'])->name('apply.showBySlug');

// Auth
Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
Route::post('/admin/login', [AuthController::class, 'authenticated']);
Route::get('/admin/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Beranda
Route::get('/admin/beranda', [BerandaController::class,'index'])->middleware('auth');
Route::put('/admin/beranda/{id}', [BerandaController::class,'update'])->middleware('auth');

// Layanan
Route::resource('/admin/layanans', LayananController::class)->middleware('auth');

// Karir
Route::resource('/admin/karirs', KarirController::class)->middleware('auth');

// Client
Route::resource('/admin/clients', ClientController::class)->middleware('auth');

// Kontak
Route::get('/admin/kontak', [KontakController::class,'index'])->middleware('auth');
Route::put('/admin/kontak/{id}', [KontakController::class,'update'])->middleware('auth');

// About
Route::get('/admin/about', [AboutController::class,'index'])->middleware('auth');
Route::put('/admin/about/{id}', [AboutController::class,'update'])->middleware('auth');

// Galeri
Route::resource('/admin/galeris', GaleriController::class)->middleware('auth');

// Pengaturan 
Route::resource('/admin/pengaturan', PengaturanController::class)->middleware('auth');
Route::put('/admin/ubahpassword/{user}', [PengaturanController::class, 'ubahPassword']);  // Ubah Password
Route::put('/admin/ubahNamaPerusahaan/{perusahaan}', [PengaturanController::class, 'ubahNamaPerusahaan']);  // Ubah Nama Perusahaan
Route::put('/admin/ubahLogoPerusahaan/{perusahaan}', [PengaturanController::class, 'ubahLogoPerusahaan']);  // Ubah Logo Perusahaan






