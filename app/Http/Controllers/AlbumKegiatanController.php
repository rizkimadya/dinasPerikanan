<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlbumKegiatan;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AlbumKegiatanController extends Controller
{
    public function index()
    {
        $album = AlbumKegiatan::all();
        return view('Admin.dokumentasi.album.index', compact('album'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar.*' => 'required|image|mimes:jpg,jpeg,png|max:5000', // Note the 'gambar.*' for multiple images
            'nama_kegiatan' => 'required',
        ]);

        // Initialize an array to store the image filenames
        $gambarPaths = [];

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $image) {
                $nama_file = time() . "_" . $image->getClientOriginalName();
                // Simpan file ke direktori storage
                $image->storeAs('public/fileAlbum', $nama_file);
                $gambarPaths[] = 'storage/fileAlbum/' . $nama_file;
            }
        }

        $album = new AlbumKegiatan([
            'gambar' => json_encode($gambarPaths), // Store image paths as JSON
            'nama_kegiatan' => $request->nama_kegiatan,
        ]);

        $album->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/admin/album');
    }



    public function edit($id)
    {
        $album = AlbumKegiatan::where('id', $id)->firstOrFail();
        return view('Admin.dokumentasi.album.edit', compact('album'));
    }

    public function update(Request $request, $id)
    {
        $album = AlbumKegiatan::findOrFail($id);

        // Mengambil data yang di-inputkan
        $data = $request->all();

        // Mengelola gambar
        if ($request->hasFile('gambar')) {
            // Hapus gambar-gambar lama
            $gambarLama = json_decode($album->gambar, true);

            foreach ($gambarLama as $gambar) {
                // Hapus gambar dari direktori storage
                Storage::delete(str_replace('storage/', 'public/', $gambar));
            }

            // Simpan gambar-gambar yang baru
            $gambarPaths = [];

            foreach ($request->file('gambar') as $image) {
                $nama_file = time() . "_" . $image->getClientOriginalName();
                $tujuan_upload = 'public/fileAlbum'; // Sesuaikan dengan direktori storage
                $image->storeAs($tujuan_upload, $nama_file);

                // Simpan path gambar baru
                $gambarPaths[] = 'storage/fileAlbum/' . $nama_file;
            }

            $data['gambar'] = json_encode($gambarPaths);
        }

        $album->update($data);
        Alert::success('Success', 'Berhasil mengupdate data');

        return redirect('/admin/album');
    }

    public function destroy($id)
    {
        $album = AlbumKegiatan::findOrFail($id);

        // Hapus gambar-gambar terkait
        $gambarPaths = json_decode($album->gambar, true);

        foreach ($gambarPaths as $gambar) {
            // Hapus gambar dari direktori storage
            Storage::delete(str_replace('storage/', 'public/', $gambar));
        }

        $album->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/album');
    }
}
