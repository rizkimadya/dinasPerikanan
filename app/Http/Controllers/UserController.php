<?php

namespace App\Http\Controllers;

use App\Models\AlbumKegiatan;
use App\Models\Berita;
use App\Models\InformasiBerkala;
use App\Models\Pejabat;
use App\Models\Pengaduan;
use App\Models\Pengumuman;
use App\Models\Ppid;
use App\Models\Profil;
use App\Models\SertaMerta;
use App\Models\Sss;
use App\Models\Survei;
use App\Models\VideoKegiatan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function beranda()
    {
        $pengumuman = Pengumuman::latest()->take(3)->get();
        $berita = Berita::latest()->take(4)->get();

        $jumpengumuman = Pengumuman::count();
        $jumsurvei = Survei::count();
        $jumberita = Berita::count();
        $jumpengaduan = Pengaduan::count();

        return view('User.beranda', compact('pengumuman', 'berita', 'jumpengumuman', 'jumsurvei', 'jumpengaduan', 'jumberita'));
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::latest()->get();

        return view('User.pengumuman.pengumuman', compact('pengumuman'));
    }

    public function detailPengumuman($id)
    {
        $pengumuman = Pengumuman::where('id', $id)->firstOrFail();

        $pengumumanLain = Pengumuman::where('id', '!=', $id)->latest()->get();
        return view('User.pengumuman.detail', compact('pengumuman', 'pengumumanLain'));
    }

    public function berita()
    {
        $berita = Berita::latest()->get();

        return view('User.berita.berita', compact('berita'));
    }

    public function detailBerita($id)
    {
        $berita = Berita::where('id', $id)->firstOrFail();

        $beritaLainnya = Berita::where('id', '!=', $id)->latest()->get();
        return view('User.berita.detail', compact('berita', 'beritaLainnya'));
    }

    //profil pejabat
    public function profilPejabat()
    {
        $pejabat = Pejabat::latest()->get();

        return view('User.profil.profilPejabat', compact('pejabat'));
    }

    // profil dinas
    public function profilDinas()
    {
        $profil = Profil::where('kategori', 'profilKami')->first();

        return  view('User.profil.profilDinas', compact('profil'));
    }

    // maksud & tujuan
    public function maksudTujuan()
    {
        $maksudTujuan = Profil::where('kategori', 'maksudTujuan')->first();

        return  view('User.profil.maksudTujuan', compact('maksudTujuan'));
    }

    // tugas & fungsi
    public function tugasFungsi()
    {
        $tugasFungsi = Profil::where('kategori', 'tugasFungsi')->first();

        return  view('User.profil.tugasFungsi', compact('tugasFungsi'));
    }

    // maklumat pelayanan
    public function maklumatPelayanan()
    {
        $maklumatPelayanan = Profil::where('kategori', 'maklumatPelayanan')->first();

        return  view('User.profil.maklumatPelayanan', compact('maklumatPelayanan'));
    }

    // visi misi
    public function profilVisiMisi()
    {
        $profilVisiMisi = Profil::where('kategori', 'profilVisiMisi')->first();

        return  view('User.profil.profilVisiMisi', compact('profilVisiMisi'));
    }

    // struktur organisasi
    public function strukturOrganisasi()
    {
        $strukturOrganisasi = Profil::where('kategori', 'strukturOrganisasi')->first();

        return  view('User.profil.strukturOrganisasi', compact('strukturOrganisasi'));
    }

    // visi misi
    public function visiMisi()
    {
        $visiMisi = Ppid::where('kategori', 'visiMisi')->first();

        return  view('User.ppid.visiMisi', compact('visiMisi'));
    }

    // maksud tujuan ppid
    public function maksudTujuanPpid()
    {
        $maksudTujuan = Ppid::where('kategori', 'maksudTujuan')->first();

        return  view('User.ppid.maksudTujuan', compact('maksudTujuan'));
    }

    // tugas & fungsi ppid
    public function tugasFungsiPpid()
    {
        $tugasFungsi = Ppid::where('kategori', 'tugasFungsi')->first();

        return  view('User.ppid.tugasFungsi', compact('tugasFungsi'));
    }

    // maklumat
    public function maklumat()
    {
        $maklumat = Ppid::where('kategori', 'maklumat')->first();

        return  view('User.ppid.maklumat', compact('maklumat'));
    }

    // profilSingkat
    public function profilSingkat()
    {
        $profilSingkat = Ppid::where('kategori', 'profilSingkat')->first();

        return  view('User.ppid.profilSingkat', compact('profilSingkat'));
    }

    // strukturOrganisasiPpid
    public function strukturOrganisasiPpid()
    {
        $strukturOrganisasiPpid = Ppid::where('kategori', 'strukturOrganisasiPpid')->first();

        return  view('User.ppid.strukturOrganisasiPpid', compact('strukturOrganisasiPpid'));
    }


    // dokumentasi

    public function album()
    {
        $album = AlbumKegiatan::latest()->get();

        return view('User.album', compact('album'));
    }

    public function video()
    {
        $video = VideoKegiatan::latest()->get();

        return view('User.video', compact('video'));
    }

    // informasi berkala
    public function rpjmd()
    {
        $rpjmd = InformasiBerkala::where('kategori_informasi_berkala', 'rpjmd')->get();
        return view('User.informasi.berkala.rpjmd.index', compact('rpjmd'));
    }
    public function detailRpjmd($id)
    {
        $rpjmd = InformasiBerkala::where('id', $id)->firstOrFail();

        $rpjmdLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'rpjmd')->latest()->get();

        return view('User.informasi.berkala.rpjmd.detail', compact('rpjmd', 'rpjmdLain'));
    }

    public function renstra()
    {
        $renstra = InformasiBerkala::where('kategori_informasi_berkala', 'renstra')->get();
        return view('User.informasi.berkala.renstra.index', compact('renstra'));
    }
    public function detailRenstra($id)
    {
        $renstra = InformasiBerkala::where('id', $id)->firstOrFail();

        $renstraLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'renstra')->latest()->get();

        return view('User.informasi.berkala.renstra.detail', compact('renstra', 'renstraLain'));
    }

    public function renja()
    {
        $renja = InformasiBerkala::where('kategori_informasi_berkala', 'renja')->get();
        return view('User.informasi.berkala.renja.index', compact('renja'));
    }
    public function detailRenja($id)
    {
        $renja = InformasiBerkala::where('id', $id)->firstOrFail();

        $renjaLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'renja')->latest()->get();

        return view('User.informasi.berkala.renja.detail', compact('renja', 'renjaLain'));
    }

    public function kua()
    {
        $kua = InformasiBerkala::where('kategori_informasi_berkala', 'kua')->get();
        return view('User.informasi.berkala.kua.index', compact('kua'));
    }
    public function detailKua($id)
    {
        $kua = InformasiBerkala::where('id', $id)->firstOrFail();

        $kuaLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'kua')->latest()->get();

        return view('User.informasi.berkala.kua.detail', compact('kua', 'kuaLain'));
    }

    public function perjanjianKinerja()
    {
        $perjanjianKinerja = InformasiBerkala::where('kategori_informasi_berkala', 'perjanjianKinerja')->get();
        return view('User.informasi.berkala.perjanjianKinerja.index', compact('perjanjianKinerja'));
    }
    public function detailPerjanjianKinerja($id)
    {
        $perjanjianKinerja = InformasiBerkala::where('id', $id)->firstOrFail();

        $perjanjianKinerjaLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'perjanjianKinerja')->latest()->get();

        return view('User.informasi.berkala.perjanjianKinerja.detail', compact('perjanjianKinerja', 'perjanjianKinerjaLain'));
    }

    public function rencanaAksi()
    {
        $rencanaAksi = InformasiBerkala::where('kategori_informasi_berkala', 'rencanaAksi')->get();
        return view('User.informasi.berkala.rencanaAksi.index', compact('rencanaAksi'));
    }
    public function detailRencanaAksi($id)
    {
        $rencanaAksi = InformasiBerkala::where('id', $id)->firstOrFail();

        $rencanaAksiLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'rencanaAksi')->latest()->get();

        return view('User.informasi.berkala.rencanaAksi.detail', compact('rencanaAksi', 'rencanaAksiLain'));
    }

    public function iku()
    {
        $iku = InformasiBerkala::where('kategori_informasi_berkala', 'iku')->get();
        return view('User.informasi.berkala.iku.index', compact('iku'));
    }
    public function detailIku($id)
    {
        $iku = InformasiBerkala::where('id', $id)->firstOrFail();

        $ikuLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'iku')->latest()->get();

        return view('User.informasi.berkala.iku.detail', compact('iku', 'ikuLain'));
    }

    public function ringkasan()
    {
        $ringkasan = InformasiBerkala::where('kategori_informasi_berkala', 'ringkasan')->get();
        return view('User.informasi.berkala.ringkasan.index', compact('ringkasan'));
    }
    public function detailRingkasan($id)
    {
        $ringkasan = InformasiBerkala::where('id', $id)->firstOrFail();

        $ringkasanLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'ringkasan')->latest()->get();

        return view('User.informasi.berkala.ringkasan.detail', compact('ringkasan', 'ringkasanLain'));
    }

    public function ppas()
    {
        $ppas = InformasiBerkala::where('kategori_informasi_berkala', 'ppas')->get();
        return view('User.informasi.berkala.ppas.index', compact('ppas'));
    }
    public function detailPpas($id)
    {
        $ppas = InformasiBerkala::where('id', $id)->firstOrFail();

        $ppasLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'ppas')->latest()->get();

        return view('User.informasi.berkala.ppas.detail', compact('ppas', 'ppasLain'));
    }

    public function laporan()
    {
        $laporan = InformasiBerkala::where('kategori_informasi_berkala', 'laporan')->get();
        return view('User.informasi.berkala.laporan.index', compact('laporan'));
    }
    public function detailLaporan($id)
    {
        $laporan = InformasiBerkala::where('id', $id)->firstOrFail();

        $laporanLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'laporan')->latest()->get();

        return view('User.informasi.berkala.laporan.detail', compact('laporan', 'laporanLain'));
    }

    public function rekapKelayakan()
    {
        $rekapKelayakan = InformasiBerkala::where('kategori_informasi_berkala', 'rekapKelayakan')->get();
        return view('User.informasi.berkala.rekapKelayakan.index', compact('rekapKelayakan'));
    }
    public function detailRekapanKelayakan($id)
    {
        $rekapKelayakan = InformasiBerkala::where('id', $id)->firstOrFail();

        $rekapanKelayakanLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'rekapKelayakan')->latest()->get();

        return view('User.informasi.berkala.rekapKelayakan.detail', compact('rekapKelayakan', 'rekapanKelayakanLain'));
    }

    public function sertifikatKelayakan()
    {
        $sertifikatKelayakan = InformasiBerkala::where('kategori_informasi_berkala', 'sertifikatKelayakan')->get();
        return view('User.informasi.berkala.sertifikatKelayakan.index', compact('sertifikatKelayakan'));
    }
    public function detailSertifikatKelayakan($id)
    {
        $sertifikatKelayakan = InformasiBerkala::where('id', $id)->firstOrFail();

        $sertifikatKelayakanLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'sertifikatKelayakan')->latest()->get();

        return view('User.informasi.berkala.sertifikatKelayakan.detail', compact('sertifikatKelayakan', 'sertifikatKelayakanLain'));
    }

    public function hasilLaboratorium()
    {
        $hasilLaboratorium = InformasiBerkala::where('kategori_informasi_berkala', 'hasilLaboratorium')->get();
        return view('User.informasi.berkala.hasilLaboratorium.index', compact('hasilLaboratorium'));
    }
    public function detailHasilLaboratorium($id)
    {
        $hasilLaboratorium = InformasiBerkala::where('id', $id)->firstOrFail();

        $hasilLaboratoriumLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'hasilLaboratorium')->latest()->get();

        return view('User.informasi.berkala.hasilLaboratorium.detail', compact('hasilLaboratorium', 'hasilLaboratoriumLain'));
    }

    public function statistik()
    {
        $statistik = InformasiBerkala::where('kategori_informasi_berkala', 'statistik')->get();
        return view('User.informasi.berkala.statistik.index', compact('statistik'));
    }
    public function detailStatistik($id)
    {
        $statistik = InformasiBerkala::where('id', $id)->firstOrFail();

        $statistikLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'statistik')->latest()->get();

        return view('User.informasi.berkala.statistik.detail', compact('statistik', 'statistikLain'));
    }

    public function produksiPelabuhan()
    {
        $produksiPelabuhan = InformasiBerkala::where('kategori_informasi_berkala', 'produksiPelabuhan')->get();
        return view('User.informasi.berkala.produksiPelabuhan.index', compact('produksiPelabuhan'));
    }
    public function detailProduksiPelabuhan($id)
    {
        $produksiPelabuhan = InformasiBerkala::where('id', $id)->firstOrFail();

        $produksiPelabuhanLain = InformasiBerkala::where('id', '!=', $id)->where('kategori_informasi_berkala', 'produksiPelabuhan')->latest()->get();

        return view('User.informasi.berkala.produksiPelabuhan.detail', compact('produksiPelabuhan', 'produksiPelabuhanLain'));
    }


    // informasi serta merta
    public function sop()
    {
        $sop = SertaMerta::where('kategori_serta_merta', 'sop')->get();
        return view('User.informasi.sertaMerta.sop.index', compact('sop'));
    }
    public function detailSop($id)
    {
        $sop = SertaMerta::where('id', $id)->firstOrFail();

        $sopLain = SertaMerta::where('id', '!=', $id)->where('kategori_serta_merta', 'sop')->latest()->get();

        return view('User.informasi.sertaMerta.sop.detail', compact('sop', 'sopLain'));
    }

    public function tcpi()
    {
        $tcpi = SertaMerta::where('kategori_serta_merta', 'tcpi')->get();
        return view('User.informasi.sertaMerta.tcpi.index', compact('tcpi'));
    }
    public function detailTcpi($id)
    {
        $tcpi = SertaMerta::where('id', $id)->firstOrFail();

        $tcpiLain = SertaMerta::where('id', '!=', $id)->where('kategori_serta_merta', 'tcpi')->latest()->get();

        return view('User.informasi.sertaMerta.tcpi.detail', compact('tcpi', 'tcpiLain'));
    }

    public function fpi()
    {
        $fpi = SertaMerta::where('kategori_serta_merta', 'fpi')->get();
        return view('User.informasi.sertaMerta.fpi.index', compact('fpi'));
    }
    public function detailFpi($id)
    {
        $fpi = SertaMerta::where('id', $id)->firstOrFail();

        $fpiLain = SertaMerta::where('id', '!=', $id)->where('kategori_serta_merta', 'fpi')->latest()->get();

        return view('User.informasi.sertaMerta.fpi.detail', compact('fpi', 'fpiLain'));
    }

    public function di()
    {
        $di = SertaMerta::where('kategori_serta_merta', 'di')->get();
        return view('User.informasi.sertaMerta.di.index', compact('di'));
    }
    public function detailDi($id)
    {
        $di = SertaMerta::where('id', $id)->firstOrFail();

        $diLain = SertaMerta::where('id', '!=', $id)->where('kategori_serta_merta', 'di')->latest()->get();

        return view('User.informasi.sertaMerta.di.detail', compact('di', 'diLain'));
    }

    // informasi sedia setiap saat
    public function informasiSss()
    {
        $sss = Sss::latest()->get();

        return view('User.informasi.sss.sss', compact('sss'));
    }
    public function detailSss($id)
    {
        $sss = Sss::where('id', $id)->firstOrFail();

        $sssLain = Sss::where('id', '!=', $id)->latest()->get();
        return view('User.informasi.sss.detail', compact('sss', 'sssLain'));
    }

    public function kontak()
    {
        return view('User.kontak');
    }
}
