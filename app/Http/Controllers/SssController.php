<?php

namespace App\Http\Controllers;

use App\Models\Sss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SssController extends Controller
{
    // sss
    public function index()
    {
        $sss = Sss::all();
        return view('Admin.sss.index', compact('sss'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_sss' => 'required',
            'kategori_sss' => 'required',
            'file_sss' => 'mimes:pdf,jpg,jpeg,png',
        ]);

        if ($request->has('file_sss')) {
            $file = $request->file('file_sss');
            $nama_file = $request->judul_sss . "_" . time() . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/fileInformasiSss', $nama_file);
            $sss = new Sss([
                'kategori_sss' => $request->kategori_sss,
                'judul_sss' => $request->judul_sss,
                'keterangan_sss' => $request->keterangan_sss,
                'file_sss' => $nama_file,
            ]);
        } else {
            $sss = new Sss([
                'kategori_sss' => $request->kategori_sss,
                'judul_sss' => $request->judul_sss,
                'keterangan_sss' => $request->keterangan_sss,
            ]);
        }

        $sss->save();
        // Alert::success('Success', 'Berhasil menambah sss');
        return redirect('/admin/sss');
    }


    public function edit($id)
    {
        $sss = Sss::where('id', $id)->firstOrFail();
        return view('Admin.sss.edit', compact('sss'));
    }


    public function update(Request $request, $id)
    {
        $sss = Sss::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('file_sss')) {
            // Hapus file lama
            if (Storage::exists('public/fileInformasiSss/' . $sss->file_sss)) {
                Storage::delete('public/fileInformasiSss/' . $sss->file_sss);
            }

            $file = $request->file('file_sss');
            $nama_file = $request->judul_sss . "_" . time() . $file->getClientOriginalName();
            $tujuan_upload = 'public/fileInformasiSss/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['file_sss'] = $nama_file;
        } else {
            unset($data['file_sss']);
        }

        $sss->update($data);
        // Alert::success('Success', 'Berhasil mengupdate sss');
        return redirect('/admin/sss');
    }

    public function destroy($id)
    {
        $sss = Sss::find($id);

        // Hapus file_sss
        if (Storage::exists('public/fileInformasiSss/' . $sss->file_sss)) {
            Storage::delete('public/fileInformasiSss/' . $sss->file_sss);
        }

        $sss->delete();
        // Alert::success('Success', 'Berhasil menghapus sss');
        return redirect('/admin/sss');
    }
    // akhir sss
}
