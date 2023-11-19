<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('Admin.layanan.pengaduan.index', compact('pengaduan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file_pengaduan' => 'file|mimes:pdf',
        ]);

        if ($request->has('file_pengaduan')) {
            $file = $request->file('file_pengaduan');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/filePengaduan', $nama_file);

            $pengaduan = new Pengaduan([
                'nama_pelapor' => $request->nama_pelapor,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,

                'tgl_kejadian' => $request->tgl_kejadian,
                'lokasi_kejadian' => $request->lokasi_kejadian,
                'deskripsi_kejadian' => $request->deskripsi_kejadian,

                'jenis_keluhan' => $request->jenis_keluhan,
                'detail_keluhan' => $request->detail_keluhan,

                'file_pengaduan' => $nama_file,
            ]);
        } else {
            $pengaduan = new Pengaduan([
                'nama_pelapor' => $request->nama_pelapor,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,

                'tgl_kejadian' => $request->tgl_kejadian,
                'lokasi_kejadian' => $request->lokasi_kejadian,
                'deskripsi_kejadian' => $request->deskripsi_kejadian,

                'jenis_keluhan' => $request->jenis_keluhan,
                'detail_keluhan' => $request->detail_keluhan,
            ]);
        }

        $pengaduan->save();
        Alert::success('Success', 'Berhasil mengirim pengaduan');
        return redirect('/');
    }


    public function edit($id)
    {
        $pengaduan = Pengaduan::where('id', $id)->firstOrFail();
        return view('Admin.layanan.pengaduan.show', compact('pengaduan'));
    }


    public function update(Request $request, $id)
    {
        $pengaduan = Pengaduan::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('file_pengaduan')) {
            // Hapus file_pengaduan lama
            if (Storage::exists('public/filePengaduan/' . $pengaduan->file_pengaduan)) {
                Storage::delete('public/filePengaduan/' . $pengaduan->file_pengaduan);
            }

            $file = $request->file('file_pengaduan');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'public/filePengaduan/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['file_pengaduan'] = $nama_file;
        } else {
            unset($data['file_pengaduan']);
        }

        $pengaduan->update($data);
        Alert::success('Success', 'Berhasil mengupdate data');
        return redirect('/admin/pengaduan');
    }


    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);

        // Hapus file_pengaduan
        if (Storage::exists('public/filePengaduan/' . $pengaduan->file_pengaduan)) {
            Storage::delete('public/filePengaduan/' . $pengaduan->file_pengaduan);
        }

        $pengaduan->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/pengaduan');
    }
}
