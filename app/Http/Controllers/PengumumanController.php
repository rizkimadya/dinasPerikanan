<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('Admin.pengumuman.index', compact('pengumuman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf',
            'judul_pengumuman' => 'required',
            'keterangan' => 'required',
        ]);

        if ($request->has('file')) {
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/filePengumuman', $nama_file);

            $pengumuman = new Pengumuman([
                'file' => $nama_file,
                'judul_pengumuman' => $request->judul_pengumuman,
                'keterangan' => $request->keterangan,
            ]);
        }

        $pengumuman->save();
        // Alert::success('Success', 'Berhasil menambah pengumuman');
        return redirect('/admin/pengumuman');
    }


    public function edit($id)
    {
        $pengumuman = Pengumuman::where('id', $id)->firstOrFail();
        return view('Admin.pengumuman.edit', compact('pengumuman'));
    }


    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('file')) {
            // Hapus file lama
            if (Storage::exists('public/filePengumuman/' . $pengumuman->file)) {
                Storage::delete('public/filePengumuman/' . $pengumuman->file);
            }

            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'public/filePengumuman/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['file'] = $nama_file;
        } else {
            unset($data['file']);
        }

        $pengumuman->update($data);
        // Alert::success('Success', 'Berhasil mengupdate pengumuman');
        return redirect('/admin/pengumuman');
    }


    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);

        // Hapus file
        if (Storage::exists('public/filePengumuman/' . $pengumuman->file)) {
            Storage::delete('public/filePengumuman/' . $pengumuman->file);
        }

        $pengumuman->delete();
        // Alert::success('Success', 'Berhasil menghapus pengumuman');
        return redirect('/admin/pengumuman');
    }
}
