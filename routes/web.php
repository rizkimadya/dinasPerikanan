<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumKegiatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InformasiBerkalaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PejabatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfilKamiController;
use App\Http\Controllers\SertaMertaController;
use App\Http\Controllers\SssController;
use App\Http\Controllers\SurveiController;
use App\Http\Controllers\UserController;
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

// user
Route::get('/', [UserController::class, 'beranda']);

// pengumuman
Route::get('/pengumuman', [UserController::class, 'pengumuman']);
Route::get('/pengumuman/detail/{id}', [UserController::class, 'detailPengumuman']);

// berita
Route::get('/berita', [UserController::class, 'berita']);
Route::get('/berita/detail/{id}', [UserController::class, 'detailBerita']);

// profil pejabat
Route::get('/profil-pejabat', [UserController::class, 'profilPejabat']);
// profil dinas
Route::get('/profil-dinas', [UserController::class, 'profilDinas']);
// maksud & tujuan
Route::get('/maksud-tujuan', [UserController::class, 'maksudTujuan']);
// tugas & fungsi
Route::get('/tugas-fungsi', [UserController::class, 'tugasFungsi']);
// maklumat pelayanan
Route::get('/maklumat-pelayanan', [UserController::class, 'maklumatPelayanan']);
// visi misi
Route::get('/profil/visi-misi', [UserController::class, 'profilVisiMisi']);
// visi misi
Route::get('/profil/struktur-organisasi', [UserController::class, 'strukturOrganisasi']);


// visi misi
Route::get('/visi-misi', [UserController::class, 'visiMisi']);
// maksud tujuan
Route::get('/maksud-tujuan-ppid', [UserController::class, 'maksudTujuanPpid']);
// tugas fungsi ppid
Route::get('/tugas-fungsi-ppid', [UserController::class, 'tugasFungsiPpid']);
// maklumat
Route::get('/maklumat', [UserController::class, 'maklumat']);
// profilSingkat
Route::get('/profil-singkat', [UserController::class, 'profilSingkat']);
// strukturOrganisasiPpid
Route::get('/struktur-organisasi-ppid', [UserController::class, 'strukturOrganisasiPpid']);


//infromasi
// sedia setiap saat
Route::get('/sedia-setiap-saat', [UserController::class, 'informasiSss']);
Route::get('/sedia-setiap-saat/detail/{id}', [UserController::class, 'detailSss']);

// berkala
Route::get('/rencana-pembangunan', [UserController::class, 'rpjmd']);
Route::get('/rencana-pembangunan/detail/{id}', [UserController::class, 'detailRpjmd']);

Route::get('/rencana-strategis', [UserController::class, 'renstra']);
Route::get('/rencana-strategis/detail/{id}', [UserController::class, 'detailRenstra']);

Route::get('/rencana-kerja', [UserController::class, 'renja']);
Route::get('/rencana-kerja/detail/{id}', [UserController::class, 'detailRenja']);

Route::get('/kebijakan-umum', [UserController::class, 'kua']);
Route::get('/kebijakan-umum/detail/{id}', [UserController::class, 'detailKua']);

Route::get('/perjanjian-kinerja', [UserController::class, 'perjanjianKinerja']);
Route::get('/perjanjian-kinerja/detail/{id}', [UserController::class, 'detailPerjanjianKinerja']);

Route::get('/rencana-aksi', [UserController::class, 'rencanaAksi']);
Route::get('/rencana-aksi/detail/{id}', [UserController::class, 'detailRencanaAksi']);

Route::get('/iku', [UserController::class, 'iku']);
Route::get('/iku/detail/{id}', [UserController::class, 'detailIku']);

Route::get('/ringkasan', [UserController::class, 'ringkasan']);
Route::get('/ringkasan/detail/{id}', [UserController::class, 'detailRingkasan']);

Route::get('/ppas', [UserController::class, 'ppas']);
Route::get('/ppas/detail/{id}', [UserController::class, 'detailPpas']);

Route::get('/laporan', [UserController::class, 'laporan']);
Route::get('/laporan/detail/{id}', [UserController::class, 'detailLaporan']);

Route::get('/rekap-kelayakan', [UserController::class, 'rekapKelayakan']);
Route::get('/rekap-kelayakan/detail/{id}', [UserController::class, 'detailRekapKelayakan']);

Route::get('/sertifikat-kelayakan', [UserController::class, 'sertifikatKelayakan']);
Route::get('/sertifikat-kelayakan/detail/{id}', [UserController::class, 'detailSertifikatKelayakan']);

Route::get('/hasil-laboratorium', [UserController::class, 'hasilLaboratorium']);
Route::get('/hasil-laboratorium/detail/{id}', [UserController::class, 'detailHasilLaboratorium']);

Route::get('/statistik', [UserController::class, 'statistik']);
Route::get('/statistik/detail/{id}', [UserController::class, 'detailStatistik']);

Route::get('/produksi-pelabuhan', [UserController::class, 'produksi-pelabuhan']);
Route::get('/produksi-pelabuhan/detail/{id}', [UserController::class, 'detailProduksiPelabuhan']);

// serta merta
Route::get('/standar-operasional-prosedur', [UserController::class, 'sop']);
Route::get('/standar-operasional-prosedur/detail/{id}', [UserController::class, 'detailSop']);

Route::get('/tata-cara-permohonan-informasi', [UserController::class, 'tcpi']);
Route::get('/tata-cara-permohonan-informasi/detail/{id}', [UserController::class, 'detailTcpi']);

Route::get('/formulir-permohonan-informasi', [UserController::class, 'fpi']);
Route::get('/formulir-permohonan-informasi/detail/{id}', [UserController::class, 'detailFpi']);

Route::get('/daftar-informasi', [UserController::class, 'di']);
Route::get('/daftar-informasi/detail/{id}', [UserController::class, 'detailDi']);


Route::get('/kontak', [UserController::class, 'kontak']);
Route::post('/kontak', [KontakController::class, 'store']);
Route::post('/pengaduan', [PengaduanController::class, 'store']);
Route::post('/survei', [SurveiController::class, 'store']);
Route::get('/album', [UserController::class, 'album']);
Route::get('/video', [UserController::class, 'video']);



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

    // kontak
    Route::get('/admin/kontak', [KontakController::class, 'index']);
    Route::get('/admin/kontak/delete/{id}', [KontakController::class, 'destroy']);

    // pejabat
    Route::get('/admin/pejabat', [PejabatController::class, 'index']);
    Route::get('/admin/pejabat', [PejabatController::class, 'index']);
    Route::post('/admin/pejabat', [PejabatController::class, 'store']);
    Route::get('/admin/pejabat/edit/{id}', [PejabatController::class, 'edit']);
    Route::post('/admin/pejabat/update/{id}', [PejabatController::class, 'update']);
    Route::get('/admin/pejabat/delete/{id}', [PejabatController::class, 'destroy']);

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

    // visi misi profil
    Route::get('/admin/profil/visiMisi', [ProfilController::class, 'profilVisiMisi']);
    Route::post('/admin/profil/visiMisi', [ProfilController::class, 'storeOrUpdateProfilVisiMisi']);

    // Struktur Organisasi
    Route::get('/admin/strukturOrganisasi', [ProfilController::class, 'StrukturOrganisasi']);
    Route::post('/admin/strukturOrganisasi', [ProfilController::class, 'storeOrUpdateStrukturOrganisasi']);

    // visi misi
    Route::get('/admin/visiMisi', [PpidController::class, 'visiMisi']);
    Route::post('/admin/visiMisi', [PpidController::class, 'storeOrUpdateVisiMisi']);

    // tugas fungsi
    Route::get('/admin/tugasFungsiPpid', [PpidController::class, 'tugasFungsi']);
    Route::post('/admin/tugasFungsiPpid', [PpidController::class, 'storeOrUpdateTugasFungsi']);

    // maklumat pelayanan
    Route::get('/admin/maklumat', [PpidController::class, 'maklumat']);
    Route::post('/admin/maklumat', [PpidController::class, 'storeOrUpdateMaklumat']);

    // profil singkat
    Route::get('/admin/profilSingkat', [PpidController::class, 'profilSingkat']);
    Route::post('/admin/profilSingkat', [PpidController::class, 'storeOrUpdateProfilSingkat']);

    // strukturOrganisasiPpid
    Route::get('/admin/strukturOrganisasiPpid', [PpidController::class, 'strukturOrganisasiPpid']);
    Route::post('/admin/strukturOrganisasiPpid', [PpidController::class, 'storeOrUpdateStrukturOrganisasiPpid']);

    // pengumuman
    Route::get('/admin/pengumuman', [PengumumanController::class, 'index']);
    Route::post('/admin/pengumuman', [PengumumanController::class, 'store']);
    Route::get('/admin/pengumuman/edit/{id}', [PengumumanController::class, 'edit']);
    Route::post('/admin/pengumuman/update/{id}', [PengumumanController::class, 'update']);
    Route::get('/admin/pengumuman/delete/{id}', [PengumumanController::class, 'destroy']);

    // album
    Route::get('/admin/album', [AlbumKegiatanController::class, 'index']);
    Route::post('/admin/album', [AlbumKegiatanController::class, 'store']);
    Route::get('/admin/album/edit/{id}', [AlbumKegiatanController::class, 'edit']);
    Route::post('/admin/album/update/{id}', [AlbumKegiatanController::class, 'update']);
    Route::get('/admin/album/delete/{id}', [AlbumKegiatanController::class, 'destroy']);

    // video
    Route::get('/admin/video', [VideoKegiatanController::class, 'index']);
    Route::post('/admin/video', [VideoKegiatanController::class, 'store']);
    Route::get('/admin/video/edit/{id}', [VideoKegiatanController::class, 'edit']);
    Route::post('/admin/video/update/{id}', [VideoKegiatanController::class, 'update']);
    Route::get('/admin/video/delete/{id}', [VideoKegiatanController::class, 'destroy']);

    // pengaduan
    Route::get('/admin/pengaduan', [PengaduanController::class, 'index']);
    Route::get('/admin/pengaduan/lihat/{id}', [PengaduanController::class, 'edit']);
    // Route::get('/admin/pengaduan/edit/{id}', [PengaduanController::class, 'edit']);
    // Route::post('/admin/pengaduan/update/{id}', [PengaduanController::class, 'update']);
    Route::get('/admin/pengaduan/delete/{id}', [PengaduanController::class, 'destroy']);

    // survei
    Route::get('/admin/survei', [SurveiController::class, 'index']);
    Route::get('/admin/survei/lihat/{id}', [SurveiController::class, 'edit']);
    Route::post('/admin/survei/update/{id}', [SurveiController::class, 'update']);
    Route::get('/admin/survei/delete/{id}', [SurveiController::class, 'destroy']);

    // rpjmd
    Route::get('/admin/rpjmd', [InformasiBerkalaController::class, 'rpjmd']);
    Route::post('/admin/rpjmd', [InformasiBerkalaController::class, 'storeRpjmd']);
    Route::get('/admin/rpjmd/edit/{id}', [InformasiBerkalaController::class, 'editRpjmd']);
    Route::post('/admin/rpjmd/update/{id}', [InformasiBerkalaController::class, 'updateRpjmd']);
    Route::get('/admin/rpjmd/delete/{id}', [InformasiBerkalaController::class, 'destroyRpjmd']);

    // renstra
    Route::get('/admin/renstra', [InformasiBerkalaController::class, 'renstra']);
    Route::post('/admin/renstra', [InformasiBerkalaController::class, 'storeRenstra']);
    Route::get('/admin/renstra/edit/{id}', [InformasiBerkalaController::class, 'editRenstra']);
    Route::post('/admin/renstra/update/{id}', [InformasiBerkalaController::class, 'updateRenstra']);
    Route::get('/admin/renstra/delete/{id}', [InformasiBerkalaController::class, 'destroyRenstra']);

    // renja
    Route::get('/admin/renja', [InformasiBerkalaController::class, 'renja']);
    Route::post('/admin/renja', [InformasiBerkalaController::class, 'storeRenja']);
    Route::get('/admin/renja/edit/{id}', [InformasiBerkalaController::class, 'editRenja']);
    Route::post('/admin/renja/update/{id}', [InformasiBerkalaController::class, 'updateRenja']);
    Route::get('/admin/renja/delete/{id}', [InformasiBerkalaController::class, 'destroyRenja']);

    // kua
    Route::get('/admin/kua', [InformasiBerkalaController::class, 'kua']);
    Route::post('/admin/kua', [InformasiBerkalaController::class, 'storeKua']);
    Route::get('/admin/kua/edit/{id}', [InformasiBerkalaController::class, 'editKua']);
    Route::post('/admin/kua/update/{id}', [InformasiBerkalaController::class, 'updateKua']);
    Route::get('/admin/kua/delete/{id}', [InformasiBerkalaController::class, 'destroyKua']);

    // perjanjianKinerja
    Route::get('/admin/perjanjianKinerja', [InformasiBerkalaController::class, 'perjanjianKinerja']);
    Route::post('/admin/perjanjianKinerja', [InformasiBerkalaController::class, 'storePerjanjianKinerja']);
    Route::get('/admin/perjanjianKinerja/edit/{id}', [InformasiBerkalaController::class, 'editPerjanjianKinerja']);
    Route::post('/admin/perjanjianKinerja/update/{id}', [InformasiBerkalaController::class, 'updatePerjanjianKinerja']);
    Route::get('/admin/perjanjianKinerja/delete/{id}', [InformasiBerkalaController::class, 'destroyPerjanjianKinerja']);

    // rencanaAksi
    Route::get('/admin/rencanaAksi', [InformasiBerkalaController::class, 'rencanaAksi']);
    Route::post('/admin/rencanaAksi', [InformasiBerkalaController::class, 'storeRencanaAksi']);
    Route::get('/admin/rencanaAksi/edit/{id}', [InformasiBerkalaController::class, 'editRencanaAksi']);
    Route::post('/admin/rencanaAksi/update/{id}', [InformasiBerkalaController::class, 'updateRencanaAksi']);
    Route::get('/admin/rencanaAksi/delete/{id}', [InformasiBerkalaController::class, 'destroyRencanaAksi']);

    // iku
    Route::get('/admin/iku', [InformasiBerkalaController::class, 'iku']);
    Route::post('/admin/iku', [InformasiBerkalaController::class, 'storeIku']);
    Route::get('/admin/iku/edit/{id}', [InformasiBerkalaController::class, 'editIku']);
    Route::post('/admin/iku/update/{id}', [InformasiBerkalaController::class, 'updateIku']);
    Route::get('/admin/iku/delete/{id}', [InformasiBerkalaController::class, 'destroyIku']);

    // ringkasan
    Route::get('/admin/ringkasan', [InformasiBerkalaController::class, 'ringkasan']);
    Route::post('/admin/ringkasan', [InformasiBerkalaController::class, 'storeRingkasan']);
    Route::get('/admin/ringkasan/edit/{id}', [InformasiBerkalaController::class, 'editRingkasan']);
    Route::post('/admin/ringkasan/update/{id}', [InformasiBerkalaController::class, 'updateRingkasan']);
    Route::get('/admin/ringkasan/delete/{id}', [InformasiBerkalaController::class, 'destroyRingkasan']);

    // ppas
    Route::get('/admin/ppas', [InformasiBerkalaController::class, 'ppas']);
    Route::post('/admin/ppas', [InformasiBerkalaController::class, 'storePpas']);
    Route::get('/admin/ppas/edit/{id}', [InformasiBerkalaController::class, 'editPpas']);
    Route::post('/admin/ppas/update/{id}', [InformasiBerkalaController::class, 'updatePpas']);
    Route::get('/admin/ppas/delete/{id}', [InformasiBerkalaController::class, 'destroyPpas']);

    // laporan
    Route::get('/admin/laporan', [InformasiBerkalaController::class, 'laporan']);
    Route::post('/admin/laporan', [InformasiBerkalaController::class, 'storeLaporan']);
    Route::get('/admin/laporan/edit/{id}', [InformasiBerkalaController::class, 'editLaporan']);
    Route::post('/admin/laporan/update/{id}', [InformasiBerkalaController::class, 'updateLaporan']);
    Route::get('/admin/laporan/delete/{id}', [InformasiBerkalaController::class, 'destroyLaporan']);

    // rekapKelayakan
    Route::get('/admin/rekapKelayakan', [InformasiBerkalaController::class, 'rekapKelayakan']);
    Route::post('/admin/rekapKelayakan', [InformasiBerkalaController::class, 'storeRekapKelayakan']);
    Route::get('/admin/rekapKelayakan/edit/{id}', [InformasiBerkalaController::class, 'editRekapKelayakan']);
    Route::post('/admin/rekapKelayakan/update/{id}', [InformasiBerkalaController::class, 'updateRekapKelayakan']);
    Route::get('/admin/rekapKelayakan/delete/{id}', [InformasiBerkalaController::class, 'destroyRekapKelayakan']);

    // sertifikasKelayakan
    Route::get('/admin/sertifikasKelayakan', [InformasiBerkalaController::class, 'sertifikasKelayakan']);
    Route::post('/admin/sertifikasKelayakan', [InformasiBerkalaController::class, 'storeSertifikatKelayakan']);
    Route::get('/admin/sertifikasKelayakan/edit/{id}', [InformasiBerkalaController::class, 'editSertifikatKelayakan']);
    Route::post('/admin/sertifikasKelayakan/update/{id}', [InformasiBerkalaController::class, 'updateSertifikatKelayakan']);
    Route::get('/admin/sertifikasKelayakan/delete/{id}', [InformasiBerkalaController::class, 'destroySertifikatKelayakan']);

    // hasilLaboratorium
    Route::get('/admin/hasilLaboratorium', [InformasiBerkalaController::class, 'hasilLaboratorium']);
    Route::post('/admin/hasilLaboratorium', [InformasiBerkalaController::class, 'storeHasilLaboratorium']);
    Route::get('/admin/hasilLaboratorium/edit/{id}', [InformasiBerkalaController::class, 'editHasilLaboratorium']);
    Route::post('/admin/hasilLaboratorium/update/{id}', [InformasiBerkalaController::class, 'updateHasilLaboratorium']);
    Route::get('/admin/hasilLaboratorium/delete/{id}', [InformasiBerkalaController::class, 'destroyHasilLaboratorium']);

    // statistik
    Route::get('/admin/statistik', [InformasiBerkalaController::class, 'statistik']);
    Route::post('/admin/statistik', [InformasiBerkalaController::class, 'storeStatistik']);
    Route::get('/admin/statistik/edit/{id}', [InformasiBerkalaController::class, 'editStatistik']);
    Route::post('/admin/statistik/update/{id}', [InformasiBerkalaController::class, 'updateStatistik']);
    Route::get('/admin/statistik/delete/{id}', [InformasiBerkalaController::class, 'destroyStatistik']);

    // produksiPelabuhan
    Route::get('/admin/produksiPelabuhan', [InformasiBerkalaController::class, 'produksiPelabuhan']);
    Route::post('/admin/produksiPelabuhan', [InformasiBerkalaController::class, 'storeProduksiPelabuhan']);
    Route::get('/admin/produksiPelabuhan/edit/{id}', [InformasiBerkalaController::class, 'editProduksiPelabuhan']);
    Route::post('/admin/produksiPelabuhan/update/{id}', [InformasiBerkalaController::class, 'updateProduksiPelabuhan']);
    Route::get('/admin/produksiPelabuhan/delete/{id}', [InformasiBerkalaController::class, 'destroyProduksiPelabuhan']);





    // sop
    Route::get('/admin/sop', [SertaMertaController::class, 'sop']);
    Route::post('/admin/sop', [SertaMertaController::class, 'storeSop']);
    Route::get('/admin/sop/edit/{id}', [SertaMertaController::class, 'editSop']);
    Route::post('/admin/sop/update/{id}', [SertaMertaController::class, 'updateSop']);
    Route::get('/admin/sop/delete/{id}', [SertaMertaController::class, 'destroySop']);

    // tcpi
    Route::get('/admin/tcpi', [SertaMertaController::class, 'tcpi']);
    Route::post('/admin/tcpi', [SertaMertaController::class, 'storeTcpi']);
    Route::get('/admin/tcpi/edit/{id}', [SertaMertaController::class, 'editTcpi']);
    Route::post('/admin/tcpi/update/{id}', [SertaMertaController::class, 'updateTcpi']);
    Route::get('/admin/tcpi/delete/{id}', [SertaMertaController::class, 'destroyTcpi']);

    // fpi
    Route::get('/admin/fpi', [SertaMertaController::class, 'fpi']);
    Route::post('/admin/fpi', [SertaMertaController::class, 'storeFpi']);
    Route::get('/admin/fpi/edit/{id}', [SertaMertaController::class, 'editFpi']);
    Route::post('/admin/fpi/update/{id}', [SertaMertaController::class, 'updateFpi']);
    Route::get('/admin/fpi/delete/{id}', [SertaMertaController::class, 'destroyFpi']);

    // di
    Route::get('/admin/di', [SertaMertaController::class, 'di']);
    Route::post('/admin/di', [SertaMertaController::class, 'storeDi']);
    Route::get('/admin/di/edit/{id}', [SertaMertaController::class, 'editDi']);
    Route::post('/admin/di/update/{id}', [SertaMertaController::class, 'updateDi']);
    Route::get('/admin/di/delete/{id}', [SertaMertaController::class, 'destroyDi']);


    // sss
    Route::get('/admin/sss/', [SssController::class, 'index']);
    Route::post('/admin/sss/', [SssController::class, 'store']);
    Route::get('/admin/sss/edit/{id}', [SssController::class, 'edit']);
    Route::post('/admin/sss/update/{id}', [SssController::class, 'update']);
    Route::get('/admin/sss/delete/{id}', [SssController::class, 'destroy']);
});
