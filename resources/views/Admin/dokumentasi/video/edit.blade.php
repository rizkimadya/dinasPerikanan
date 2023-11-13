@extends('LayoutAdmin.app', ['title' => 'Album Kegiatan'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive p-md-4 p-2">
                <form action="/admin/video/update/{{ $video->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="link_video" class="form-label">Link Video</label>
                        <input type="url" class="form-control" name="link_video" id="link_video"
                            value="{{ $video->link_video }}" placeholder="Masukkan Link Video">
                    </div>
                    <div class="mb-3">
                        <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan"
                            value="{{ $video->nama_kegiatan }}" placeholder="Masukkan Nama Kegiatan">
                    </div>
                    <div class="mt-5 justify-content-center d-flex gap-2">
                        <a href="{{ url('/admin/video') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
