@extends('LayoutAdmin.app', ['title' => 'Iku'])

@section('modal-add')
    <!-- Button trigger modal -->
    @if ($iku->file_informasi_berkala === null)
        <a href="{{ asset('storage/fileInformasiBerkala/' . $iku->file_informasi_berkala) }}" target="_blank"
            class="btn btn-primary btn-sm mb-3 disabled">
            File Lama
        </a>
    @else
        <a href="{{ asset('storage/fileInformasiBerkala/' . $iku->file_informasi_berkala) }}" target="_blank"
            class="btn btn-primary btn-sm mb-3">
            File Lama
        </a>
    @endif
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive p-md-4 p-2">
                <form action="/admin/iku/update/{{ $iku->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judul_informasi_berkala" class="form-label">Judul<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="judul_informasi_berkala"
                            id="judul_informasi_berkala" value="{{ $iku->judul_informasi_berkala }}"
                            placeholder="Masukkan Judul">
                    </div>
                    <div class="mb-3">
                        <label for="file_informasi_berkala" class="form-label">File <span class="text-danger">format
                                pdf, jpg, png, jpeg</span></label>
                        <input type="file" class="form-control" name="file_informasi_berkala"
                            id="file_informasi_berkala">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_informasi_berkala" class="form-label">Keterangan</label>
                        <textarea name="keterangan_informasi_berkala" id="editor" style="height: 100px; color:#000;">{{ $iku->keterangan_informasi_berkala }}</textarea>
                    </div>
                    <div class="mt-5 justify-content-center d-flex gap-2">
                        <a href="{{ url('/admin/iku') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
