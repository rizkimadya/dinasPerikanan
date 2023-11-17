@extends('LayoutAdmin.app', ['title' => 'Survei Kepuasan'])


@section('content')
    <div class="card table-responsive p-md-4 p-2">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="nama_responden" class="form-label">Nama
                    </label>
                    <input type="text" class="form-control" name="nama_responden" id="nama" disabled
                        placeholder="Masukkan Nama" value="{{ $survei->nama_responden }}">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No
                        Telp/Wa</label>
                    <input type="number" class="form-control" name="no_telp" id="no_telp" disabled
                        placeholder="Masukkan No Telp/Wa" value="{{ $survei->no_telp }}">
                </div>
                <div class="mb-3">
                    <label for="penilaian_kepuasan" class="form-label">Penilaian 1-100</label>
                    <input type="range" class="form-range" name="penilaian_kepuasan" id="penilaian_kepuasan" disabled
                        placeholder="Masukkan Penilaian 1-100" min="1" max="100"
                        value="{{ $survei->penilaian_kepuasan }}">
                    <output for="penilaian_kepuasan"
                        id="output_penilaian_kepuasan">{{ $survei->penilaian_kepuasan }}</output>
                </div>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan </label>
                <textarea name="keterangan" id="editor" disabled style="height: 100px; color:#000;">{{ $survei->keterangan }}</textarea>
            </div>

        </div>
        <div class="mt-5 justify-content-center d-flex gap-2">
            <a href="{{ url('/admin/survei') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
