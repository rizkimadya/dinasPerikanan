@extends('LayoutAdmin.app', ['title' => 'Berita'])

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
                    <iframe src="{{ asset('storage/filePengumuman/' . $pengumuman->file) }}" width="100%"
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
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive p-md-4 p-2">
                <form action="/admin/pengumuman/update/{{ $pengumuman->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label">File</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="mb-3">
                        <label for="judul_pengumuman" class="form-label">Judul Blog</label>
                        <input type="text" class="form-control" name="judul_pengumuman" id="judul_pengumuman"
                            value="{{ $pengumuman->judul_pengumuman }}" placeholder="Masukkan Judul Blog">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Deskripsi Blog</label>
                        <textarea name="keterangan" id="editor" style="height: 100px; color:#000;">{{ $pengumuman->keterangan }}</textarea>
                    </div>
                    <div class="mt-5 justify-content-center d-flex gap-2">
                        <a href="{{ url('/admin/pengumuman') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
