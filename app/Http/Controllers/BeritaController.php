<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('Admin.beranda.berita.index', compact('berita'));
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();

            $fileName = $fileName . '_' . time() . '.' . $extension;

            // Simpan file ke direktori storage/app/public/fileCkeditor
            $request->file('upload')->storeAs('public/fileCkeditor', $fileName);

            $url = asset('storage/fileCkeditor/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }


    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:5000',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($request->has('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/fileBerita', $nama_file);

            $berita = new Berita([
                'gambar' => $nama_file,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
        }

        $berita->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/admin/berita');
    }


    public function edit($id)
    {
        $berita = Berita::where('id', $id)->firstOrFail();
        return view('Admin.beranda.berita.edit', compact('berita'));
    }


    public function update(Request $request, $id)
    {
        $berita = Berita::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('gambar')) {
            // Hapus gambar lama
            if (Storage::exists('public/fileBerita/' . $berita->gambar)) {
                Storage::delete('public/fileBerita/' . $berita->gambar);
            }

            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'public/fileBerita/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['gambar'] = $nama_file;
        } else {
            unset($data['gambar']);
        }

        $berita->update($data);
        Alert::success('Success', 'Berhasil mengupdate data');
        return redirect('/admin/berita');
    }


    public function destroy($id)
    {
        $berita = Berita::find($id);

        // Hapus gambar
        if (Storage::exists('public/fileBerita/' . $berita->gambar)) {
            Storage::delete('public/fileBerita/' . $berita->gambar);
        }

        $berita->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/berita');
    }
}
