<?php

namespace App\Http\Controllers;

use App\Models\AlbumKegiatan;
use App\Models\Berita;
use App\Models\Pengaduan;
use App\Models\Pengumuman;
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

        return view('User.pengumuman', compact('pengumuman'));
    }

    public function berita()
    {
        $berita = Berita::latest()->get();

        return view('User.berita', compact('berita'));
    }

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

    public function kontak()
    {
        return view('User.kontak');
    }
}
