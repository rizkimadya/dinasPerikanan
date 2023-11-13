<?php

namespace App\Http\Controllers;

use App\Models\Ppid;
use Illuminate\Http\Request;

class PpidController extends Controller
{
    public function visiMisi()
    {
        $visiMisi = Ppid::where('kategori', 'visiMisi')->first();
        return view('Admin.ppid.visiMisi.index', compact('visiMisi'));
    }

    public function storeOrUpdateVisiMisi(Request $request)
    {
        $data = $request->all();
        $kategori = 'visiMisi';

        $visiMisi = Ppid::where('kategori', $kategori)->first();

        if ($visiMisi) {
            $visiMisi->update($data);
            // Alert::success('Success', 'Berhasil mengupdate visiMisi');
        } else {
            $data['kategori'] = $kategori;
            Ppid::create($data);
            // Alert::success('Success', 'Berhasil menambah visiMisi');
        }

        return redirect('/admin/visiMisi');
    }

    public function maksudTujuan()
    {
        $maksudTujuan = Ppid::where('kategori', 'maksudTujuan')->first();
        return view('Admin.ppid.maksudTujuan.index', compact('maksudTujuan'));
    }

    public function storeOrUpdateMaksudTujuan(Request $request)
    {
        $data = $request->all();
        $kategori = 'maksudTujuan';

        $ppid = Ppid::where('kategori', $kategori)->first();

        if ($ppid) {
            $ppid->update($data);
            // Alert::success('Success', 'Berhasil mengupdate ppid');
        } else {
            $data['kategori'] = $kategori;
            Ppid::create($data);
            // Alert::success('Success', 'Berhasil menambah ppid');
        }

        return redirect('/admin/maksudTujuan');
    }

    public function tugasFungsi()
    {
        $tugasFungsiPpid = Ppid::where('kategori', 'tugasFungsi')->first();
        return view('Admin.ppid.tugasFungsi.index', compact('tugasFungsiPpid'));
    }

    public function storeOrUpdateTugasFungsi(Request $request)
    {
        $data = $request->all();
        $kategori = 'tugasFungsi';

        $ppid = Ppid::where('kategori', $kategori)->first();

        if ($ppid) {
            $ppid->update($data);
            // Alert::success('Success', 'Berhasil mengupdate ppid');
        } else {
            $data['kategori'] = $kategori;
            Ppid::create($data);
            // Alert::success('Success', 'Berhasil menambah ppid');
        }

        return redirect('/admin/tugasFungsiPpid');
    }

    public function maklumat()
    {
        $maklumat = Ppid::where('kategori', 'maklumat')->first();
        return view('Admin.ppid.maklumat.index', compact('maklumat'));
    }

    public function storeOrUpdateMaklumat(Request $request)
    {
        $data = $request->all();
        $kategori = 'maklumat';

        $ppid = Ppid::where('kategori', $kategori)->first();

        if ($ppid) {
            $ppid->update($data);
            // Alert::success('Success', 'Berhasil mengupdate ppid');
        } else {
            $data['kategori'] = $kategori;
            Ppid::create($data);
            // Alert::success('Success', 'Berhasil menambah ppid');
        }

        return redirect('/admin/maklumat');
    }

    public function hakKewajiban()
    {
        $hakKewajiban = Ppid::where('kategori', 'hakKewajiban')->first();
        return view('Admin.ppid.hakKewajiban.index', compact('hakKewajiban'));
    }

    public function storeOrUpdateHakKewajiban(Request $request)
    {
        $data = $request->all();
        $kategori = 'hakKewajiban';

        $ppid = Ppid::where('kategori', $kategori)->first();

        if ($ppid) {
            $ppid->update($data);
            // Alert::success('Success', 'Berhasil mengupdate ppid');
        } else {
            $data['kategori'] = $kategori;
            Ppid::create($data);
            // Alert::success('Success', 'Berhasil menambah ppid');
        }

        return redirect('/admin/hakKewajiban');
    }

    public function tentang()
    {
        $tentang = Ppid::where('kategori', 'tentang')->first();
        return view('Admin.ppid.tentang.index', compact('tentang'));
    }

    public function storeOrUpdaTetentang(Request $request)
    {
        $data = $request->all();
        $kategori = 'tentang';

        $ppid = Ppid::where('kategori', $kategori)->first();

        if ($ppid) {
            $ppid->update($data);
            // Alert::success('Success', 'Berhasil mengupdate ppid');
        } else {
            $data['kategori'] = $kategori;
            Ppid::create($data);
            // Alert::success('Success', 'Berhasil menambah ppid');
        }

        return redirect('/admin/tentang');
    }
}
