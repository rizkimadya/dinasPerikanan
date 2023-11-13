<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumKegiatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfilKamiController;
use App\Http\Controllers\SurveiController;
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
    Route::get('/admin/profilKami', [ProfilController::class, 'profilKami']);
    Route::post('/admin/profilKami', [ProfilController::class, 'storeOrUpdateProfilKami']);

    // maksud & tujuan
    Route::get('/admin/maksudTujuan', [ProfilController::class, 'maksudTujuan']);
    Route::post('/admin/maksudTujuan', [ProfilController::class, 'storeOrUpdateMaksudTujuan']);

    // maksud & tujuan
    Route::get('/admin/tugasFungsi', [ProfilController::class, 'tugasFungsi']);
    Route::post('/admin/tugasFungsi', [ProfilController::class, 'storeOrUpdateTugasFungsi']);

    // maklumat pelayanan
    Route::get('/admin/maklumatPelayanan', [ProfilController::class, 'maklumatPelayanan']);
    Route::post('/admin/maklumatPelayanan', [ProfilController::class, 'storeOrUpdateMaklumatPelayanan']);

    // tentang kami
    Route::get('/admin/tentangKami', [ProfilController::class, 'tentangKami']);
    Route::post('/admin/tentangKami', [ProfilController::class, 'storeOrUpdateTentangKami']);

    // visi misi
    Route::get('/admin/visiMisi', [PpidController::class, 'visiMisi']);
    Route::post('/admin/visiMisi', [PpidController::class, 'storeOrUpdateVisiMisi']);

    // tugas fungsi
    Route::get('/admin/tugasFungsiPpid', [PpidController::class, 'tugasFungsi']);
    Route::post('/admin/tugasFungsiPpid', [PpidController::class, 'storeOrUpdateTugasFungsi']);

    // maklumat pelayanan
    Route::get('/admin/maklumat', [PpidController::class, 'maklumat']);
    Route::post('/admin/maklumat', [PpidController::class, 'storeOrUpdateMaklumat']);

    // hak kewajiban
    Route::get('/admin/hakKewajiban', [PpidController::class, 'hakKewajiban']);
    Route::post('/admin/hakKewajiban', [PpidController::class, 'storeOrUpdateHakKewajiban']);

    // tentang 
    Route::get('/admin/tentang', [PpidController::class, 'tentang']);
    Route::post('/admin/tentang', [PpidController::class, 'storeOrUpdateTentang']);

    // pengumuman
    Route::get('/admin/pengumuman', [PengumumanController::class, 'index']);
    Route::get('/admin/pengumuman', [PengumumanController::class, 'index']);
    Route::post('/admin/pengumuman', [PengumumanController::class, 'store']);
    Route::get('/admin/pengumuman/edit/{id}', [PengumumanController::class, 'edit']);
    Route::post('/admin/pengumuman/update/{id}', [PengumumanController::class, 'update']);
    Route::get('/admin/pengumuman/delete/{id}', [PengumumanController::class, 'destroy']);

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

    // pengaduan
    Route::get('/admin/pengaduan', [PengaduanController::class, 'index']);
    Route::get('/admin/pengaduan', [PengaduanController::class, 'index']);
    Route::post('/admin/pengaduan', [PengaduanController::class, 'store']);
    Route::get('/admin/pengaduan/edit/{id}', [PengaduanController::class, 'edit']);
    Route::post('/admin/pengaduan/update/{id}', [PengaduanController::class, 'update']);
    Route::get('/admin/pengaduan/delete/{id}', [PengaduanController::class, 'destroy']);

    // survei
    Route::get('/admin/survei', [SurveiController::class, 'index']);
    Route::get('/admin/survei', [SurveiController::class, 'index']);
    Route::post('/admin/survei', [SurveiController::class, 'store']);
    Route::get('/admin/survei/edit/{id}', [SurveiController::class, 'edit']);
    Route::post('/admin/survei/update/{id}', [SurveiController::class, 'update']);
    Route::get('/admin/survei/delete/{id}', [SurveiController::class, 'destroy']);
});
