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



     // perjanjianKinerja
     public function perjanjianKinerja()
     {
         $perjanjianKinerja = InformasiBerkala::where('kategori_informasi_berkala', 'perjanjianKinerja')->get();
         return view('Admin.informasiBerkala.perjanjianKinerja.index', compact('perjanjianKinerja'));
     }

     public function storePerjanjianKinerja(Request $request)
     {
         $request->validate([
             'judul_informasi_berkala' => 'required',
             'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
         ]);

         $kategori = "perjanjianKinerja";

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
         return redirect('/admin/perjanjianKinerja');
     }


     public function editPerjanjianKinerja($id)
     {
         $perjanjianKinerja = InformasiBerkala::where('id', $id)->firstOrFail();
         return view('Admin.informasiBerkala.perjanjianKinerja.edit', compact('perjanjianKinerja'));
     }


     public function updatePerjanjianKinerja(Request $request, $id)
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
         return redirect('/admin/perjanjianKinerja');
     }

     public function destroyPerjanjianKinerja($id)
     {
         $informasiBerkala = InformasiBerkala::find($id);

         // Hapus file_informasi_berkala
         if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
             Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
         }

         $informasiBerkala->delete();
         Alert::success('Success', 'Berhasil menghapus data');
         return redirect('/admin/perjanjianKinerja');
     }
     // akhir perjanjianKinerja


     // rencanaAksi
     public function rencanaAksi()
     {
         $rencanaAksi = InformasiBerkala::where('kategori_informasi_berkala', 'rencanaAksi')->get();
         return view('Admin.informasiBerkala.rencanaAksi.index', compact('rencanaAksi'));
     }

     public function storeRencanaAksi(Request $request)
     {
         $request->validate([
             'judul_informasi_berkala' => 'required',
             'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
         ]);

         $kategori = "rencanaAksi";

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
         return redirect('/admin/rencanaAksi');
     }


     public function editRencanaAksi($id)
     {
         $rencanaAksi = InformasiBerkala::where('id', $id)->firstOrFail();
         return view('Admin.informasiBerkala.rencanaAksi.edit', compact('rencanaAksi'));
     }


     public function updateRencanaAksi(Request $request, $id)
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
         return redirect('/admin/rencanaAksi');
     }

     public function destroyRencanaAksi($id)
     {
         $informasiBerkala = InformasiBerkala::find($id);

         // Hapus file_informasi_berkala
         if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
             Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
         }

         $informasiBerkala->delete();
         Alert::success('Success', 'Berhasil menghapus data');
         return redirect('/admin/rencanaAksi');
     }
     // akhir rencanaAksi



     // iku
     public function iku()
     {
         $iku = InformasiBerkala::where('kategori_informasi_berkala', 'iku')->get();
         return view('Admin.informasiBerkala.iku.index', compact('iku'));
     }

     public function storeIku(Request $request)
     {
         $request->validate([
             'judul_informasi_berkala' => 'required',
             'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
         ]);

         $kategori = "iku";

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
         return redirect('/admin/iku');
     }


     public function editIku($id)
     {
         $iku = InformasiBerkala::where('id', $id)->firstOrFail();
         return view('Admin.informasiBerkala.iku.edit', compact('iku'));
     }


     public function updateIku(Request $request, $id)
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
         return redirect('/admin/iku');
     }

     public function destroyIku($id)
     {
         $informasiBerkala = InformasiBerkala::find($id);

         // Hapus file_informasi_berkala
         if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
             Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
         }

         $informasiBerkala->delete();
         Alert::success('Success', 'Berhasil menghapus data');
         return redirect('/admin/iku');
     }
     // akhir iku



     // ringkasan
     public function ringkasan()
     {
         $ringkasan = InformasiBerkala::where('kategori_informasi_berkala', 'ringkasan')->get();
         return view('Admin.informasiBerkala.ringkasan.index', compact('ringkasan'));
     }

     public function storeRingkasan(Request $request)
     {
         $request->validate([
             'judul_informasi_berkala' => 'required',
             'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
         ]);

         $kategori = "ringkasan";

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
         return redirect('/admin/ringkasan');
     }


     public function editRingkasan($id)
     {
         $ringkasan = InformasiBerkala::where('id', $id)->firstOrFail();
         return view('Admin.informasiBerkala.ringkasan.edit', compact('ringkasan'));
     }


     public function updateRingkasan(Request $request, $id)
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
         return redirect('/admin/ringkasan');
     }

     public function destroyRingkasan($id)
     {
         $informasiBerkala = InformasiBerkala::find($id);

         // Hapus file_informasi_berkala
         if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
             Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
         }

         $informasiBerkala->delete();
         Alert::success('Success', 'Berhasil menghapus data');
         return redirect('/admin/ringkasan');
     }
     // akhir ringkasan




     // ppas
     public function ppas()
     {
         $ppas = InformasiBerkala::where('kategori_informasi_berkala', 'ppas')->get();
         return view('Admin.informasiBerkala.ppas.index', compact('ppas'));
     }

     public function storePpas(Request $request)
     {
         $request->validate([
             'judul_informasi_berkala' => 'required',
             'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
         ]);

         $kategori = "ppas";

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
         return redirect('/admin/ppas');
     }


     public function editPpas($id)
     {
         $ppas = InformasiBerkala::where('id', $id)->firstOrFail();
         return view('Admin.informasiBerkala.ppas.edit', compact('ppas'));
     }


     public function updatePpas(Request $request, $id)
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
         return redirect('/admin/ppas');
     }

     public function destroyPpas($id)
     {
         $informasiBerkala = InformasiBerkala::find($id);

         // Hapus file_informasi_berkala
         if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
             Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
         }

         $informasiBerkala->delete();
         Alert::success('Success', 'Berhasil menghapus data');
         return redirect('/admin/ppas');
     }
     // akhir ppas




     // laporan
     public function laporan()
     {
         $laporan = InformasiBerkala::where('kategori_informasi_berkala', 'laporan')->get();
         return view('Admin.informasiBerkala.laporan.index', compact('laporan'));
     }

     public function storeLaporan(Request $request)
     {
         $request->validate([
             'judul_informasi_berkala' => 'required',
             'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
         ]);

         $kategori = "laporan";

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
         return redirect('/admin/laporan');
     }


     public function editLaporan($id)
     {
         $laporan = InformasiBerkala::where('id', $id)->firstOrFail();
         return view('Admin.informasiBerkala.laporan.edit', compact('laporan'));
     }


     public function updateLaporan(Request $request, $id)
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
         return redirect('/admin/laporan');
     }

     public function destroyLaporan($id)
     {
         $informasiBerkala = InformasiBerkala::find($id);

         // Hapus file_informasi_berkala
         if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
             Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
         }

         $informasiBerkala->delete();
         Alert::success('Success', 'Berhasil menghapus data');
         return redirect('/admin/laporan');
     }
     // akhir laporan




     // rekapKelayakan
     public function rekapKelayakan()
     {
         $rekapKelayakan = InformasiBerkala::where('kategori_informasi_berkala', 'rekapKelayakan')->get();
         return view('Admin.informasiBerkala.rekapKelayakan.index', compact('rekapKelayakan'));
     }

     public function storeRekapKelayakan(Request $request)
     {
         $request->validate([
             'judul_informasi_berkala' => 'required',
             'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
         ]);

         $kategori = "rekapKelayakan";

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
         return redirect('/admin/rekapKelayakan');
     }


     public function editRekapKelayakan($id)
     {
         $rekapKelayakan = InformasiBerkala::where('id', $id)->firstOrFail();
         return view('Admin.informasiBerkala.rekapKelayakan.edit', compact('rekapKelayakan'));
     }


     public function updateRekapKelayakan(Request $request, $id)
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
         return redirect('/admin/rekapKelayakan');
     }

     public function destroyRekapKelayakan($id)
     {
         $informasiBerkala = InformasiBerkala::find($id);

         // Hapus file_informasi_berkala
         if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
             Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
         }

         $informasiBerkala->delete();
         Alert::success('Success', 'Berhasil menghapus data');
         return redirect('/admin/rekapKelayakan');
     }
     // akhir rekapKelayakan




     // sertifikatKelayakan
     public function sertifikatKelayakan()
     {
         $sertifikatKelayakan = InformasiBerkala::where('kategori_informasi_berkala', 'sertifikatKelayakan')->get();
         return view('Admin.informasiBerkala.sertifikatKelayakan.index', compact('sertifikatKelayakan'));
     }

     public function storeSertifikatKelayakan(Request $request)
     {
         $request->validate([
             'judul_informasi_berkala' => 'required',
             'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
         ]);

         $kategori = "sertifikatKelayakan";

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
         return redirect('/admin/sertifikatKelayakan');
     }


     public function editSertifikatKelayakan($id)
     {
         $sertifikatKelayakan = InformasiBerkala::where('id', $id)->firstOrFail();
         return view('Admin.informasiBerkala.sertifikatKelayakan.edit', compact('sertifikatKelayakan'));
     }


     public function updateSertifikatKelayakan(Request $request, $id)
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
         return redirect('/admin/sertifikatKelayakan');
     }

     public function destroySertifikatKelayakan($id)
     {
         $informasiBerkala = InformasiBerkala::find($id);

         // Hapus file_informasi_berkala
         if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
             Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
         }

         $informasiBerkala->delete();
         Alert::success('Success', 'Berhasil menghapus data');
         return redirect('/admin/sertifikatKelayakan');
     }
     // akhir sertifikatKelayakan



     // hasilLaboratorium
     public function hasilLaboratorium()
     {
         $hasilLaboratorium = InformasiBerkala::where('kategori_informasi_berkala', 'hasilLaboratorium')->get();
         return view('Admin.informasiBerkala.hasilLaboratorium.index', compact('hasilLaboratorium'));
     }

     public function storeHasilLaboratorium(Request $request)
     {
         $request->validate([
             'judul_informasi_berkala' => 'required',
             'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
         ]);

         $kategori = "hasilLaboratorium";

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
         return redirect('/admin/hasilLaboratorium');
     }


     public function editHasilLaboratorium($id)
     {
         $hasilLaboratorium = InformasiBerkala::where('id', $id)->firstOrFail();
         return view('Admin.informasiBerkala.hasilLaboratorium.edit', compact('hasilLaboratorium'));
     }


     public function updateHasilLaboratorium(Request $request, $id)
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
         return redirect('/admin/hasilLaboratorium');
     }

     public function destroyHasilLaboratorium($id)
     {
         $informasiBerkala = InformasiBerkala::find($id);

         // Hapus file_informasi_berkala
         if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
             Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
         }

         $informasiBerkala->delete();
         Alert::success('Success', 'Berhasil menghapus data');
         return redirect('/admin/hasilLaboratorium');
     }
     // akhir hasilLaboratorium



     // statistik
     public function statistik()
     {
         $statistik = InformasiBerkala::where('kategori_informasi_berkala', 'statistik')->get();
         return view('Admin.informasiBerkala.statistik.index', compact('statistik'));
     }

     public function storeStatistik(Request $request)
     {
         $request->validate([
             'judul_informasi_berkala' => 'required',
             'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
         ]);

         $kategori = "statistik";

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
         return redirect('/admin/statistik');
     }


     public function editStatistik($id)
     {
         $statistik = InformasiBerkala::where('id', $id)->firstOrFail();
         return view('Admin.informasiBerkala.statistik.edit', compact('statistik'));
     }


     public function updateStatistik(Request $request, $id)
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
         return redirect('/admin/statistik');
     }

     public function destroyStatistik($id)
     {
         $informasiBerkala = InformasiBerkala::find($id);

         // Hapus file_informasi_berkala
         if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
             Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
         }

         $informasiBerkala->delete();
         Alert::success('Success', 'Berhasil menghapus data');
         return redirect('/admin/statistik');
     }
     // akhir statistik



     // produksiPelabuhan
     public function produksiPelabuhan()
     {
         $produksiPelabuhan = InformasiBerkala::where('kategori_informasi_berkala', 'produksiPelabuhan')->get();
         return view('Admin.informasiBerkala.produksiPelabuhan.index', compact('produksiPelabuhan'));
     }

     public function storeProduksiPelabuhan(Request $request)
     {
         $request->validate([
             'judul_informasi_berkala' => 'required',
             'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
         ]);

         $kategori = "produksiPelabuhan";

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
         return redirect('/admin/produksiPelabuhan');
     }


     public function editProduksiPelabuhan($id)
     {
         $produksiPelabuhan = InformasiBerkala::where('id', $id)->firstOrFail();
         return view('Admin.informasiBerkala.produksiPelabuhan.edit', compact('produksiPelabuhan'));
     }


     public function updateProduksiPelabuhan(Request $request, $id)
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
         return redirect('/admin/produksiPelabuhan');
     }

     public function destroyProduksiPelabuhan($id)
     {
         $informasiBerkala = InformasiBerkala::find($id);

         // Hapus file_informasi_berkala
         if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
             Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
         }

         $informasiBerkala->delete();
         Alert::success('Success', 'Berhasil menghapus data');
         return redirect('/admin/produksiPelabuhan');
     }
     // akhir produksiPelabuhan




     // peta
     public function peta()
     {
         $peta = InformasiBerkala::where('kategori_informasi_berkala', 'peta')->get();
         return view('Admin.informasiBerkala.peta.index', compact('peta'));
     }

     public function storePeta(Request $request)
     {
         $request->validate([
             'judul_informasi_berkala' => 'required',
             'file_informasi_berkala' => 'mimes:pdf,jpg,jpeg,png',
         ]);

         $kategori = "peta";

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
         return redirect('/admin/peta');
     }


     public function editPeta($id)
     {
         $peta = InformasiBerkala::where('id', $id)->firstOrFail();
         return view('Admin.informasiBerkala.peta.edit', compact('peta'));
     }


     public function updatePeta(Request $request, $id)
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
         return redirect('/admin/peta');
     }

     public function destroyPeta($id)
     {
         $informasiBerkala = InformasiBerkala::find($id);

         // Hapus file_informasi_berkala
         if (Storage::exists('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala)) {
             Storage::delete('public/fileInformasiBerkala/' . $informasiBerkala->file_informasi_berkala);
         }

         $informasiBerkala->delete();
         Alert::success('Success', 'Berhasil menghapus data');
         return redirect('/admin/peta');
     }
     // akhir peta
}
