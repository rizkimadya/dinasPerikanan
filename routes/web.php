<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumKegiatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilKamiController;
use App\Http\Controllers\VideoKegiatanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/upload', [BeritaController::class, 'upload'])->name('ckeditor.upload');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard-admin', [AdminController::class, 'dashboard']);

    // berita
    Route::get('/admin/berita', [BeritaController::class, 'index']);
    Route::get('/admin/berita', [BeritaController::class, 'index']);
    Route::post('/admin/berita', [BeritaController::class, 'store']);
    Route::get('/admin/berita/edit/{id}', [BeritaController::class, 'edit']);
    Route::post('/admin/berita/update/{id}', [BeritaController::class, 'update']);
    Route::get('/admin/berita/delete/{id}', [BeritaController::class, 'destroy']);

    // profil kami
    Route::get('/admin/profilKami', [ProfilKamiController::class, 'index']);

    // album
    Route::get('/admin/album', [AlbumKegiatanController::class, 'index']);
    Route::get('/admin/album', [AlbumKegiatanController::class, 'index']);
    Route::post('/admin/album', [AlbumKegiatanController::class, 'store']);
    Route::get('/admin/album/edit/{id}', [AlbumKegiatanController::class, 'edit']);
    Route::post('/admin/album/update/{id}', [AlbumKegiatanController::class, 'update']);
    Route::get('/admin/album/delete/{id}', [AlbumKegiatanController::class, 'destroy']);

    // video
    Route::get('/admin/video', [VideoKegiatanController::class, 'index']);
    Route::get('/admin/video', [VideoKegiatanController::class, 'index']);
    Route::post('/admin/video', [VideoKegiatanController::class, 'store']);
    Route::get('/admin/video/edit/{id}', [VideoKegiatanController::class, 'edit']);
    Route::post('/admin/video/update/{id}', [VideoKegiatanController::class, 'update']);
    Route::get('/admin/video/delete/{id}', [VideoKegiatanController::class, 'destroy']);
});
