<?php

namespace App\Http\Controllers;

use App\Models\AlbumKegiatan;
use App\Models\Berita;
use App\Models\Pejabat;
use App\Models\Pengaduan;
use App\Models\Pengumuman;
use App\Models\Ppid;
use App\Models\Profil;
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

    // tentang kami
    public function tentangKami()
    {
        $tentangKami = Profil::where('kategori', 'tentangKami')->first();

        return  view('User.profil.tentangKami', compact('tentangKami'));
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

    // hakKewajiban
    public function hakKewajiban()
    {
        $hakKewajiban = Ppid::where('kategori', 'hakKewajiban')->first();

        return  view('User.ppid.hakKewajiban', compact('hakKewajiban'));
    }

    // tentang
    public function tentang()
    {
        $tentang = Ppid::where('kategori', 'tentang')->first();

        return  view('User.ppid.tentang', compact('tentang'));
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

    // informasi sedia setiap saat
    public function informasiSss()
    {
        $sss = Sss::latest()->get();

        return view('User.informasi.sss.sss', compact('sss'));
    }
    public function detailSss($id)
    {
        $sss = Sss::where('id', $id)->firstOrFail();

        $sssLain = Berita::where('id', '!=', $id)->latest()->get();
        return view('User.informasi.sss.detail', compact('sss', 'sssLain'));
    }

    public function kontak()
    {
        return view('User.kontak');
    }
}
