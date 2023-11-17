@extends('LayoutAdmin.app', ['title' => 'Pengaduan'])

@section('modal-add')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        File Lama
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">File Lama</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="height: 85vh;">
                    <iframe src="{{ asset('storage/filePengaduan/' . $pengaduan->file_pengaduan) }}" width="100%"
                        height="90%"></iframe>
                    <div class="mt-5 justify-content-center d-flex gap-2">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card table-responsive p-md-4 p-2">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
                    <input type="text" class="form-control" value="{{ $pengaduan->nama_pelapor }}" name="nama_pelapor"
                        id="nama_pelapor" placeholder="Masukkan Nama Pelapor">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Pelapor</label>
                    <input type="text" class="form-control" value="{{ $pengaduan->alamat }}" name="alamat"
                        id="alamat" placeholder="Masukkan Alamat Pelapor">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">Nomor Telpon Pelapor</label>
                    <input type="number" class="form-control" value="{{ $pengaduan->no_telp }}" name="no_telp"
                        id="no_telp" placeholder="Masukkan Nomor Telpon Pelapor">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="tgl_kejadian" class="form-label">Tanggal Kejadian</label>
                    <input type="date" class="form-control" value="{{ $pengaduan->tgl_kejadian }}" name="tgl_kejadian"
                        id="tgl_kejadian" placeholder="Masukkan Tanggal Kejadian">
                </div>
                <div class="mb-3">
                    <label for="lokasi_kejadian" class="form-label">Lokasi Kejadian</label>
                    <input type="text" class="form-control" value="{{ $pengaduan->lokasi_kejadian }}"
                        name="lokasi_kejadian" id="lokasi_kejadian" placeholder="Masukkan Lokasi Kejadian">
                </div>
                <div class="mb-3">
                    <label for="jenis_keluhan" class="form-label">Jenis Keluhan</label>
                    <input type="text" class="form-control" value="{{ $pengaduan->jenis_keluhan }}" name="jenis_keluhan"
                        id="jenis_keluhan" placeholder="Masukkan Jenis Keluhan">
                </div>
                <div class="mb-3">
                    <label for="detail_keluhan" class="form-label">Detail Keluhan</label>
                    <input type="text" class="form-control" value="{{ $pengaduan->detail_keluhan }}" name="detail_keluhan"
                        id="detail_keluhan" placeholder="Masukkan Detail Keluhan">
                </div>
            </div>

            <div class="mb-3">
                <label for="deskripsi_kejadian" class="form-label">Deskripsi</label>
                <textarea name="deskripsi_kejadian" id="editor" style="height: 100px; color:#000;">{{ $pengaduan->deskripsi_kejadian }}</textarea>
            </div>
        </div>
    </div>
@endsection
