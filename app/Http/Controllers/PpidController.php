<?php

namespace App\Http\Controllers;

use App\Models\Ppid;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            Alert::success('Success', 'Berhasil mengupdate data');
        } else {
            $data['kategori'] = $kategori;
            Ppid::create($data);
            Alert::success('Success', 'Berhasil menambah data');
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
            Alert::success('Success', 'Berhasil mengupdate data');
        } else {
            $data['kategori'] = $kategori;
            Ppid::create($data);
            Alert::success('Success', 'Berhasil menambah data');
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
            Alert::success('Success', 'Berhasil mengupdate data');
        } else {
            $data['kategori'] = $kategori;
            Ppid::create($data);
            Alert::success('Success', 'Berhasil menambah data');
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
            Alert::success('Success', 'Berhasil mengupdate data');
        } else {
            $data['kategori'] = $kategori;
            Ppid::create($data);
            Alert::success('Success', 'Berhasil menambah data');
        }

        return redirect('/admin/maklumat');
    }

    public function profilSingkat()
    {
        $profilSingkat = Ppid::where('kategori', 'profilSingkat')->first();
        return view('Admin.ppid.profilSingkat.index', compact('profilSingkat'));
    }

    public function storeOrUpdateProfilSingkat(Request $request)
    {
        $data = $request->all();
        $kategori = 'profilSingkat';

        $ppid = Ppid::where('kategori', $kategori)->first();

        if ($ppid) {
            $ppid->update($data);
            Alert::success('Success', 'Berhasil mengupdate data');
        } else {
            $data['kategori'] = $kategori;
            Ppid::create($data);
            Alert::success('Success', 'Berhasil menambah data');
        }

        return redirect('/admin/profilSingkat');
    }

    public function strukturOrganisasiPpid()
    {
        $strukturOrganisasiPpid = Ppid::where('kategori', 'strukturOrganisasiPpid')->first();
        return view('Admin.ppid.strukturOrganisasiPpid.index', compact('strukturOrganisasiPpid'));
    }

    public function storeOrUpdateStrukturOrganisasiPpid(Request $request)
    {
        $data = $request->all();
        $kategori = 'strukturOrganisasiPpid';

        $ppid = Ppid::where('kategori', $kategori)->first();

        if ($ppid) {
            $ppid->update($data);
            Alert::success('Success', 'Berhasil mengupdate data');
        } else {
            $data['kategori'] = $kategori;
            Ppid::create($data);
            Alert::success('Success', 'Berhasil menambah data');
        }

        return redirect('/admin/strukturOrganisasiPpid');
    }
}
