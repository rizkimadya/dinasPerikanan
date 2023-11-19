<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiBerkala;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class InformasiBerkalaController extends Controller
{
    // rpjmd
    public function rpjmd()
    {
        $rpjmd = InformasiBerkala::where('kategori_informasi_berkala', 'rpjmd')->get();
        return view('Admin.informasiBerkala.rpjmd.index', compact('rpjmd'));
    }

    public function storeRpjmd(Request $request)
    {
        $request->validate([
            'judul_informasi_berkala' => 'required',
            'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
        ]);

        $kategori = "rpjmd";

        if ($request->has('file_informasi_berkala')) {
            $file = $request->file('file_informasi_berkala');
            $nama_file = $request->judul_informasi_berkala . "_" . time() . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/fileInformasiBerkala', $nama_file);
            $informasiBerkala = new InformasiBerkala([
                'kategori_informasi_berkala' => $kategori,
                'judul_informasi_berkala' => $request->judul_informasi_berkala,
                'keterangan_informasi_berkala' => $request->keterangan_informasi_berkala,
                'file_informasi_berkala' => $nama_file,
            ]);
        } else {
            $informasiBerkala = new InformasiBerkala([
                'kategori_informasi_berkala' => $kategori,
                'judul_informasi_berkala' => $request->judul_informasi_berkala,
                'keterangan_informasi_berkala' => $request->keterangan_informasi_berkala,
            ]);
        }

        $informasiBerkala->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/admin/rpjmd');
    }


    public function editRpjmd($id)
    {
        $rpjmd = InformasiBerkala::where('id', $id)->firstOrFail();
        return view('Admin.informasiBerkala.rpjmd.edit', compact('rpjmd'));
    }


    public function updateRpjmd(Request $request, $id)
    {
        $informasiBerkala = InformasiBerkala::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('file_informasi_berkala')) {
            // Hapus file lama
            if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
                Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
            }

            $file = $request->file('file_informasi_berkala');
            $nama_file = $request->judul_informasi_berkala . "_" . time() . $file->getClientOriginalName();
            $tujuan_upload = 'public/fileInformasiBerkala/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['file_informasi_berkala'] = $nama_file;
        } else {
            unset($data['file_informasi_berkala']);
        }

        $informasiBerkala->update($data);
        Alert::success('Success', 'Berhasil mengupdate data');
        return redirect('/admin/rpjmd');
    }

    public function destroyRpjmd($id)
    {
        $informasiBerkala = InformasiBerkala::find($id);

        // Hapus file_informasi_berkala
        if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
            Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
        }

        $informasiBerkala->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/rpjmd');
    }
    // akhir rpjmd


    // renstra
    public function renstra()
    {
        $renstra = InformasiBerkala::where('kategori_informasi_berkala', 'renstra')->get();
        return view('Admin.informasiBerkala.renstra.index', compact('renstra'));
    }

    public function storeRenstra(Request $request)
    {
        $request->validate([
            'judul_informasi_berkala' => 'required',
            'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
        ]);

        $kategori = "renstra";

        if ($request->has('file_informasi_berkala')) {
            $file = $request->file('file_informasi_berkala');
            $nama_file = $request->judul_informasi_berkala . "_" . time() . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/fileInformasiBerkala', $nama_file);
            $informasiBerkala = new InformasiBerkala([
                'kategori_informasi_berkala' => $kategori,
                'judul_informasi_berkala' => $request->judul_informasi_berkala,
                'keterangan_informasi_berkala' => $request->keterangan_informasi_berkala,
                'file_informasi_berkala' => $nama_file,
            ]);
        } else {
            $informasiBerkala = new InformasiBerkala([
                'kategori_informasi_berkala' => $kategori,
                'judul_informasi_berkala' => $request->judul_informasi_berkala,
                'keterangan_informasi_berkala' => $request->keterangan_informasi_berkala,
            ]);
        }

        $informasiBerkala->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/admin/renstra');
    }


    public function editRenstra($id)
    {
        $renstra = InformasiBerkala::where('id', $id)->firstOrFail();
        return view('Admin.informasiBerkala.renstra.edit', compact('renstra'));
    }


    public function updateRenstra(Request $request, $id)
    {
        $informasiBerkala = InformasiBerkala::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('file_informasi_berkala')) {
            // Hapus file lama
            if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
                Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
            }

            $file = $request->file('file_informasi_berkala');
            $nama_file = $request->judul_informasi_berkala . "_" . time() . $file->getClientOriginalName();
            $tujuan_upload = 'public/fileInformasiBerkala/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['file_informasi_berkala'] = $nama_file;
        } else {
            unset($data['file_informasi_berkala']);
        }

        $informasiBerkala->update($data);
        Alert::success('Success', 'Berhasil mengupdate data');
        return redirect('/admin/renstra');
    }

    public function destroyRenstra($id)
    {
        $informasiBerkala = InformasiBerkala::find($id);

        // Hapus file_informasi_berkala
        if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
            Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
        }

        $informasiBerkala->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/renstra');
    }
    // akhir renstra


    // renja
    public function renja()
    {
        $renja = InformasiBerkala::where('kategori_informasi_berkala', 'renja')->get();
        return view('Admin.informasiBerkala.renja.index', compact('renja'));
    }

    public function storeRenja(Request $request)
    {
        $request->validate([
            'judul_informasi_berkala' => 'required',
            'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
        ]);

        $kategori = "renja";

        if ($request->has('file_informasi_berkala')) {
            $file = $request->file('file_informasi_berkala');
            $nama_file = $request->judul_informasi_berkala . "_" . time() . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/fileInformasiBerkala', $nama_file);
            $informasiBerkala = new InformasiBerkala([
                'kategori_informasi_berkala' => $kategori,
                'judul_informasi_berkala' => $request->judul_informasi_berkala,
                'keterangan_informasi_berkala' => $request->keterangan_informasi_berkala,
                'file_informasi_berkala' => $nama_file,
            ]);
        } else {
            $informasiBerkala = new InformasiBerkala([
                'kategori_informasi_berkala' => $kategori,
                'judul_informasi_berkala' => $request->judul_informasi_berkala,
                'keterangan_informasi_berkala' => $request->keterangan_informasi_berkala,
            ]);
        }

        $informasiBerkala->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/admin/renja');
    }


    public function editRenja($id)
    {
        $renja = InformasiBerkala::where('id', $id)->firstOrFail();
        return view('Admin.informasiBerkala.renja.edit', compact('renja'));
    }


    public function updateRenja(Request $request, $id)
    {
        $informasiBerkala = InformasiBerkala::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('file_informasi_berkala')) {
            // Hapus file lama
            if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
                Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
            }

            $file = $request->file('file_informasi_berkala');
            $nama_file = $request->judul_informasi_berkala . "_" . time() . $file->getClientOriginalName();
            $tujuan_upload = 'public/fileInformasiBerkala/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['file_informasi_berkala'] = $nama_file;
        } else {
            unset($data['file_informasi_berkala']);
        }

        $informasiBerkala->update($data);
        Alert::success('Success', 'Berhasil mengupdate data');
        return redirect('/admin/renja');
    }

    public function destroyRenja($id)
    {
        $informasiBerkala = InformasiBerkala::find($id);

        // Hapus file_informasi_berkala
        if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
            Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
        }

        $informasiBerkala->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/renja');
    }
    // akhir renja


    // kua
    public function kua()
    {
        $kua = InformasiBerkala::where('kategori_informasi_berkala', 'kua')->get();
        return view('Admin.informasiBerkala.kua.index', compact('kua'));
    }

    public function storeKua(Request $request)
    {
        $request->validate([
            'judul_informasi_berkala' => 'required',
            'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
        ]);

        $kategori = "kua";

        if ($request->has('file_informasi_berkala')) {
            $file = $request->file('file_informasi_berkala');
            $nama_file = $request->judul_informasi_berkala . "_" . time() . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/fileInformasiBerkala', $nama_file);
            $informasiBerkala = new InformasiBerkala([
                'kategori_informasi_berkala' => $kategori,
                'judul_informasi_berkala' => $request->judul_informasi_berkala,
                'keterangan_informasi_berkala' => $request->keterangan_informasi_berkala,
                'file_informasi_berkala' => $nama_file,
            ]);
        } else {
            $informasiBerkala = new InformasiBerkala([
                'kategori_informasi_berkala' => $kategori,
                'judul_informasi_berkala' => $request->judul_informasi_berkala,
                'keterangan_informasi_berkala' => $request->keterangan_informasi_berkala,
            ]);
        }

        $informasiBerkala->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/admin/kua');
    }


    public function editKua($id)
    {
        $kua = InformasiBerkala::where('id', $id)->firstOrFail();
        return view('Admin.informasiBerkala.kua.edit', compact('kua'));
    }


    public function updateKua(Request $request, $id)
    {
        $informasiBerkala = InformasiBerkala::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('file_informasi_berkala')) {
            // Hapus file lama
            if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
                Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
            }

            $file = $request->file('file_informasi_berkala');
            $nama_file = $request->judul_informasi_berkala . "_" . time() . $file->getClientOriginalName();
            $tujuan_upload = 'public/fileInformasiBerkala/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['file_informasi_berkala'] = $nama_file;
        } else {
            unset($data['file_informasi_berkala']);
        }

        $informasiBerkala->update($data);
        Alert::success('Success', 'Berhasil mengupdate data');
        return redirect('/admin/kua');
    }

    public function destroyKua($id)
    {
        $informasiBerkala = InformasiBerkala::find($id);

        // Hapus file_informasi_berkala
        if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
            Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
        }

        $informasiBerkala->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/kua');
    }
    // akhir kua
}
