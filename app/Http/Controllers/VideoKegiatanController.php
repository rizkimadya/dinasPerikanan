<?php

namespace App\Http\Controllers;

use App\Models\VideoKegiatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VideoKegiatanController extends Controller
{

    public function index()
    {
        $video = VideoKegiatan::all();
        return view('Admin.dokumentasi.video.index', compact('video'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'link_video' => 'required',
            'nama_kegiatan' => 'required',
        ]);


        $video = new VideoKegiatan([
            'link_video' => $request->link_video,
            'nama_kegiatan' => $request->nama_kegiatan,
        ]);

        $video->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/admin/video');
    }



    public function edit($id)
    {
        $video = VideoKegiatan::where('id', $id)->firstOrFail();
        return view('Admin.dokumentasi.video.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $video = VideoKegiatan::findOrFail($id);

        // Mengambil data yang di-inputkan
        $data = $request->all();

        $video->update($data);

        Alert::success('Success', 'Berhasil mengupdate data');
        return redirect('/admin/video');
    }

    public function destroy($id)
    {
        $video = VideoKegiatan::findOrFail($id);

        $video->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/video');
    }
}
