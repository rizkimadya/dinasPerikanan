<?php

namespace App\Http\Controllers;

use App\Models\SertaMerta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class SertaMertaController extends Controller
{
    // sop
    public function sop()
    {
        $sop = SertaMerta::where('kategori_serta_merta', 'sop')->get();
        return view('Admin.sertaMerta.sop.index', compact('sop'));
    }

    public function storeSop(Request $request)
    {
        $request->validate([
            'judul_serta_merta' => 'required',
            'file_serta_merta' => 'mimes:pdf,jpg,jpeg,png',
        ]);

        $kategori = "sop";

        if ($request->has('file_serta_merta')) {
            $file = $request->file('file_serta_merta');
            $nama_file = $request->judul_serta_merta . "_" . time() . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/fileInformasiSertaMerta', $nama_file);
            $sertaMerta = new SertaMerta([
                'kategori_serta_merta' => $kategori,
                'judul_serta_merta' => $request->judul_serta_merta,
                'keterangan_serta_merta' => $request->keterangan_serta_merta,
                'file_serta_merta' => $nama_file,
            ]);
        } else {
            $sertaMerta = new SertaMerta([
                'kategori_serta_merta' => $kategori,
                'judul_serta_merta' => $request->judul_serta_merta,
                'keterangan_serta_merta' => $request->keterangan_serta_merta,
            ]);
        }

        $sertaMerta->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/admin/sop');
    }


    public function editSop($id)
    {
        $sop = SertaMerta::where('id', $id)->firstOrFail();
        return view('Admin.sertaMerta.sop.edit', compact('sop'));
    }


    public function updateSop(Request $request, $id)
    {
        $sertaMerta = SertaMerta::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('file_serta_merta')) {
            // Hapus file lama
            if (Storage::exists('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta)) {
                Storage::delete('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta);
            }

            $file = $request->file('file_serta_merta');
            $nama_file = $request->judul_serta_merta . "_" . time() . $file->getClientOriginalName();
            $tujuan_upload = 'public/fileInformasiSertaMerta/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['file_serta_merta'] = $nama_file;
        } else {
            unset($data['file_serta_merta']);
        }

        $sertaMerta->update($data);
        Alert::success('Success', 'Berhasil mengupdate data');
        return redirect('/admin/sop');
    }

    public function destroySop($id)
    {
        $sertaMerta = SertaMerta::find($id);

        // Hapus file_serta_merta
        if (Storage::exists('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta)) {
            Storage::delete('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta);
        }

        $sertaMerta->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/sop');
    }
    // akhir sop


    // tcpi
    public function tcpi()
    {
        $tcpi = SertaMerta::where('kategori_serta_merta', 'tcpi')->get();
        return view('Admin.sertaMerta.tcpi.index', compact('tcpi'));
    }

    public function storeTcpi(Request $request)
    {
        $request->validate([
            'judul_serta_merta' => 'required',
            'file_serta_merta' => 'mimes:pdf,jpg,jpeg,png',
        ]);

        $kategori = "tcpi";

        if ($request->has('file_serta_merta')) {
            $file = $request->file('file_serta_merta');
            $nama_file = $request->judul_serta_merta . "_" . time() . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/fileInformasiSertaMerta', $nama_file);
            $sertaMerta = new SertaMerta([
                'kategori_serta_merta' => $kategori,
                'judul_serta_merta' => $request->judul_serta_merta,
                'keterangan_serta_merta' => $request->keterangan_serta_merta,
                'file_serta_merta' => $nama_file,
            ]);
        } else {
            $sertaMerta = new SertaMerta([
                'kategori_serta_merta' => $kategori,
                'judul_serta_merta' => $request->judul_serta_merta,
                'keterangan_serta_merta' => $request->keterangan_serta_merta,
            ]);
        }

        $sertaMerta->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/admin/tcpi');
    }


    public function editTcpi($id)
    {
        $tcpi = SertaMerta::where('id', $id)->firstOrFail();
        return view('Admin.sertaMerta.tcpi.edit', compact('tcpi'));
    }


    public function updateTcpi(Request $request, $id)
    {
        $sertaMerta = SertaMerta::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('file_serta_merta')) {
            // Hapus file lama
            if (Storage::exists('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta)) {
                Storage::delete('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta);
            }

            $file = $request->file('file_serta_merta');
            $nama_file = $request->judul_serta_merta . "_" . time() . $file->getClientOriginalName();
            $tujuan_upload = 'public/fileInformasiSertaMerta/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['file_serta_merta'] = $nama_file;
        } else {
            unset($data['file_serta_merta']);
        }

        $sertaMerta->update($data);
        Alert::success('Success', 'Berhasil mengupdate data');
        return redirect('/admin/tcpi');
    }

    public function destroyTcpi($id)
    {
        $sertaMerta = SertaMerta::find($id);

        // Hapus file_serta_merta
        if (Storage::exists('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta)) {
            Storage::delete('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta);
        }

        $sertaMerta->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/tcpi');
    }
    // akhir tcpi


    // fpi
    public function fpi()
    {
        $fpi = SertaMerta::where('kategori_serta_merta', 'fpi')->get();
        return view('Admin.sertaMerta.fpi.index', compact('fpi'));
    }

    public function storeFpi(Request $request)
    {
        $request->validate([
            'judul_serta_merta' => 'required',
            'file_serta_merta' => 'mimes:pdf,jpg,jpeg,png',
        ]);

        $kategori = "fpi";

        if ($request->has('file_serta_merta')) {
            $file = $request->file('file_serta_merta');
            $nama_file = $request->judul_serta_merta . "_" . time() . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/fileInformasiSertaMerta', $nama_file);
            $sertaMerta = new SertaMerta([
                'kategori_serta_merta' => $kategori,
                'judul_serta_merta' => $request->judul_serta_merta,
                'keterangan_serta_merta' => $request->keterangan_serta_merta,
                'file_serta_merta' => $nama_file,
            ]);
        } else {
            $sertaMerta = new SertaMerta([
                'kategori_serta_merta' => $kategori,
                'judul_serta_merta' => $request->judul_serta_merta,
                'keterangan_serta_merta' => $request->keterangan_serta_merta,
            ]);
        }

        $sertaMerta->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/admin/fpi');
    }


    public function editFpi($id)
    {
        $fpi = SertaMerta::where('id', $id)->firstOrFail();
        return view('Admin.sertaMerta.fpi.edit', compact('fpi'));
    }


    public function updateFpi(Request $request, $id)
    {
        $sertaMerta = SertaMerta::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('file_serta_merta')) {
            // Hapus file lama
            if (Storage::exists('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta)) {
                Storage::delete('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta);
            }

            $file = $request->file('file_serta_merta');
            $nama_file = $request->judul_serta_merta . "_" . time() . $file->getClientOriginalName();
            $tujuan_upload = 'public/fileInformasiSertaMerta/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['file_serta_merta'] = $nama_file;
        } else {
            unset($data['file_serta_merta']);
        }

        $sertaMerta->update($data);
        Alert::success('Success', 'Berhasil mengupdate data');
        return redirect('/admin/fpi');
    }

    public function destroyFpi($id)
    {
        $sertaMerta = SertaMerta::find($id);

        // Hapus file_serta_merta
        if (Storage::exists('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta)) {
            Storage::delete('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta);
        }

        $sertaMerta->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/fpi');
    }
    // akhir fpi



    // di
    public function di()
    {
        $di = SertaMerta::where('kategori_serta_merta', 'di')->get();
        return view('Admin.sertaMerta.di.index', compact('di'));
    }

    public function storeDi(Request $request)
    {
        $request->validate([
            'judul_serta_merta' => 'required',
            'file_serta_merta' => 'mimes:pdf,jpg,jpeg,png',
        ]);

        $kategori = "di";

        if ($request->has('file_serta_merta')) {
            $file = $request->file('file_serta_merta');
            $nama_file = $request->judul_serta_merta . "_" . time() . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/fileInformasiSertaMerta', $nama_file);
            $sertaMerta = new SertaMerta([
                'kategori_serta_merta' => $kategori,
                'judul_serta_merta' => $request->judul_serta_merta,
                'keterangan_serta_merta' => $request->keterangan_serta_merta,
                'file_serta_merta' => $nama_file,
            ]);
        } else {
            $sertaMerta = new SertaMerta([
                'kategori_serta_merta' => $kategori,
                'judul_serta_merta' => $request->judul_serta_merta,
                'keterangan_serta_merta' => $request->keterangan_serta_merta,
            ]);
        }

        $sertaMerta->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/admin/di');
    }


    public function editDi($id)
    {
        $di = SertaMerta::where('id', $id)->firstOrFail();
        return view('Admin.sertaMerta.di.edit', compact('di'));
    }


    public function updateDi(Request $request, $id)
    {
        $sertaMerta = SertaMerta::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('file_serta_merta')) {
            // Hapus file lama
            if (Storage::exists('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta)) {
                Storage::delete('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta);
            }

            $file = $request->file('file_serta_merta');
            $nama_file = $request->judul_serta_merta . "_" . time() . $file->getClientOriginalName();
            $tujuan_upload = 'public/fileInformasiSertaMerta/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['file_serta_merta'] = $nama_file;
        } else {
            unset($data['file_serta_merta']);
        }

        $sertaMerta->update($data);
        Alert::success('Success', 'Berhasil mengupdate data');
        return redirect('/admin/di');
    }

    public function destroyDi($id)
    {
        $sertaMerta = SertaMerta::find($id);

        // Hapus file_serta_merta
        if (Storage::exists('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta)) {
            Storage::delete('public/fileInformasiSertaMerta/' . $sertaMerta->file_serta_merta);
        }

        $sertaMerta->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/di');
    }
    // akhir di
}
