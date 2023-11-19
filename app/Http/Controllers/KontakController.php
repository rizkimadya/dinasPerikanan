<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = Kontak::latest()->get();
        return view('Admin.beranda.kontak.index', compact('kontak'));
    }

    public function store(Request $request)
    {
        $kontak = new Kontak([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ]);

        $kontak->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/kontak');
    }

    public function destroy($id)
    {
        $kontak = Kontak::find($id);

        $kontak->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/kontak');
    }
}
