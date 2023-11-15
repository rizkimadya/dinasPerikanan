<?php

namespace App\Http\Controllers;

use App\Models\Pejabat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PejabatController extends Controller
{
    public function index()
    {
        $pejabat = Pejabat::all();
        return view('Admin.profil.pejabat.index', compact('pejabat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'profil_pdf' => 'required|file|mimes:pdf',
            'profil_pdf' => 'required',
            'jabatan' => 'required',
        ]);

        if ($request->has('profil_pdf')) {
            $file = $request->file('profil_pdf');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/profilPejabat', $nama_file);

            $pejabat = new Pejabat([
                'profil_pdf' => $nama_file,
                'nama_lengkap' => $request->nama_lengkap,
                'jabatan' => $request->jabatan,
            ]);
        }

        $pejabat->save();
        // Alert::success('Success', 'Berhasil menambah pejabat');
        return redirect('/admin/pejabat');
    }


    public function edit($id)
    {
        $pejabat = Pejabat::where('id', $id)->firstOrFail();
        return view('Admin.profil.pejabat.edit', compact('pejabat'));
    }


    public function update(Request $request, $id)
    {
        $pejabat = Pejabat::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('profil_pdf')) {
            // Hapus profil_pdf lama
            if (Storage::exists('public/profilPejabat/' . $pejabat->profil_pdf)) {
                Storage::delete('public/profilPejabat/' . $pejabat->profil_pdf);
            }

            $file = $request->file('profil_pdf');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'public/profilPejabat/';

            // Simpan file ke direktori storage
            $file->storeAs($tujuan_upload, $nama_file);

            $data['profil_pdf'] = $nama_file;
        } else {
            unset($data['profil_pdf']);
        }

        $pejabat->update($data);
        // Alert::success('Success', 'Berhasil mengupdate pejabat');
        return redirect('/admin/pejabat');
    }


    public function destroy($id)
    {
        $pejabat = Pejabat::find($id);

        // Hapus profil_pdf
        if (Storage::exists('public/profilPejabat/' . $pejabat->profil_pdf)) {
            Storage::delete('public/profilPejabat/' . $pejabat->profil_pdf);
        }

        $pejabat->delete();
        // Alert::success('Success', 'Berhasil menghapus pejabat');
        return redirect('/admin/pejabat');
    }
}
