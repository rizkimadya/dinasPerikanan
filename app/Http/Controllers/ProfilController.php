<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profilKami()
    {
        $profilKami = Profil::where('kategori', 'profilKami')->first();
        return view('Admin.profil.profilKami.index', compact('profilKami'));
    }

    public function storeOrUpdateProfilKami(Request $request)
    {
        $data = $request->all();
        $kategori = 'profilKami';

        $profilKami = Profil::where('kategori', $kategori)->first();

        if ($profilKami) {
            $profilKami->update($data);
            // Alert::success('Success', 'Berhasil mengupdate profilKami');
        } else {
            $data['kategori'] = $kategori;
            Profil::create($data);
            // Alert::success('Success', 'Berhasil menambah profilKami');
        }

        return redirect('/admin/profilKami');
    }

    public function maksudTujuan()
    {
        $maksudTujuan = Profil::where('kategori', 'maksudTujuan')->first();
        return view('Admin.profil.maksudTujuan.index', compact('maksudTujuan'));
    }

    public function storeOrUpdateMaksudTujuan(Request $request)
    {
        $data = $request->all();
        $kategori = 'maksudTujuan';

        $profilKami = Profil::where('kategori', $kategori)->first();

        if ($profilKami) {
            $profilKami->update($data);
            // Alert::success('Success', 'Berhasil mengupdate profilKami');
        } else {
            $data['kategori'] = $kategori;
            Profil::create($data);
            // Alert::success('Success', 'Berhasil menambah profilKami');
        }

        return redirect('/admin/maksudTujuan');
    }

    public function tugasFungsi()
    {
        $tugasFungsi = Profil::where('kategori', 'tugasFungsi')->first();
        return view('Admin.profil.tugasFungsi.index', compact('tugasFungsi'));
    }

    public function storeOrUpdateTugasFungsi(Request $request)
    {
        $data = $request->all();
        $kategori = 'tugasFungsi';

        $profilKami = Profil::where('kategori', $kategori)->first();

        if ($profilKami) {
            $profilKami->update($data);
            // Alert::success('Success', 'Berhasil mengupdate profilKami');
        } else {
            $data['kategori'] = $kategori;
            Profil::create($data);
            // Alert::success('Success', 'Berhasil menambah profilKami');
        }

        return redirect('/admin/tugasFungsi');
    }

    public function maklumatPelayanan()
    {
        $maklumatPelayanan = Profil::where('kategori', 'maklumatPelayanan')->first();
        return view('Admin.profil.maklumatPelayanan.index', compact('maklumatPelayanan'));
    }

    public function storeOrUpdateMaklumatPelayanan(Request $request)
    {
        $data = $request->all();
        $kategori = 'maklumatPelayanan';

        $profilKami = Profil::where('kategori', $kategori)->first();

        if ($profilKami) {
            $profilKami->update($data);
            // Alert::success('Success', 'Berhasil mengupdate profilKami');
        } else {
            $data['kategori'] = $kategori;
            Profil::create($data);
            // Alert::success('Success', 'Berhasil menambah profilKami');
        }

        return redirect('/admin/maklumatPelayanan');
    }

    public function tentangKami()
    {
        $tentangKami = Profil::where('kategori', 'tentangKami')->first();
        return view('Admin.profil.tentangKami.index', compact('tentangKami'));
    }

    public function storeOrUpdaTetentangKami(Request $request)
    {
        $data = $request->all();
        $kategori = 'tentangKami';

        $profilKami = Profil::where('kategori', $kategori)->first();

        if ($profilKami) {
            $profilKami->update($data);
            // Alert::success('Success', 'Berhasil mengupdate profilKami');
        } else {
            $data['kategori'] = $kategori;
            Profil::create($data);
            // Alert::success('Success', 'Berhasil menambah profilKami');
        }

        return redirect('/admin/tentangKami');
    }
}
