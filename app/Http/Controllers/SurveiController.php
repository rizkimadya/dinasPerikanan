<?php

namespace App\Http\Controllers;

use App\Models\Survei;
use Illuminate\Http\Request;

class SurveiController extends Controller
{
    public function index()
    {
        $survei = Survei::all();
        return view('Admin.layanan.surveiKepuasan.index', compact('survei'));
    }

    public function store(Request $request)
    {
        $survei = new Survei([
            'nama_responden' => $request->nama_responden,
            'no_telp' => $request->no_telp,
            'penilaian_kepuasan' => $request->penilaian_kepuasan,
            'keterangan' => $request->keterangan,
        ]);

        $survei->save();
        // Alert::success('Success', 'Berhasil menambah survei');
        return redirect('/');
    }

    public function edit($id)
    {
        $survei = Survei::where('id', $id)->firstOrFail();
        return view('Admin.layanan.surveiKepuasan.show', compact('survei'));
    }

    public function update(Request $request, $id)
    {
        $survei = Survei::findOrFail($id);

        // Mengambil data yang di-inputkan
        $data = $request->all();

        $survei->update($data);

        return redirect('/admin/survei');
    }

    public function destroy($id)
    {
        $survei = Survei::findOrFail($id);

        $survei->delete();
        return redirect('/admin/survei');
    }
}
