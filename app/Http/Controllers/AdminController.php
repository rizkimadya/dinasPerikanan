<?php

namespace App\Http\Controllers;

use App\Models\AlbumKegiatan;
use App\Models\Bantuan;
use App\Models\Berita;
use App\Models\Blog;
use App\Models\Komentar;
use App\Models\Pengaduan;
use App\Models\Pengumuman;
use App\Models\Produk;
use App\Models\Survei;
use App\Models\Testimoni;
use App\Models\VideoKegiatan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $berita = Berita::count();
        $album = AlbumKegiatan::count();
        $video = VideoKegiatan::count();
        $pengumuman = Pengumuman::count();
        $pengaduan = Pengaduan::count();
        $survei = Survei::count();

        return view('Admin.dashboard.index', compact('berita', 'album', 'video', 'pengumuman', 'pengaduan', 'survei'));
    }
}
